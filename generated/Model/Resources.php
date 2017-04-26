<?php

namespace Docker\API\Model;

class Resources
{
    /**
     * @var Limits
     */
    protected $limits;
    /**
     * @var mixed
     */
    protected $reservation;

    /**
     * @return Limits
     */
    public function getLimits()
    {
        return $this->limits;
    }

    /**
     * @param Limits $limits
     *
     * @return self
     */
    public function setLimits(Limits $limits = null)
    {
        $this->limits = $limits;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * @param mixed $reservation
     *
     * @return self
     */
    public function setReservation($reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }
}
