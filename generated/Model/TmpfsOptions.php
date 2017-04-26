<?php

namespace Docker\API\Model;

class TmpfsOptions
{
    /**
     * @var int
     */
    protected $mode;
    /**
     * @var int
     */
    protected $sizeBytes;

    /**
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param int $mode
     *
     * @return self
     */
    public function setMode($mode = null)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return int
     */
    public function getSizeBytes()
    {
        return $this->sizeBytes;
    }

    /**
     * @param int $sizeBytes
     *
     * @return self
     */
    public function setSizeBytes($sizeBytes = null)
    {
        $this->sizeBytes = $sizeBytes;

        return $this;
    }
}
