<?php

namespace Docker\API\Model;

class Rootfs
{
    /**
     * @var string[]
     */
    protected $diffIds;
    /**
     * @var string
     */
    protected $type;

    /**
     * @return string[]
     */
    public function getDiffIds()
    {
        return $this->diffIds;
    }

    /**
     * @param string[] $diffIds
     *
     * @return self
     */
    public function setDiffIds(array $diffIds = null)
    {
        $this->diffIds = $diffIds;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }
}
