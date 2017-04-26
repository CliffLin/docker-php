<?php

namespace Docker\API\Model;

class Service
{
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var Endpoint
     */
    protected $endpoint;
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var mixed
     */
    protected $spec;
    /**
     * @var UpdateStatus
     */
    protected $updateStatus;
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
     * @return Endpoint
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param Endpoint $endpoint
     *
     * @return self
     */
    public function setEndpoint(Endpoint $endpoint = null)
    {
        $this->endpoint = $endpoint;

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
     * @return mixed
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * @param mixed $spec
     *
     * @return self
     */
    public function setSpec($spec = null)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * @return UpdateStatus
     */
    public function getUpdateStatus()
    {
        return $this->updateStatus;
    }

    /**
     * @param UpdateStatus $updateStatus
     *
     * @return self
     */
    public function setUpdateStatus(UpdateStatus $updateStatus = null)
    {
        $this->updateStatus = $updateStatus;

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
