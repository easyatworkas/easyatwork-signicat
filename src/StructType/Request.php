<?php

namespace Easyatwork\Signicat\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for request StructType
 * @subpackage Structs
 */
class Request extends AbstractStructBase
{
    /**
     * The profile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $profile;
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * The subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Easyatwork\Signicat\StructType\Subject[]
     */
    public $subject;
    /**
     * The document
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Easyatwork\Signicat\StructType\Document[]
     */
    public $document;
    /**
     * The task
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Easyatwork\Signicat\StructType\Task[]
     */
    public $task;
    /**
     * The client_reference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $client_reference;
    /**
     * The sender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Easyatwork\Signicat\StructType\Sender
     */
    public $sender;
    /**
     * The notification
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Easyatwork\Signicat\StructType\Notification[]
     */
    public $notification;
    /**
     * The days_until_deletion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $days_until_deletion;
    /**
     * The sdo_format
     * Meta informations extracted from the WSDL
     * - default: native
     * - minOccurs: 0
     * @var string
     */
    public $sdo_format;
    /**
     * The account
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $account;
    /**
     * The packaging_task
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Easyatwork\Signicat\StructType\Packaging_task[]
     */
    public $packaging_task;
    /**
     * Constructor method for request
     * @uses Request::setProfile()
     * @uses Request::setLanguage()
     * @uses Request::setSubject()
     * @uses Request::setDocument()
     * @uses Request::setTask()
     * @uses Request::setClient_reference()
     * @uses Request::setSender()
     * @uses Request::setNotification()
     * @uses Request::setDays_until_deletion()
     * @uses Request::setSdo_format()
     * @uses Request::setAccount()
     * @uses Request::setPackaging_task()
     * @param string $profile
     * @param string $language
     * @param \Easyatwork\Signicat\StructType\Subject[] $subject
     * @param \Easyatwork\Signicat\StructType\Document[] $document
     * @param \Easyatwork\Signicat\StructType\Task[] $task
     * @param string $client_reference
     * @param \Easyatwork\Signicat\StructType\Sender $sender
     * @param \Easyatwork\Signicat\StructType\Notification[] $notification
     * @param int $days_until_deletion
     * @param string $sdo_format
     * @param string $account
     * @param \Easyatwork\Signicat\StructType\Packaging_task[] $packaging_task
     */
    public function __construct($profile = null, $language = null, array $subject = array(), array $document = array(), array $task = array(), $client_reference = null, \Easyatwork\Signicat\StructType\Sender $sender = null, array $notification = array(), $days_until_deletion = null, $sdo_format = 'native', $account = null, array $packaging_task = array())
    {
        $this
            ->setProfile($profile)
            ->setLanguage($language)
            ->setSubject($subject)
            ->setDocument($document)
            ->setTask($task)
            ->setClient_reference($client_reference)
            ->setSender($sender)
            ->setNotification($notification)
            ->setDays_until_deletion($days_until_deletion)
            ->setSdo_format($sdo_format)
            ->setAccount($account)
            ->setPackaging_task($packaging_task);
    }
    /**
     * Get profile value
     * @return string|null
     */
    public function getProfile()
    {
        return $this->profile;
    }
    /**
     * Set profile value
     * @param string $profile
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function setProfile($profile = null)
    {
        // validation for constraint: string
        if (!is_null($profile) && !is_string($profile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profile)), __LINE__);
        }
        $this->profile = $profile;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get subject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Easyatwork\Signicat\StructType\Subject[]|null
     */
    public function getSubject()
    {
        return isset($this->subject) ? $this->subject : null;
    }
    /**
     * Set subject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Subject[] $subject
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function setSubject(array $subject = array())
    {
        foreach ($subject as $requestSubjectItem) {
            // validation for constraint: itemType
            if (!$requestSubjectItem instanceof \Easyatwork\Signicat\StructType\Subject) {
                throw new \InvalidArgumentException(sprintf('The subject property can only contain items of \Easyatwork\Signicat\StructType\Subject, "%s" given', is_object($requestSubjectItem) ? get_class($requestSubjectItem) : gettype($requestSubjectItem)), __LINE__);
            }
        }
        if (is_null($subject) || (is_array($subject) && empty($subject))) {
            unset($this->subject);
        } else {
            $this->subject = $subject;
        }
        return $this;
    }
    /**
     * Add item to subject value
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Subject $item
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function addToSubject(\Easyatwork\Signicat\StructType\Subject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Easyatwork\Signicat\StructType\Subject) {
            throw new \InvalidArgumentException(sprintf('The subject property can only contain items of \Easyatwork\Signicat\StructType\Subject, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->subject[] = $item;
        return $this;
    }
    /**
     * Get document value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Easyatwork\Signicat\StructType\Document[]|null
     */
    public function getDocument()
    {
        return isset($this->document) ? $this->document : null;
    }
    /**
     * Set document value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Document[] $document
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function setDocument(array $document = array())
    {
        foreach ($document as $requestDocumentItem) {
            // validation for constraint: itemType
            if (!$requestDocumentItem instanceof \Easyatwork\Signicat\StructType\Document) {
                throw new \InvalidArgumentException(sprintf('The document property can only contain items of \Easyatwork\Signicat\StructType\Document, "%s" given', is_object($requestDocumentItem) ? get_class($requestDocumentItem) : gettype($requestDocumentItem)), __LINE__);
            }
        }
        if (is_null($document) || (is_array($document) && empty($document))) {
            unset($this->document);
        } else {
            $this->document = $document;
        }
        return $this;
    }
    /**
     * Add item to document value
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Document $item
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function addToDocument(\Easyatwork\Signicat\StructType\Document $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Easyatwork\Signicat\StructType\Document) {
            throw new \InvalidArgumentException(sprintf('The document property can only contain items of \Easyatwork\Signicat\StructType\Document, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->document[] = $item;
        return $this;
    }
    /**
     * Get task value
     * @return \Easyatwork\Signicat\StructType\Task[]|null
     */
    public function getTask()
    {
        return $this->task;
    }
    /**
     * Set task value
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Task[] $task
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function setTask(array $task = array())
    {
        foreach ($task as $requestTaskItem) {
            // validation for constraint: itemType
            if (!$requestTaskItem instanceof \Easyatwork\Signicat\StructType\Task) {
                throw new \InvalidArgumentException(sprintf('The task property can only contain items of \Easyatwork\Signicat\StructType\Task, "%s" given', is_object($requestTaskItem) ? get_class($requestTaskItem) : gettype($requestTaskItem)), __LINE__);
            }
        }
        $this->task = $task;
        return $this;
    }
    /**
     * Add item to task value
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Task $item
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function addToTask(\Easyatwork\Signicat\StructType\Task $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Easyatwork\Signicat\StructType\Task) {
            throw new \InvalidArgumentException(sprintf('The task property can only contain items of \Easyatwork\Signicat\StructType\Task, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->task[] = $item;
        return $this;
    }
    /**
     * Get client_reference value
     * @return string|null
     */
    public function getClient_reference()
    {
        return $this->{'client-reference'};
    }
    /**
     * Set client_reference value
     * @param string $client_reference
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function setClient_reference($client_reference = null)
    {
        // validation for constraint: string
        if (!is_null($client_reference) && !is_string($client_reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($client_reference)), __LINE__);
        }
        $this->client_reference = $this->{'client-reference'} = $client_reference;
        return $this;
    }
    /**
     * Get sender value
     * @return \Easyatwork\Signicat\StructType\Sender|null
     */
    public function getSender()
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param \Easyatwork\Signicat\StructType\Sender $sender
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function setSender(\Easyatwork\Signicat\StructType\Sender $sender = null)
    {
        $this->sender = $sender;
        return $this;
    }
    /**
     * Get notification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Easyatwork\Signicat\StructType\Notification[]|null
     */
    public function getNotification()
    {
        return isset($this->notification) ? $this->notification : null;
    }
    /**
     * Set notification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Notification[] $notification
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function setNotification(array $notification = array())
    {
        foreach ($notification as $requestNotificationItem) {
            // validation for constraint: itemType
            if (!$requestNotificationItem instanceof \Easyatwork\Signicat\StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The notification property can only contain items of \Easyatwork\Signicat\StructType\Notification, "%s" given', is_object($requestNotificationItem) ? get_class($requestNotificationItem) : gettype($requestNotificationItem)), __LINE__);
            }
        }
        if (is_null($notification) || (is_array($notification) && empty($notification))) {
            unset($this->notification);
        } else {
            $this->notification = $notification;
        }
        return $this;
    }
    /**
     * Add item to notification value
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Notification $item
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function addToNotification(\Easyatwork\Signicat\StructType\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Easyatwork\Signicat\StructType\Notification) {
            throw new \InvalidArgumentException(sprintf('The notification property can only contain items of \Easyatwork\Signicat\StructType\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->notification[] = $item;
        return $this;
    }
    /**
     * Get days_until_deletion value
     * @return int|null
     */
    public function getDays_until_deletion()
    {
        return $this->{'days-until-deletion'};
    }
    /**
     * Set days_until_deletion value
     * @param int $days_until_deletion
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function setDays_until_deletion($days_until_deletion = null)
    {
        // validation for constraint: int
        if (!is_null($days_until_deletion) && !is_numeric($days_until_deletion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($days_until_deletion)), __LINE__);
        }
        $this->days_until_deletion = $this->{'days-until-deletion'} = $days_until_deletion;
        return $this;
    }
    /**
     * Get sdo_format value
     * @return string|null
     */
    public function getSdo_format()
    {
        return $this->{'sdo-format'};
    }
    /**
     * Set sdo_format value
     * @param string $sdo_format
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function setSdo_format($sdo_format = 'native')
    {
        // validation for constraint: string
        if (!is_null($sdo_format) && !is_string($sdo_format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sdo_format)), __LINE__);
        }
        $this->sdo_format = $this->{'sdo-format'} = $sdo_format;
        return $this;
    }
    /**
     * Get account value
     * @return string|null
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param string $account
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function setAccount($account = null)
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($account)), __LINE__);
        }
        $this->account = $account;
        return $this;
    }
    /**
     * Get packaging_task value
     * @return \Easyatwork\Signicat\StructType\Packaging_task[]|null
     */
    public function getPackaging_task()
    {
        return $this->{'packaging-task'};
    }
    /**
     * Set packaging_task value
     * @throws \InvalidArgumentException
     * @param \Easyatwork\Signicat\StructType\Packaging_task[] $packaging_task
     * @return \Easyatwork\Signicat\StructType\Request
     */
    public function setPackaging_task(array $packaging_task = array())
    {
        foreach ($packaging_task as $requestPackaging_taskItem) {
            // validation for constraint: itemType
            if (!$requestPackaging_taskItem instanceof \Easyatwork\Signicat\StructType\Packaging_task) {
                throw new \InvalidArgumentException(sprintf('The packaging_task property can only contain items of \Easyatwork\Signicat\StructType\Packaging_task, "%s" given', is_object($requestPackaging_taskItem) ? get_class($requestPackaging_taskItem) : gettype($requestPackaging_taskItem)), __LINE__);
            }
        }
        $this->packaging_task = $this->{'packaging-task'} = $packaging_task;
        return $this;
    }
    /**
     */
    public function addToPackaging_task(\Easyatwork\Signicat\StructType\Packaging_task $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Easyatwork\Signicat\StructType\Packaging_task) {
            throw new \InvalidArgumentException(sprintf('The packaging_task property can only contain items of \Easyatwork\Signicat\StructType\Packaging_task, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->packaging_task[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Easyatwork\Signicat\StructType\Request
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
