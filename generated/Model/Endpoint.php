<?php

namespace Docker\API\Model;

class Endpoint
{
    /**
     * @var EndpointPortConfig[]
     */
    protected $ports;
    /**
     * @var EndpointSpec
     */
    protected $spec;
    /**
     * @var VirtualIPs[]
     */
    protected $virtualIPs;

    /**
     * @return EndpointPortConfig[]
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * @param EndpointPortConfig[] $ports
     *
     * @return self
     */
    public function setPorts(array $ports = null)
    {
        $this->ports = $ports;

        return $this;
    }

    /**
     * @return EndpointSpec
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * @param EndpointSpec $spec
     *
     * @return self
     */
    public function setSpec(EndpointSpec $spec = null)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * @return VirtualIPs[]
     */
    public function getVirtualIPs()
    {
        return $this->virtualIPs;
    }

    /**
     * @param VirtualIPs[] $virtualIPs
     *
     * @return self
     */
    public function setVirtualIPs(array $virtualIPs = null)
    {
        $this->virtualIPs = $virtualIPs;

        return $this;
    }
}
