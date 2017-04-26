<?php

namespace Docker\API\Model;

class ImageDeleteResponse
{
    /**
     * @var string
     */
    protected $deleted;
    /**
     * @var string
     */
    protected $untagged;

    /**
     * @return string
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param string $deleted
     *
     * @return self
     */
    public function setDeleted($deleted = null)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * @return string
     */
    public function getUntagged()
    {
        return $this->untagged;
    }

    /**
     * @param string $untagged
     *
     * @return self
     */
    public function setUntagged($untagged = null)
    {
        $this->untagged = $untagged;

        return $this;
    }
}
