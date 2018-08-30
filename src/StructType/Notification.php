<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for notification StructType
 * @subpackage Structs
 */
class Notification extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $type;
    /**
     * The notification_id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $notification_id;
    /**
     * The recipient
     * @var string
     */
    public $recipient;
    /**
     * The sender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sender;
    /**
     * The header
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $header;
    /**
     * The message
     * @var string
     */
    public $message;
    /**
     * The schedule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Easyatwork\Signicat\StructType\Schedule[]
     */
    public $schedule;
    /**
     * Constructor method for notification
     * @uses Notification::setType()
     * @uses Notification::setNotification_id()
     * @uses Notification::setRecipient()
     * @uses Notification::setSender()
     * @uses Notification::setHeader()
     * @uses Notification::setMessage()
     * @uses Notification::setSchedule()
     * @param string $type
     * @param string $notification_id
     * @param string $recipient
     * @param string $sender
     * @param string $header
     * @param string $message
     * @param \Easyatwork\Signicat\StructType\Schedule[] $schedule
     */
    public function __construct($type = null, $notification_id = null, $recipient = null, $sender = null, $header = null, $message = null, array $schedule = array())
    {
        $this
            ->setType($type)
            ->setNotification_id($notification_id)
            ->setRecipient($recipient)
            ->setSender($sender)
            ->setHeader($header)
            ->setMessage($message)
            ->setSchedule($schedule);
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
     * @uses \Easyatwork\Signicat\EnumType\Notification_type::valueIsValid()
     * @uses \Easyatwork\Signicat\EnumType\Notification_type::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Easyatwork\Signicat\StructType\Notification
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Easyatwork\Signicat\EnumType\Notification_type::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Easyatwork\Signicat\EnumType\Notification_type::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get notification_id value
     * @return string
     */
    public function getNotification_id()
    {
        return $this->{'notification-id'};
    }
    /**
     * Set notification_id value
     * @param string $notification_id
     * @return \Easyatwork\Signicat\StructType\Notification
     */
    public function setNotification_id($notification_id = null)
    {
        // validation for constraint: string
        if (!is_null($notification_id) && !is_string($notification_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notification_id)), __LINE__);
        }
        $this->notification_id = $this->{'notification-id'} = $notification_id;
        return $this;
    }
    /**
     * Get recipient value
     * @return string|null
     */
    public function getRecipient()
    {
        return $this->recipient;
    }
    /**
     * Set recipient value
     * @param string $recipient
     * @return \Easyatwork\Signicat\StructType\Notification
     */
    public function setRecipient($recipient = null)
    {
        // validation for constraint: string
        if (!is_null($recipient) && !is_string($recipient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipient)), __LINE__);
        }
        $this->recipient = $recipient;
        return $this;
    }
    /**
     * Get sender value
     * @return string|null
     */
    public function getSender()
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param string $sender
     * @return \Easyatwork\Signicat\StructType\Notification
     */
    public function setSender($sender = null)
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sender)), __LINE__);
        }
        $this->sender = $sender;
        return $this;
    }
    /**
     * Get header value
     * @return string|null
     */
    public function getHeader()
    {
        return $this->header;
    }
    /**
     * Set header value
     * @param string $header
     * @return \Easyatwork\Signicat\StructType\Notification
     */
    public function setHeader($header = null)
    {
        // validation for constraint: string
        if (!is_null($header) && !is_string($header)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($header)), __LINE__);
        }
        $this->header = $header;
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Easyatwork\Signicat\StructType\Notification
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->message = $message;
        return $this;
    }
    /**
     * Get schedule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Easyatwork\Signicat\StructType\Schedule[]|null
     */
    public function getSchedule()
    {
        return isset($this->schedule) ? $this->schedule : null;
    }
    /**
     * Set schedule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Schedule[] $schedule
     * @return \Easyatwork\Signicat\StructType\Notification
     */
    public function setSchedule(array $schedule = array())
    {
        foreach ($schedule as $notificationScheduleItem) {
            // validation for constraint: itemType
            if (!$notificationScheduleItem instanceof \Easyatwork\Signicat\StructType\Schedule) {
                throw new \InvalidArgumentException(sprintf('The schedule property can only contain items of \Easyatwork\Signicat\StructType\Schedule, "%s" given', is_object($notificationScheduleItem) ? get_class($notificationScheduleItem) : gettype($notificationScheduleItem)), __LINE__);
            }
        }
        if (is_null($schedule) || (is_array($schedule) && empty($schedule))) {
            unset($this->schedule);
        } else {
            $this->schedule = $schedule;
        }
        return $this;
    }
    /**
     * Add item to schedule value
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Schedule $item
     * @return \Easyatwork\Signicat\StructType\Notification
     */
    public function addToSchedule(\Easyatwork\Signicat\StructType\Schedule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Easyatwork\Signicat\StructType\Schedule) {
            throw new \InvalidArgumentException(sprintf('The schedule property can only contain items of \Easyatwork\Signicat\StructType\Schedule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->schedule[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Notification
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
