<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for schedule StructType
 * @subpackage Structs
 */
class Schedule extends AbstractStructBase
{
    /**
     * The state_is
     * @var string
     */
    public $state_is;
    /**
     * The wait_until
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $wait_until;
    /**
     * The wait
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Easyatwork\Signicat\StructType\Wait
     */
    public $wait;
    /**
     * The days_of_week
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $days_of_week;
    /**
     * The time_of_day
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $time_of_day;
    /**
     * The timezone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $timezone;
    /**
     * Constructor method for schedule
     * @uses Schedule::setState_is()
     * @uses Schedule::setWait_until()
     * @uses Schedule::setWait()
     * @uses Schedule::setDays_of_week()
     * @uses Schedule::setTime_of_day()
     * @uses Schedule::setTimezone()
     * @param string $state_is
     * @param string $wait_until
     * @param \Easyatwork\Signicat\StructType\Wait $wait
     * @param string $days_of_week
     * @param string $time_of_day
     * @param string $timezone
     */
    public function __construct($state_is = null, $wait_until = null, \Easyatwork\Signicat\StructType\Wait $wait = null, $days_of_week = null, $time_of_day = null, $timezone = null)
    {
        $this
            ->setState_is($state_is)
            ->setWait_until($wait_until)
            ->setWait($wait)
            ->setDays_of_week($days_of_week)
            ->setTime_of_day($time_of_day)
            ->setTimezone($timezone);
    }
    /**
     * Get state_is value
     * @return string|null
     */
    public function getState_is()
    {
        return $this->{'state-is'};
    }
    /**
     * Set state_is value
     * @uses \Easyatwork\Signicat\EnumType\Task_status::valueIsValid()
     * @uses \Easyatwork\Signicat\EnumType\Task_status::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $state_is
     * @return \Easyatwork\Signicat\StructType\Schedule
     */
    public function setState_is($state_is = null)
    {
        // validation for constraint: enumeration
        if (!\Easyatwork\Signicat\EnumType\Task_status::valueIsValid($state_is)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $state_is, implode(', ', \Easyatwork\Signicat\EnumType\Task_status::getValidValues())), __LINE__);
        }
        $this->state_is = $this->{'state-is'} = $state_is;
        return $this;
    }
    /**
     * Get wait_until value
     * @return string|null
     */
    public function getWait_until()
    {
        return $this->{'wait-until'};
    }
    /**
     * Set wait_until value
     * @param string $wait_until
     * @return \Easyatwork\Signicat\StructType\Schedule
     */
    public function setWait_until($wait_until = null)
    {
        // validation for constraint: string
        if (!is_null($wait_until) && !is_string($wait_until)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wait_until)), __LINE__);
        }
        $this->wait_until = $this->{'wait-until'} = $wait_until;
        return $this;
    }
    /**
     * Get wait value
     * @return \Easyatwork\Signicat\StructType\Wait|null
     */
    public function getWait()
    {
        return $this->wait;
    }
    /**
     * Set wait value
     * @param \Easyatwork\Signicat\StructType\Wait $wait
     * @return \Easyatwork\Signicat\StructType\Schedule
     */
    public function setWait(\Easyatwork\Signicat\StructType\Wait $wait = null)
    {
        $this->wait = $wait;
        return $this;
    }
    /**
     * Get days_of_week value
     * @return string|null
     */
    public function getDays_of_week()
    {
        return $this->{'days-of-week'};
    }
    /**
     * Set days_of_week value
     * @param string $days_of_week
     * @return \Easyatwork\Signicat\StructType\Schedule
     */
    public function setDays_of_week($days_of_week = null)
    {
        // validation for constraint: string
        if (!is_null($days_of_week) && !is_string($days_of_week)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($days_of_week)), __LINE__);
        }
        $this->days_of_week = $this->{'days-of-week'} = $days_of_week;
        return $this;
    }
    /**
     * Get time_of_day value
     * @return string|null
     */
    public function getTime_of_day()
    {
        return $this->{'time-of-day'};
    }
    /**
     * Set time_of_day value
     * @param string $time_of_day
     * @return \Easyatwork\Signicat\StructType\Schedule
     */
    public function setTime_of_day($time_of_day = null)
    {
        // validation for constraint: string
        if (!is_null($time_of_day) && !is_string($time_of_day)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time_of_day)), __LINE__);
        }
        $this->time_of_day = $this->{'time-of-day'} = $time_of_day;
        return $this;
    }
    /**
     * Get timezone value
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->timezone;
    }
    /**
     * Set timezone value
     * @param string $timezone
     * @return \Easyatwork\Signicat\StructType\Schedule
     */
    public function setTimezone($timezone = null)
    {
        // validation for constraint: string
        if (!is_null($timezone) && !is_string($timezone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timezone)), __LINE__);
        }
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Schedule
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
