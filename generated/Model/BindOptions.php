<?php

namespace Docker\API\Model;

class BindOptions
{
    /**
     * @var mixed
     */
    protected $propagation;

    /**
     * @return mixed
     */
    public function getPropagation()
    {
        return $this->propagation;
    }

    /**
     * @param mixed $propagation
     *
     * @return self
     */
    public function setPropagation($propagation = null)
    {
        $this->propagation = $propagation;

        return $this;
    }
}
