<?php

namespace Docker\API\Model;

class Description
{
    /**
     * @var Engine
     */
    protected $engine;
    /**
     * @var string
     */
    protected $hostname;
    /**
     * @var Platform
     */
    protected $platform;
    /**
     * @var Resources
     */
    protected $resources;

    /**
     * @return Engine
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param Engine $engine
     *
     * @return self
     */
    public function setEngine(Engine $engine = null)
    {
        $this->engine = $engine;

        return $this;
    }

    /**
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * @param string $hostname
     *
     * @return self
     */
    public function setHostname($hostname = null)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * @return Platform
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param Platform $platform
     *
     * @return self
     */
    public function setPlatform(Platform $platform = null)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * @return Resources
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param Resources $resources
     *
     * @return self
     */
    public function setResources(Resources $resources = null)
    {
        $this->resources = $resources;

        return $this;
    }
}
