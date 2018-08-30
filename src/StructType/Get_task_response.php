<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for get-task-response StructType
 * @subpackage Structs
 */
class Get_task_response extends AbstractStructBase
{
    /**
     * The task
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Easyatwork\Signicat\StructType\Task
     */
    public $task;
    /**
     * Constructor method for get-task-response
     * @uses Get_task_response::setTask()
     * @param \Easyatwork\Signicat\StructType\Task $task
     */
    public function __construct(\Easyatwork\Signicat\StructType\Task $task = null)
    {
        $this
            ->setTask($task);
    }
    /**
     * Get task value
     * @return \Easyatwork\Signicat\StructType\Task|null
     */
    public function getTask()
    {
        return $this->task;
    }
    /**
     * Set task value
     * @param \Easyatwork\Signicat\StructType\Task $task
     * @return \Easyatwork\Signicat\StructType\Get_task_response
     */
    public function setTask(\Easyatwork\Signicat\StructType\Task $task = null)
    {
        $this->task = $task;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Get_task_response
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
