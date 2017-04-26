<?php

namespace Docker\API\Model;

class Node
{
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var Description
     */
    protected $description;
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var NodeSpec
     */
    protected $spec;
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
     * @return Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param Description $description
     *
     * @return self
     */
    public function setDescription(Description $description = null)
    {
        $this->description = $description;

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
     * @return NodeSpec
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * @param NodeSpec $spec
     *
     * @return self
     */
    public function setSpec(NodeSpec $spec = null)
    {
        $this->spec = $spec;

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
