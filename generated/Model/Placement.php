<?php

namespace Docker\API\Model;

class Placement
{
    /**
     * @var string[]
     */
    protected $constraints;

    /**
     * @return string[]
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    /**
     * @param string[] $constraints
     *
     * @return self
     */
    public function setConstraints(array $constraints = null)
    {
        $this->constraints = $constraints;

        return $this;
    }
}
