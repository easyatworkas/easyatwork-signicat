<?php

namespace Easyatwork\Signicat\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named findTasks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Easyatwork\Signicat\StructType\Find_tasks_request $find_tasks_request
     * @return \Easyatwork\Signicat\StructType\Find_tasks_response|bool
     */
    public function findTasks(\Easyatwork\Signicat\StructType\Find_tasks_request $find_tasks_request)
    {
        try {
            $this->setResult($this->getSoapClient()->findTasks($find_tasks_request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Easyatwork\Signicat\StructType\Find_tasks_response
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
