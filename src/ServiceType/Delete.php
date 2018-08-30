<?php

namespace Easyatwork\Signicat\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named deleteRequest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Easyatwork\Signicat\StructType\Delete_request_request $delete_request_request
     * @return \Easyatwork\Signicat\StructType\Delete_request_response|bool
     */
    public function deleteRequest(\Easyatwork\Signicat\StructType\Delete_request_request $delete_request_request)
    {
        try {
            $this->setResult($this->getSoapClient()->deleteRequest($delete_request_request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Easyatwork\Signicat\StructType\Delete_request_response
     */
    public function getResult()
    {
        return parent::getResult();
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
