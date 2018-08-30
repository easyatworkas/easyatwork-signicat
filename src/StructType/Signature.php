<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for signature StructType
 * @subpackage Structs
 */
class Signature extends AbstractStructBase
{
    /**
     * The dialog
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Easyatwork\Signicat\StructType\Dialog
     */
    public $dialog;
    /**
     * The method
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Easyatwork\Signicat\StructType\Method[]
     */
    public $method;
    /**
     * The if_authentication
     * @var string
     */
    public $if_authentication;
    /**
     * The responsive
     * @var bool
     */
    public $responsive;
    /**
     * Constructor method for signature
     * @uses Signature::setDialog()
     * @uses Signature::setMethod()
     * @uses Signature::setIf_authentication()
     * @uses Signature::setResponsive()
     * @param \Easyatwork\Signicat\StructType\Dialog $dialog
     * @param \Easyatwork\Signicat\StructType\Method[] $method
     * @param string $if_authentication
     * @param bool $responsive
     */
    public function __construct(\Easyatwork\Signicat\StructType\Dialog $dialog = null, array $method = array(), $if_authentication = null, $responsive = null)
    {
        $this
            ->setDialog($dialog)
            ->setMethod($method)
            ->setIf_authentication($if_authentication)
            ->setResponsive($responsive);
    }
    /**
     * Get dialog value
     * @return \Easyatwork\Signicat\StructType\Dialog|null
     */
    public function getDialog()
    {
        return $this->dialog;
    }
    /**
     * Set dialog value
     * @param \Easyatwork\Signicat\StructType\Dialog $dialog
     * @return \Easyatwork\Signicat\StructType\Signature
     */
    public function setDialog(\Easyatwork\Signicat\StructType\Dialog $dialog = null)
    {
        $this->dialog = $dialog;
        return $this;
    }
    /**
     * Get method value
     * @return \Easyatwork\Signicat\StructType\Method[]|null
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * Set method value
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Method[] $method
     * @return \Easyatwork\Signicat\StructType\Signature
     */
    public function setMethod(array $method = array())
    {
        foreach ($method as $signatureMethodItem) {
            // validation for constraint: itemType
            if (!$signatureMethodItem instanceof \Easyatwork\Signicat\StructType\Method) {
                throw new \InvalidArgumentException(sprintf('The method property can only contain items of \Easyatwork\Signicat\StructType\Method, "%s" given', is_object($signatureMethodItem) ? get_class($signatureMethodItem) : gettype($signatureMethodItem)), __LINE__);
            }
        }
        $this->method = $method;
        return $this;
    }
    /**
     * Add item to method value
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Method $item
     * @return \Easyatwork\Signicat\StructType\Signature
     */
    public function addToMethod(\Easyatwork\Signicat\StructType\Method $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Easyatwork\Signicat\StructType\Method) {
            throw new \InvalidArgumentException(sprintf('The method property can only contain items of \Easyatwork\Signicat\StructType\Method, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->method[] = $item;
        return $this;
    }
    /**
     * Get if_authentication value
     * @return string|null
     */
    public function getIf_authentication()
    {
        return $this->{'if-authentication'};
    }
    /**
     * Set if_authentication value
     * @param string $if_authentication
     * @return \Easyatwork\Signicat\StructType\Signature
     */
    public function setIf_authentication($if_authentication = null)
    {
        // validation for constraint: string
        if (!is_null($if_authentication) && !is_string($if_authentication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($if_authentication)), __LINE__);
        }
        $this->if_authentication = $this->{'if-authentication'} = $if_authentication;
        return $this;
    }
    /**
     * Get responsive value
     * @return bool|null
     */
    public function getResponsive()
    {
        return $this->responsive;
    }
    /**
     * Set responsive value
     * @param bool $responsive
     * @return \Easyatwork\Signicat\StructType\Signature
     */
    public function setResponsive($responsive = null)
    {
        // validation for constraint: boolean
        if (!is_null($responsive) && !is_bool($responsive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($responsive)), __LINE__);
        }
        $this->responsive = $responsive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Signature
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
