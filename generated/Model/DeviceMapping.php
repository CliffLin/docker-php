<?php

namespace Docker\API\Model;

class DeviceMapping
{
    /**
     * @var string
     */
    protected $cgroupPermissions;
    /**
     * @var string
     */
    protected $pathInContainer;
    /**
     * @var string
     */
    protected $pathOnHost;

    /**
     * @return string
     */
    public function getCgroupPermissions()
    {
        return $this->cgroupPermissions;
    }

    /**
     * @param string $cgroupPermissions
     *
     * @return self
     */
    public function setCgroupPermissions($cgroupPermissions = null)
    {
        $this->cgroupPermissions = $cgroupPermissions;

        return $this;
    }

    /**
     * @return string
     */
    public function getPathInContainer()
    {
        return $this->pathInContainer;
    }

    /**
     * @param string $pathInContainer
     *
     * @return self
     */
    public function setPathInContainer($pathInContainer = null)
    {
        $this->pathInContainer = $pathInContainer;

        return $this;
    }

    /**
     * @return string
     */
    public function getPathOnHost()
    {
        return $this->pathOnHost;
    }

    /**
     * @param string $pathOnHost
     *
     * @return self
     */
    public function setPathOnHost($pathOnHost = null)
    {
        $this->pathOnHost = $pathOnHost;

        return $this;
    }
}
