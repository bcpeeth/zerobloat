<?php
namespace Concrete\Core\StyleCustomizer\Style;

use Concrete\Core\Support\Less\TreeCallColor;
use Core;
use Concrete\Core\StyleCustomizer\Style\Value\ColorValue;
use Less_Tree_Color;
use Less_Tree_Call;
use View;
use Request;
use Concrete\Core\Http\Service\Json;

class ColorStyle extends Style
{
    public function render($value = false)
    {
        $color = '';
        if ($value) {
            $color = $value->toStyleString();
        }
        $inputName = $this->getVariable();
        $r = Request::getInstance();
        if ($r->request->has($inputName)) {
            $color = h($r->request->get($inputName));
        }

        $view = View::getInstance();
        $view->requireAsset('core/colorpicker');

        $json = new Json();

        echo "<input type=\"text\" name=\"{$inputName}[color]\" value=\"{$color}\" id=\"ccm-colorpicker-{$inputName}\" />";
        echo "<script type=\"text/javascript\">";
        echo "$(function() { $('#ccm-colorpicker-{$inputName}').spectrum({
            showInput: true,
            showInitial: true,
            preferredFormat: 'rgb',
            allowEmpty: true,
            className: 'ccm-widget-colorpicker',
            showAlpha: true,
            value: " . $json->encode($color) . ",
            cancelText: " . $json->encode(t('Cancel')) . ",
            chooseText: " . $json->encode(t('Choose')) . ",
            clearText: " . $json->encode(t('Clear Color Selection')) . ",
            change: function() {ConcreteEvent.publish('StyleCustomizerControlUpdate');}
        });});";
        echo "</script>";
    }

    public static function parse($value, $variable = false)
    {
        if ($value instanceof Less_Tree_Color) {
            if ($value->isTransparentKeyword) {
                return false;
            }
            $cv = new ColorValue($variable);
            $cv->setRed($value->rgb[0]);
            $cv->setGreen($value->rgb[1]);
            $cv->setBlue($value->rgb[2]);
        } elseif ($value instanceof Less_Tree_Call) {
            // Extract the arguments from the value
            $color = TreeCallColor::fromTreeCall($value);
            $args = $color->getArguments();

            // might be rgb() or rgba()
            $cv = new ColorValue($variable);
            $cv->setRed($args[0]->value[0]->value);
            $cv->setGreen($args[1]->value[0]->value);
            $cv->setBlue($args[2]->value[0]->value);
            if ($color->getName() == 'rgba') {
                $cv->setAlpha($args[3]->value[0]->value);
            }
        }

        return $cv;
    }

    public function getValueFromRequest(\Symfony\Component\HttpFoundation\ParameterBag $request)
    {
        $color = $request->get($this->getVariable());
        if (!$color['color']) { // transparent
            return false;
        }
        $cv = new \Primal\Color\Parser($color['color']);
        $result = $cv->getResult();
        $alpha = false;
        if (is_numeric($result->alpha) && $result->alpha >= 0 && $result->alpha < 1) {
            $alpha = $result->alpha;
        }
        $cv = new ColorValue($this->getVariable());
        $cv->setRed($result->red);
        $cv->setGreen($result->green);
        $cv->setBlue($result->blue);
        $cv->setAlpha($alpha);

        return $cv;
    }

    public static function getValuesFromVariables($rules = [])
    {
        $values = [];
        foreach ($rules as $rule) {
            if (preg_match('/@(.+)\-color/i',  isset($rule->name) ? $rule->name : '', $matches)) {
                $value = $rule->value->value[0]->value[0];
                $cv = static::parse($value, $matches[1]);
                if (is_object($cv)) {
                    $values[] = $cv;
                }
            }
        }

        return $values;
    }
}
