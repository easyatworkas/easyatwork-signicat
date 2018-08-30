<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for get-packaging-task-status-response StructType
 * @subpackage Structs
 */
class Get_packaging_task_status_response extends AbstractStructBase
{
    /**
     * The packaging_task_status_info
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Easyatwork\Signicat\StructType\Packaging_task_status_info[]
     */
    public $packaging_task_status_info;
    /**
     * Constructor method for get-packaging-task-status-response
     * @uses Get_packaging_task_status_response::setPackaging_task_status_info()
     * @param \Easyatwork\Signicat\StructType\Packaging_task_status_info[] $packaging_task_status_info
     */
    public function __construct(array $packaging_task_status_info = array())
    {
        $this
            ->setPackaging_task_status_info($packaging_task_status_info);
    }
    /**
     * Get packaging_task_status_info value
     * @return \Easyatwork\Signicat\StructType\Packaging_task_status_info[]|null
     */
    public function getPackaging_task_status_info()
    {
        return $this->{'packaging-task-status-info'};
    }
    /**
     * Set packaging_task_status_info value
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Packaging_task_status_info[] $packaging_task_status_info
     * @return \Easyatwork\Signicat\StructType\Get_packaging_task_status_response
     */
    public function setPackaging_task_status_info(array $packaging_task_status_info = array())
    {
        foreach ($packaging_task_status_info as $get_packaging_task_status_responsePackaging_task_status_infoItem) {
            // validation for constraint: itemType
            if (!$get_packaging_task_status_responsePackaging_task_status_infoItem instanceof \Easyatwork\Signicat\StructType\Packaging_task_status_info) {
                throw new \InvalidArgumentException(sprintf('The packaging_task_status_info property can only contain items of \Easyatwork\Signicat\StructType\Packaging_task_status_info, "%s" given', is_object($get_packaging_task_status_responsePackaging_task_status_infoItem) ? get_class($get_packaging_task_status_responsePackaging_task_status_infoItem) : gettype($get_packaging_task_status_responsePackaging_task_status_infoItem)), __LINE__);
            }
        }
        $this->packaging_task_status_info = $this->{'packaging-task-status-info'} = $packaging_task_status_info;
        return $this;
    }
    /**
     */
    public function addToPackaging_task_status_info(\Easyatwork\Signicat\StructType\Packaging_task_status_info $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Easyatwork\Signicat\StructType\Packaging_task_status_info) {
            throw new \InvalidArgumentException(sprintf('The packaging_task_status_info property can only contain items of \Easyatwork\Signicat\StructType\Packaging_task_status_info, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->packaging_task_status_info[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Get_packaging_task_status_response
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
