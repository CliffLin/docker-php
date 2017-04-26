<?php

namespace Docker\API\Model;

class User
{
    /**
     * @var int
     */
    protected $gID;
    /**
     * @var int
     */
    protected $uID;

    /**
     * @return int
     */
    public function getGID()
    {
        return $this->gID;
    }

    /**
     * @param int $gID
     *
     * @return self
     */
    public function setGID($gID = null)
    {
        $this->gID = $gID;

        return $this;
    }

    /**
     * @return int
     */
    public function getUID()
    {
        return $this->uID;
    }

    /**
     * @param int $uID
     *
     * @return self
     */
    public function setUID($uID = null)
    {
        $this->uID = $uID;

        return $this;
    }
}
