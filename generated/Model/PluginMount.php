<?php

namespace Docker\API\Model;

class PluginMount
{
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $destination;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string[]
     */
    protected $options;
    /**
     * @var string[]
     */
    protected $settable;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var string
     */
    protected $type;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     *
     * @return self
     */
    public function setDestination($destination = null)
    {
        $this->destination = $destination;

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

    /**
     * @return string[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(array $options = null)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSettable()
    {
        return $this->settable;
    }

    /**
     * @param string[] $settable
     *
     * @return self
     */
    public function setSettable(array $settable = null)
    {
        $this->settable = $settable;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource($source = null)
    {
        $this->source = $source;

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
