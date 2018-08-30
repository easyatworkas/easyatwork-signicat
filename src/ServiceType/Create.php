<?php

namespace Easyatwork\Signicat\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named createArtifact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Easyatwork\Signicat\StructType\Create_artifact_request $request
     * @return \Easyatwork\Signicat\StructType\Create_artifact_response|bool
     */
    public function createArtifact(\Easyatwork\Signicat\StructType\Create_artifact_request $request)
    {
        try {
            $this->setResult($this->getSoapClient()->createArtifact($request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createUserSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Easyatwork\Signicat\StructType\Create_usersession_request $create_usersession_request
     * @return \Easyatwork\Signicat\StructType\Create_usersession_response|bool
     */
    public function createUserSession(\Easyatwork\Signicat\StructType\Create_usersession_request $create_usersession_request)
    {
        try {
            $this->setResult($this->getSoapClient()->createUserSession($create_usersession_request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createRequest
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Easyatwork\Signicat\StructType\Create_request_request $create_request_request
     * @return \Easyatwork\Signicat\StructType\Create_request_response|bool
     */
    public function createRequest(\Easyatwork\Signicat\StructType\Create_request_request $create_request_request)
    {
        try {
            $this->setResult($this->getSoapClient()->createRequest($create_request_request));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Easyatwork\Signicat\StructType\Create_artifact_response|\Easyatwork\Signicat\StructType\Create_request_response|\Easyatwork\Signicat\StructType\Create_usersession_response
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
