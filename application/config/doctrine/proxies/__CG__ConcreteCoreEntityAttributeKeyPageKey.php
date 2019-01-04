<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Attribute\Key;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PageKey extends \Concrete\Core\Entity\Attribute\Key\PageKey implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'settings', 'akID', 'akHandle', 'akName', 'akIsSearchable', 'akIsInternal', 'akIsSearchableIndexed', 'set_keys', 'type', 'category', 'package'];
        }

        return ['__isInitialized__', 'settings', 'akID', 'akHandle', 'akName', 'akIsSearchable', 'akIsInternal', 'akIsSearchableIndexed', 'set_keys', 'type', 'category', 'package'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PageKey $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getAttributeKeyCategoryHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeKeyCategoryHandle', []);

        return parent::getAttributeKeyCategoryHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributeKeyID($akID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributeKeyID', [$akID]);

        return parent::setAttributeKeyID($akID);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeKeyID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeKeyID', []);

        return parent::getAttributeKeyID();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeKeyHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeKeyHandle', []);

        return parent::getAttributeKeyHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributeKeyHandle($akHandle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributeKeyHandle', [$akHandle]);

        return parent::setAttributeKeyHandle($akHandle);
    }

    /**
     * {@inheritDoc}
     */
    public function isAttributeKeyInternal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAttributeKeyInternal', []);

        return parent::isAttributeKeyInternal();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAttributeKeyInternal($akIsInternal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAttributeKeyInternal', [$akIsInternal]);

        return parent::setIsAttributeKeyInternal($akIsInternal);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeKeyName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeKeyName', []);

        return parent::getAttributeKeyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributeKeyName($akName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributeKeyName', [$akName]);

        return parent::setAttributeKeyName($akName);
    }

    /**
     * {@inheritDoc}
     */
    public function isAttributeKeySearchable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAttributeKeySearchable', []);

        return parent::isAttributeKeySearchable();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAttributeKeySearchable($akIsSearchable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAttributeKeySearchable', [$akIsSearchable]);

        return parent::setIsAttributeKeySearchable($akIsSearchable);
    }

    /**
     * {@inheritDoc}
     */
    public function isAttributeKeyContentIndexed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAttributeKeyContentIndexed', []);

        return parent::isAttributeKeyContentIndexed();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAttributeKeyContentIndexed($akIsSearchableIndexed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAttributeKeyContentIndexed', [$akIsSearchableIndexed]);

        return parent::setIsAttributeKeyContentIndexed($akIsSearchableIndexed);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeKeySettings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeKeySettings', []);

        return parent::getAttributeKeySettings();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributeKeySettings($settings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributeKeySettings', [$settings]);

        return parent::setAttributeKeySettings($settings);
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributeType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributeType', [$type]);

        return parent::setAttributeType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeType', []);

        return parent::getAttributeType();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeTypeHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeTypeHandle', []);

        return parent::getAttributeTypeHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function getController()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getController', []);

        return parent::getController();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeCategoryEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeCategoryEntity', []);

        return parent::getAttributeCategoryEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeCategory', []);

        return parent::getAttributeCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributeCategoryEntity($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributeCategoryEntity', [$category]);

        return parent::setAttributeCategoryEntity($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getExporter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExporter', []);

        return parent::getExporter();
    }

    /**
     * {@inheritDoc}
     */
    public function getControlView(\Concrete\Core\Form\Context\ContextInterface $context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getControlView', [$context]);

        return parent::getControlView($context);
    }

    /**
     * {@inheritDoc}
     */
    public function render($view = 'view', $value = false, $return = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'render', [$view, $value, $return]);

        return parent::render($view, $value, $return);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeKeyDisplayName($format = 'html')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeKeyDisplayName', [$format]);

        return parent::getAttributeKeyDisplayName($format);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeSets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeSets', []);

        return parent::getAttributeSets();
    }

    /**
     * {@inheritDoc}
     */
    public function inAttributeSet(\Concrete\Core\Entity\Attribute\Set $set)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'inAttributeSet', [$set]);

        return parent::inAttributeSet($set);
    }

    /**
     * {@inheritDoc}
     */
    public function getSearchIndexer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSearchIndexer', []);

        return parent::getSearchIndexer();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributeSet($set)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributeSet', [$set]);

        return parent::setAttributeSet($set);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeValueIDList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeValueIDList', []);

        return parent::getAttributeValueIDList();
    }

    /**
     * {@inheritDoc}
     */
    public function getPackage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackage', []);

        return parent::getPackage();
    }

    /**
     * {@inheritDoc}
     */
    public function setPackage($package)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPackage', [$package]);

        return parent::setPackage($package);
    }

    /**
     * {@inheritDoc}
     */
    public function getPackageID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackageID', []);

        return parent::getPackageID();
    }

    /**
     * {@inheritDoc}
     */
    public function getPackageHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackageHandle', []);

        return parent::getPackageHandle();
    }

}
