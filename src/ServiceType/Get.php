<?php

namespace Easyatwork\Signicat\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getTaskCount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Easyatwork\Signicat\StructType\Get_task_count_request $request
     * @return \Easyatwork\Signicat\StructType\Get_task_count_response|bool
     */
    public function getTaskCount(\Easyatwork\Signicat\StructType\Get_task_count_request $request)
    {
        try {
            $this->setResult($this->getSoapClient()->getTaskCount($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPackagingTaskStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Easyatwork\Signicat\StructType\Get_packaging_task_status_request $request
     * @return \Easyatwork\Signicat\StructType\Get_packaging_task_status_response|bool
     */
    public function getPackagingTaskStatus(\Easyatwork\Signicat\StructType\Get_packaging_task_status_request $request)
    {
        try {
            $this->setResult($this->getSoapClient()->getPackagingTaskStatus($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Easyatwork\Signicat\StructType\Get_task_request $get_task_request
     * @return \Easyatwork\Signicat\StructType\Get_task_response|bool
     */
    public function getTask(\Easyatwork\Signicat\StructType\Get_task_request $get_task_request)
    {
        try {
            $this->setResult($this->getSoapClient()->getTask($get_task_request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRequest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Easyatwork\Signicat\StructType\Get_request_request $get_request_request
     * @return \Easyatwork\Signicat\StructType\Get_request_response|bool
     */
    public function getRequest(\Easyatwork\Signicat\StructType\Get_request_request $get_request_request)
    {
        try {
            $this->setResult($this->getSoapClient()->getRequest($get_request_request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Easyatwork\Signicat\StructType\Get_status_request $request
     * @return \Easyatwork\Signicat\StructType\Get_status_response|bool
     */
    public function getStatus(\Easyatwork\Signicat\StructType\Get_status_request $request)
    {
        try {
            $this->setResult($this->getSoapClient()->getStatus($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRequestHistory
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Easyatwork\Signicat\StructType\Get_request_history_request $request
     * @return \Easyatwork\Signicat\StructType\Get_request_history_response|bool
     */
    public function getRequestHistory(\Easyatwork\Signicat\StructType\Get_request_history_request $request)
    {
        try {
            $this->setResult($this->getSoapClient()->getRequestHistory($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Easyatwork\Signicat\StructType\Get_packaging_task_status_response|\Easyatwork\Signicat\StructType\Get_request_history_response|\Easyatwork\Signicat\StructType\Get_request_response|\Easyatwork\Signicat\StructType\Get_status_response|\Easyatwork\Signicat\StructType\Get_task_count_response|\Easyatwork\Signicat\StructType\Get_task_response
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
