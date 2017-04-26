<?php

namespace Docker\API\Model;

class VolumeOptions
{
    /**
     * @var DriverConfig
     */
    protected $driverConfig;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var bool
     */
    protected $noCopy;

    /**
     * @return DriverConfig
     */
    public function getDriverConfig()
    {
        return $this->driverConfig;
    }

    /**
     * @param DriverConfig $driverConfig
     *
     * @return self
     */
    public function setDriverConfig(DriverConfig $driverConfig = null)
    {
        $this->driverConfig = $driverConfig;

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
     * @return bool
     */
    public function getNoCopy()
    {
        return $this->noCopy;
    }

    /**
     * @param bool $noCopy
     *
     * @return self
     */
    public function setNoCopy($noCopy = null)
    {
        $this->noCopy = $noCopy;

        return $this;
    }
}
