<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for document StructType
 * @subpackage Structs
 */
class Document extends AbstractStructBase
{
    /**
     * The external_reference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $external_reference;
    /**
     * The form
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Easyatwork\Signicat\StructType\Form
     */
    public $form;
    /**
     * The sign_text_entry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sign_text_entry;
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * Constructor method for document
     * @uses Document::setExternal_reference()
     * @uses Document::setForm()
     * @uses Document::setSign_text_entry()
     * @uses Document::setId()
     * @param string $external_reference
     * @param \Easyatwork\Signicat\StructType\Form $form
     * @param string $sign_text_entry
     * @param string $id
     */
    public function __construct($external_reference = null, \Easyatwork\Signicat\StructType\Form $form = null, $sign_text_entry = null, $id = null)
    {
        $this
            ->setExternal_reference($external_reference)
            ->setForm($form)
            ->setSign_text_entry($sign_text_entry)
            ->setId($id);
    }
    /**
     * Get external_reference value
     * @return string|null
     */
    public function getExternal_reference()
    {
        return $this->{'external-reference'};
    }
    /**
     * Set external_reference value
     * @param string $external_reference
     * @return \Easyatwork\Signicat\StructType\Document
     */
    public function setExternal_reference($external_reference = null)
    {
        // validation for constraint: string
        if (!is_null($external_reference) && !is_string($external_reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($external_reference)), __LINE__);
        }
        $this->external_reference = $this->{'external-reference'} = $external_reference;
        return $this;
    }
    /**
     * Get form value
     * @return \Easyatwork\Signicat\StructType\Form|null
     */
    public function getForm()
    {
        return $this->form;
    }
    /**
     * Set form value
     * @param \Easyatwork\Signicat\StructType\Form $form
     * @return \Easyatwork\Signicat\StructType\Document
     */
    public function setForm(\Easyatwork\Signicat\StructType\Form $form = null)
    {
        $this->form = $form;
        return $this;
    }
    /**
     * Get sign_text_entry value
     * @return string|null
     */
    public function getSign_text_entry()
    {
        return $this->{'sign-text-entry'};
    }
    /**
     * Set sign_text_entry value
     * @param string $sign_text_entry
     * @return \Easyatwork\Signicat\StructType\Document
     */
    public function setSign_text_entry($sign_text_entry = null)
    {
        // validation for constraint: string
        if (!is_null($sign_text_entry) && !is_string($sign_text_entry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sign_text_entry)), __LINE__);
        }
        $this->sign_text_entry = $this->{'sign-text-entry'} = $sign_text_entry;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Easyatwork\Signicat\StructType\Document
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Document
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
