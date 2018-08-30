<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for event StructType
 * @subpackage Structs
 */
class Event extends AbstractStructBase
{
    /**
     * The event
     * @var string
     */
    public $event;
    /**
     * The event_time
     * @var string
     */
    public $event_time;
    /**
     * The data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $data;
    /**
     * Constructor method for event
     * @uses Event::setEvent()
     * @uses Event::setEvent_time()
     * @uses Event::setData()
     * @param string $event
     * @param string $event_time
     * @param string $data
     */
    public function __construct($event = null, $event_time = null, $data = null)
    {
        $this
            ->setEvent($event)
            ->setEvent_time($event_time)
            ->setData($data);
    }
    /**
     * Get event value
     * @return string|null
     */
    public function getEvent()
    {
        return $this->event;
    }
    /**
     * Set event value
     * @uses \Easyatwork\Signicat\EnumType\Event_type::valueIsValid()
     * @uses \Easyatwork\Signicat\EnumType\Event_type::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $event
     * @return \Easyatwork\Signicat\StructType\Event
     */
    public function setEvent($event = null)
    {
        // validation for constraint: enumeration
        if (!\Easyatwork\Signicat\EnumType\Event_type::valueIsValid($event)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $event, implode(', ', \Easyatwork\Signicat\EnumType\Event_type::getValidValues())), __LINE__);
        }
        $this->event = $event;
        return $this;
    }
    /**
     * Get event_time value
     * @return string|null
     */
    public function getEvent_time()
    {
        return $this->{'event-time'};
    }
    /**
     * Set event_time value
     * @param string $event_time
     * @return \Easyatwork\Signicat\StructType\Event
     */
    public function setEvent_time($event_time = null)
    {
        // validation for constraint: string
        if (!is_null($event_time) && !is_string($event_time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($event_time)), __LINE__);
        }
        $this->event_time = $this->{'event-time'} = $event_time;
        return $this;
    }
    /**
     * Get data value
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \Easyatwork\Signicat\StructType\Event
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($data)), __LINE__);
        }
        $this->data = $data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Event
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
