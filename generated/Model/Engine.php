<?php

namespace Docker\API\Model;

class Engine
{
    /**
     * @var string
     */
    protected $engineVersion;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var Plugins[]
     */
    protected $plugins;

    /**
     * @return string
     */
    public function getEngineVersion()
    {
        return $this->engineVersion;
    }

    /**
     * @param string $engineVersion
     *
     * @return self
     */
    public function setEngineVersion($engineVersion = null)
    {
        $this->engineVersion = $engineVersion;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(\ArrayObject $labels = null)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return Plugins[]
     */
    public function getPlugins()
    {
        return $this->plugins;
    }

    /**
     * @param Plugins[] $plugins
     *
     * @return self
     */
    public function setPlugins(array $plugins = null)
    {
        $this->plugins = $plugins;

        return $this;
    }
}
