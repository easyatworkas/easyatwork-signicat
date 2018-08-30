<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for document-action StructType
 * @subpackage Structs
 */
class Document_action extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $type;
    /**
     * The dialog
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Easyatwork\Signicat\StructType\Dialog
     */
    public $dialog;
    /**
     * The document_ref
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $document_ref;
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Easyatwork\Signicat\StructType\Document
     */
    public $document;
    /**
     * The order_index
     * @var int
     */
    public $order_index;
    /**
     * The optional
     * @var bool
     */
    public $optional;
    /**
     * The send_result_to_archive
     * @var bool
     */
    public $send_result_to_archive;
    /**
     * Constructor method for document-action
     * @uses Document_action::setType()
     * @uses Document_action::setDialog()
     * @uses Document_action::setDocument_ref()
     * @uses Document_action::setDocument()
     * @uses Document_action::setOrder_index()
     * @uses Document_action::setOptional()
     * @uses Document_action::setSend_result_to_archive()
     * @param string $type
     * @param \Easyatwork\Signicat\StructType\Dialog $dialog
     * @param string $document_ref
     * @param \Easyatwork\Signicat\StructType\Document $document
     * @param int $order_index
     * @param bool $optional
     * @param bool $send_result_to_archive
     */
    public function __construct($type = null, \Easyatwork\Signicat\StructType\Dialog $dialog = null, $document_ref = null, \Easyatwork\Signicat\StructType\Document $document = null, $order_index = null, $optional = null, $send_result_to_archive = null)
    {
        $this
            ->setType($type)
            ->setDialog($dialog)
            ->setDocument_ref($document_ref)
            ->setDocument($document)
            ->setOrder_index($order_index)
            ->setOptional($optional)
            ->setSend_result_to_archive($send_result_to_archive);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Easyatwork\Signicat\EnumType\Document_action_type::valueIsValid()
     * @uses \Easyatwork\Signicat\EnumType\Document_action_type::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Easyatwork\Signicat\StructType\Document_action
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Easyatwork\Signicat\EnumType\Document_action_type::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Easyatwork\Signicat\EnumType\Document_action_type::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
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
     * @return \Easyatwork\Signicat\StructType\Document_action
     */
    public function setDialog(\Easyatwork\Signicat\StructType\Dialog $dialog = null)
    {
        $this->dialog = $dialog;
        return $this;
    }
    /**
     * Get document_ref value
     * @return string|null
     */
    public function getDocument_ref()
    {
        return $this->{'document-ref'};
    }
    /**
     * Set document_ref value
     * @param string $document_ref
     * @return \Easyatwork\Signicat\StructType\Document_action
     */
    public function setDocument_ref($document_ref = null)
    {
        // validation for constraint: string
        if (!is_null($document_ref) && !is_string($document_ref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($document_ref)), __LINE__);
        }
        $this->document_ref = $this->{'document-ref'} = $document_ref;
        return $this;
    }
    /**
     * Get document value
     * @return \Easyatwork\Signicat\StructType\Document|null
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param \Easyatwork\Signicat\StructType\Document $document
     * @return \Easyatwork\Signicat\StructType\Document_action
     */
    public function setDocument(\Easyatwork\Signicat\StructType\Document $document = null)
    {
        $this->document = $document;
        return $this;
    }
    /**
     * Get order_index value
     * @return int|null
     */
    public function getOrder_index()
    {
        return $this->{'order-index'};
    }
    /**
     * Set order_index value
     * @param int $order_index
     * @return \Easyatwork\Signicat\StructType\Document_action
     */
    public function setOrder_index($order_index = null)
    {
        // validation for constraint: int
        if (!is_null($order_index) && !is_numeric($order_index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($order_index)), __LINE__);
        }
        $this->order_index = $this->{'order-index'} = $order_index;
        return $this;
    }
    /**
     * Get optional value
     * @return bool|null
     */
    public function getOptional()
    {
        return $this->optional;
    }
    /**
     * Set optional value
     * @param bool $optional
     * @return \Easyatwork\Signicat\StructType\Document_action
     */
    public function setOptional($optional = null)
    {
        // validation for constraint: boolean
        if (!is_null($optional) && !is_bool($optional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($optional)), __LINE__);
        }
        $this->optional = $optional;
        return $this;
    }
    /**
     * Get send_result_to_archive value
     * @return bool|null
     */
    public function getSend_result_to_archive()
    {
        return $this->{'send-result-to-archive'};
    }
    /**
     * Set send_result_to_archive value
     * @param bool $send_result_to_archive
     * @return \Easyatwork\Signicat\StructType\Document_action
     */
    public function setSend_result_to_archive($send_result_to_archive = null)
    {
        // validation for constraint: boolean
        if (!is_null($send_result_to_archive) && !is_bool($send_result_to_archive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($send_result_to_archive)), __LINE__);
        }
        $this->send_result_to_archive = $this->{'send-result-to-archive'} = $send_result_to_archive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Document_action
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
