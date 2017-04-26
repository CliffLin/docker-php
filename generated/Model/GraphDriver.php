<?php

namespace Docker\API\Model;

class GraphDriver
{
    /**
     * @var string[]
     */
    protected $data;
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string[] $data
     *
     * @return self
     */
    public function setData(\ArrayObject $data = null)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }
}
