<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for packaging-task-status-info StructType
 * @subpackage Structs
 */
class Packaging_task_status_info extends AbstractStructBase
{
    /**
     * The request_id
     * @var string
     */
    public $request_id;
    /**
     * The packaging_task_id
     * @var string
     */
    public $packaging_task_id;
    /**
     * The packaging_task_status
     * @var string
     */
    public $packaging_task_status;
    /**
     * The packaging_document_status
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Easyatwork\Signicat\StructType\Packaging_document_status[]
     */
    public $packaging_document_status;
    /**
     * Constructor method for packaging-task-status-info
     * @uses Packaging_task_status_info::setRequest_id()
     * @uses Packaging_task_status_info::setPackaging_task_id()
     * @uses Packaging_task_status_info::setPackaging_task_status()
     * @uses Packaging_task_status_info::setPackaging_document_status()
     * @param string $request_id
     * @param string $packaging_task_id
     * @param string $packaging_task_status
     * @param \Easyatwork\Signicat\StructType\Packaging_document_status[] $packaging_document_status
     */
    public function __construct($request_id = null, $packaging_task_id = null, $packaging_task_status = null, array $packaging_document_status = array())
    {
        $this
            ->setRequest_id($request_id)
            ->setPackaging_task_id($packaging_task_id)
            ->setPackaging_task_status($packaging_task_status)
            ->setPackaging_document_status($packaging_document_status);
    }
    /**
     * Get request_id value
     * @return string|null
     */
    public function getRequest_id()
    {
        return $this->{'request-id'};
    }
    /**
     * Set request_id value
     * @param string $request_id
     * @return \Easyatwork\Signicat\StructType\Packaging_task_status_info
     */
    public function setRequest_id($request_id = null)
    {
        // validation for constraint: string
        if (!is_null($request_id) && !is_string($request_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($request_id)), __LINE__);
        }
        $this->request_id = $this->{'request-id'} = $request_id;
        return $this;
    }
    /**
     * Get packaging_task_id value
     * @return string|null
     */
    public function getPackaging_task_id()
    {
        return $this->{'packaging-task-id'};
    }
    /**
     * Set packaging_task_id value
     * @param string $packaging_task_id
     * @return \Easyatwork\Signicat\StructType\Packaging_task_status_info
     */
    public function setPackaging_task_id($packaging_task_id = null)
    {
        // validation for constraint: string
        if (!is_null($packaging_task_id) && !is_string($packaging_task_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packaging_task_id)), __LINE__);
        }
        $this->packaging_task_id = $this->{'packaging-task-id'} = $packaging_task_id;
        return $this;
    }
    /**
     * Get packaging_task_status value
     * @return string|null
     */
    public function getPackaging_task_status()
    {
        return $this->{'packaging-task-status'};
    }
    /**
     * Set packaging_task_status value
     * @uses \Easyatwork\Signicat\EnumType\Packaging_task_status::valueIsValid()
     * @uses \Easyatwork\Signicat\EnumType\Packaging_task_status::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packaging_task_status
     * @return \Easyatwork\Signicat\StructType\Packaging_task_status_info
     */
    public function setPackaging_task_status($packaging_task_status = null)
    {
        // validation for constraint: enumeration
        if (!\Easyatwork\Signicat\EnumType\Packaging_task_status::valueIsValid($packaging_task_status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packaging_task_status, implode(', ', \Easyatwork\Signicat\EnumType\Packaging_task_status::getValidValues())), __LINE__);
        }
        $this->packaging_task_status = $this->{'packaging-task-status'} = $packaging_task_status;
        return $this;
    }
    /**
     * Get packaging_document_status value
     * @return \Easyatwork\Signicat\StructType\Packaging_document_status[]|null
     */
    public function getPackaging_document_status()
    {
        return $this->{'packaging-document-status'};
    }
    /**
     * Set packaging_document_status value
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Packaging_document_status[] $packaging_document_status
     * @return \Easyatwork\Signicat\StructType\Packaging_task_status_info
     */
    public function setPackaging_document_status(array $packaging_document_status = array())
    {
        foreach ($packaging_document_status as $packaging_task_status_infoPackaging_document_statusItem) {
            // validation for constraint: itemType
            if (!$packaging_task_status_infoPackaging_document_statusItem instanceof \Easyatwork\Signicat\StructType\Packaging_document_status) {
                throw new \InvalidArgumentException(sprintf('The packaging_document_status property can only contain items of \Easyatwork\Signicat\StructType\Packaging_document_status, "%s" given', is_object($packaging_task_status_infoPackaging_document_statusItem) ? get_class($packaging_task_status_infoPackaging_document_statusItem) : gettype($packaging_task_status_infoPackaging_document_statusItem)), __LINE__);
            }
        }
        $this->packaging_document_status = $this->{'packaging-document-status'} = $packaging_document_status;
        return $this;
    }
    /**
     */
    public function addToPackaging_document_status(\Easyatwork\Signicat\StructType\Packaging_document_status $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Easyatwork\Signicat\StructType\Packaging_document_status) {
            throw new \InvalidArgumentException(sprintf('The packaging_document_status property can only contain items of \Easyatwork\Signicat\StructType\Packaging_document_status, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->packaging_document_status[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Packaging_task_status_info
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
