<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for disable-notification-request StructType
 * @subpackage Structs
 */
class Disable_notification_request extends AbstractStructBase
{
    /**
     * The service
     * @var string
     */
    public $service;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * The request_id
     * @var string
     */
    public $request_id;
    /**
     * The task_id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $task_id;
    /**
     * The notification_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $notification_id;
    /**
     * Constructor method for disable-notification-request
     * @uses Disable_notification_request::setService()
     * @uses Disable_notification_request::setPassword()
     * @uses Disable_notification_request::setRequest_id()
     * @uses Disable_notification_request::setTask_id()
     * @uses Disable_notification_request::setNotification_id()
     * @param string $service
     * @param string $password
     * @param string $request_id
     * @param string $task_id
     * @param string[] $notification_id
     */
    public function __construct($service = null, $password = null, $request_id = null, $task_id = null, array $notification_id = array())
    {
        $this
            ->setService($service)
            ->setPassword($password)
            ->setRequest_id($request_id)
            ->setTask_id($task_id)
            ->setNotification_id($notification_id);
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \Easyatwork\Signicat\StructType\Disable_notification_request
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service)), __LINE__);
        }
        $this->service = $service;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Easyatwork\Signicat\StructType\Disable_notification_request
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
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
     * @return \Easyatwork\Signicat\StructType\Disable_notification_request
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
     * Get task_id value
     * @return string|null
     */
    public function getTask_id()
    {
        return $this->{'task-id'};
    }
    /**
     * Set task_id value
     * @param string $task_id
     * @return \Easyatwork\Signicat\StructType\Disable_notification_request
     */
    public function setTask_id($task_id = null)
    {
        // validation for constraint: string
        if (!is_null($task_id) && !is_string($task_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($task_id)), __LINE__);
        }
        $this->task_id = $this->{'task-id'} = $task_id;
        return $this;
    }
    /**
     * Get notification_id value
     * @return string[]|null
     */
    public function getNotification_id()
    {
        return $this->{'notification-id'};
    }
    /**
     * Set notification_id value
     * @throws \InvalidArgumentException
     * @param string[] $notification_id
     * @return \Easyatwork\Signicat\StructType\Disable_notification_request
     */
    public function setNotification_id(array $notification_id = array())
    {
        foreach ($notification_id as $disable_notification_requestNotification_idItem) {
            // validation for constraint: itemType
            if (!is_string($disable_notification_requestNotification_idItem)) {
                throw new \InvalidArgumentException(sprintf('The notification_id property can only contain items of string, "%s" given', is_object($disable_notification_requestNotification_idItem) ? get_class($disable_notification_requestNotification_idItem) : gettype($disable_notification_requestNotification_idItem)), __LINE__);
            }
        }
        $this->notification_id = $this->{'notification-id'} = $notification_id;
        return $this;
    }
    /**
     */
    public function addToNotification_id($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The notification_id property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->notification_id[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Disable_notification_request
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
