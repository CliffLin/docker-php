<?php

namespace Docker\API\Model;

class UsageData
{
    /**
     * @var int
     */
    protected $refCount;
    /**
     * @var int
     */
    protected $size;

    /**
     * @return int
     */
    public function getRefCount()
    {
        return $this->refCount;
    }

    /**
     * @param int $refCount
     *
     * @return self
     */
    public function setRefCount($refCount = null)
    {
        $this->refCount = $refCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     *
     * @return self
     */
    public function setSize($size = null)
    {
        $this->size = $size;

        return $this;
    }
}
