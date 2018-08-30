<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for add-notification-request StructType
 * @subpackage Structs
 */
class Add_notification_request extends AbstractStructBase
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
     * The notification
     * @var \Easyatwork\Signicat\StructType\Notification
     */
    public $notification;
    /**
     * Constructor method for add-notification-request
     * @uses Add_notification_request::setService()
     * @uses Add_notification_request::setPassword()
     * @uses Add_notification_request::setRequest_id()
     * @uses Add_notification_request::setTask_id()
     * @uses Add_notification_request::setNotification()
     * @param string $service
     * @param string $password
     * @param string $request_id
     * @param string $task_id
     * @param \Easyatwork\Signicat\StructType\Notification $notification
     */
    public function __construct($service = null, $password = null, $request_id = null, $task_id = null, \Easyatwork\Signicat\StructType\Notification $notification = null)
    {
        $this
            ->setService($service)
            ->setPassword($password)
            ->setRequest_id($request_id)
            ->setTask_id($task_id)
            ->setNotification($notification);
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
     * @return \Easyatwork\Signicat\StructType\Add_notification_request
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
     * @return \Easyatwork\Signicat\StructType\Add_notification_request
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
     * @return \Easyatwork\Signicat\StructType\Add_notification_request
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
     * @return \Easyatwork\Signicat\StructType\Add_notification_request
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
     * Get notification value
     * @return \Easyatwork\Signicat\StructType\Notification|null
     */
    public function getNotification()
    {
        return $this->notification;
    }
    /**
     * Set notification value
     * @param \Easyatwork\Signicat\StructType\Notification $notification
     * @return \Easyatwork\Signicat\StructType\Add_notification_request
     */
    public function setNotification(\Easyatwork\Signicat\StructType\Notification $notification = null)
    {
        $this->notification = $notification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Add_notification_request
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
