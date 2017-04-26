<?php

namespace Docker\API\Model;

class TaskSpec
{
    /**
     * @var ContainerSpec
     */
    protected $containerSpec;
    /**
     * @var int
     */
    protected $forceUpdate;
    /**
     * @var LogDriver
     */
    protected $logDriver;
    /**
     * @var Networks[]
     */
    protected $networks;
    /**
     * @var Placement
     */
    protected $placement;
    /**
     * @var Resources
     */
    protected $resources;
    /**
     * @var RestartPolicy
     */
    protected $restartPolicy;

    /**
     * @return ContainerSpec
     */
    public function getContainerSpec()
    {
        return $this->containerSpec;
    }

    /**
     * @param ContainerSpec $containerSpec
     *
     * @return self
     */
    public function setContainerSpec(ContainerSpec $containerSpec = null)
    {
        $this->containerSpec = $containerSpec;

        return $this;
    }

    /**
     * @return int
     */
    public function getForceUpdate()
    {
        return $this->forceUpdate;
    }

    /**
     * @param int $forceUpdate
     *
     * @return self
     */
    public function setForceUpdate($forceUpdate = null)
    {
        $this->forceUpdate = $forceUpdate;

        return $this;
    }

    /**
     * @return LogDriver
     */
    public function getLogDriver()
    {
        return $this->logDriver;
    }

    /**
     * @param LogDriver $logDriver
     *
     * @return self
     */
    public function setLogDriver(LogDriver $logDriver = null)
    {
        $this->logDriver = $logDriver;

        return $this;
    }

    /**
     * @return Networks[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * @param Networks[] $networks
     *
     * @return self
     */
    public function setNetworks(array $networks = null)
    {
        $this->networks = $networks;

        return $this;
    }

    /**
     * @return Placement
     */
    public function getPlacement()
    {
        return $this->placement;
    }

    /**
     * @param Placement $placement
     *
     * @return self
     */
    public function setPlacement(Placement $placement = null)
    {
        $this->placement = $placement;

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

    /**
     * @return RestartPolicy
     */
    public function getRestartPolicy()
    {
        return $this->restartPolicy;
    }

    /**
     * @param RestartPolicy $restartPolicy
     *
     * @return self
     */
    public function setRestartPolicy(RestartPolicy $restartPolicy = null)
    {
        $this->restartPolicy = $restartPolicy;

        return $this;
    }
}
