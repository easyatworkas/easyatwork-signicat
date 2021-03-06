<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for get-request-response StructType
 * @subpackage Structs
 */
class Get_request_response extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Easyatwork\Signicat\StructType\Request
     */
    public $request;
    /**
     * Constructor method for get-request-response
     * @uses Get_request_response::setRequest()
     * @param \Easyatwork\Signicat\StructType\Request $request
     */
    public function __construct(\Easyatwork\Signicat\StructType\Request $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \Easyatwork\Signicat\StructType\Request|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \Easyatwork\Signicat\StructType\Request $request
     * @return \Easyatwork\Signicat\StructType\Get_request_response
     */
    public function setRequest(\Easyatwork\Signicat\StructType\Request $request = null)
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Get_request_response
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
