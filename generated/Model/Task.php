<?php

namespace Docker\API\Model;

class Task
{
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $desiredState;
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $nodeID;
    /**
     * @var string
     */
    protected $serviceID;
    /**
     * @var int
     */
    protected $slot;
    /**
     * @var TaskSpec
     */
    protected $spec;
    /**
     * @var Status
     */
    protected $status;
    /**
     * @var string
     */
    protected $updatedAt;
    /**
     * @var ObjectVersion
     */
    protected $version;

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getDesiredState()
    {
        return $this->desiredState;
    }

    /**
     * @param string $desiredState
     *
     * @return self
     */
    public function setDesiredState($desiredState = null)
    {
        $this->desiredState = $desiredState;

        return $this;
    }

    /**
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * @param string $iD
     *
     * @return self
     */
    public function setID($iD = null)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(\ArrayObject $labels = null)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getNodeID()
    {
        return $this->nodeID;
    }

    /**
     * @param string $nodeID
     *
     * @return self
     */
    public function setNodeID($nodeID = null)
    {
        $this->nodeID = $nodeID;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceID()
    {
        return $this->serviceID;
    }

    /**
     * @param string $serviceID
     *
     * @return self
     */
    public function setServiceID($serviceID = null)
    {
        $this->serviceID = $serviceID;

        return $this;
    }

    /**
     * @return int
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * @param int $slot
     *
     * @return self
     */
    public function setSlot($slot = null)
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * @return TaskSpec
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * @param TaskSpec $spec
     *
     * @return self
     */
    public function setSpec(TaskSpec $spec = null)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Status $status
     *
     * @return self
     */
    public function setStatus(Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return ObjectVersion
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param ObjectVersion $version
     *
     * @return self
     */
    public function setVersion(ObjectVersion $version = null)
    {
        $this->version = $version;

        return $this;
    }
}
