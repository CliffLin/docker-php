<?php

namespace Docker\API\Model;

class ContainerSpec
{
    /**
     * @var string[]
     */
    protected $args;
    /**
     * @var string[]
     */
    protected $command;
    /**
     * @var DNSConfig
     */
    protected $dNSConfig;
    /**
     * @var string
     */
    protected $dir;
    /**
     * @var string[]
     */
    protected $env;
    /**
     * @var string[]
     */
    protected $groups;
    /**
     * @var HealthConfig
     */
    protected $healthCheck;
    /**
     * @var string
     */
    protected $hostname;
    /**
     * @var string[]
     */
    protected $hosts;
    /**
     * @var string
     */
    protected $image;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var Mount[]
     */
    protected $mounts;
    /**
     * @var bool
     */
    protected $openStdin;
    /**
     * @var bool
     */
    protected $readOnly;
    /**
     * @var Secrets[]
     */
    protected $secrets;
    /**
     * @var int
     */
    protected $stopGracePeriod;
    /**
     * @var bool
     */
    protected $tTY;
    /**
     * @var string
     */
    protected $user;

    /**
     * @return string[]
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * @param string[] $args
     *
     * @return self
     */
    public function setArgs(array $args = null)
    {
        $this->args = $args;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param string[] $command
     *
     * @return self
     */
    public function setCommand(array $command = null)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * @return DNSConfig
     */
    public function getDNSConfig()
    {
        return $this->dNSConfig;
    }

    /**
     * @param DNSConfig $dNSConfig
     *
     * @return self
     */
    public function setDNSConfig(DNSConfig $dNSConfig = null)
    {
        $this->dNSConfig = $dNSConfig;

        return $this;
    }

    /**
     * @return string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * @param string $dir
     *
     * @return self
     */
    public function setDir($dir = null)
    {
        $this->dir = $dir;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * @param string[] $env
     *
     * @return self
     */
    public function setEnv(array $env = null)
    {
        $this->env = $env;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param string[] $groups
     *
     * @return self
     */
    public function setGroups(array $groups = null)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * @return HealthConfig
     */
    public function getHealthCheck()
    {
        return $this->healthCheck;
    }

    /**
     * @param HealthConfig $healthCheck
     *
     * @return self
     */
    public function setHealthCheck(HealthConfig $healthCheck = null)
    {
        $this->healthCheck = $healthCheck;

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
     * @return string[]
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * @param string[] $hosts
     *
     * @return self
     */
    public function setHosts(array $hosts = null)
    {
        $this->hosts = $hosts;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     *
     * @return self
     */
    public function setImage($image = null)
    {
        $this->image = $image;

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
     * @return Mount[]
     */
    public function getMounts()
    {
        return $this->mounts;
    }

    /**
     * @param Mount[] $mounts
     *
     * @return self
     */
    public function setMounts(array $mounts = null)
    {
        $this->mounts = $mounts;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOpenStdin()
    {
        return $this->openStdin;
    }

    /**
     * @param bool $openStdin
     *
     * @return self
     */
    public function setOpenStdin($openStdin = null)
    {
        $this->openStdin = $openStdin;

        return $this;
    }

    /**
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly($readOnly = null)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * @return Secrets[]
     */
    public function getSecrets()
    {
        return $this->secrets;
    }

    /**
     * @param Secrets[] $secrets
     *
     * @return self
     */
    public function setSecrets(array $secrets = null)
    {
        $this->secrets = $secrets;

        return $this;
    }

    /**
     * @return int
     */
    public function getStopGracePeriod()
    {
        return $this->stopGracePeriod;
    }

    /**
     * @param int $stopGracePeriod
     *
     * @return self
     */
    public function setStopGracePeriod($stopGracePeriod = null)
    {
        $this->stopGracePeriod = $stopGracePeriod;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTTY()
    {
        return $this->tTY;
    }

    /**
     * @param bool $tTY
     *
     * @return self
     */
    public function setTTY($tTY = null)
    {
        $this->tTY = $tTY;

        return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return self
     */
    public function setUser($user = null)
    {
        $this->user = $user;

        return $this;
    }
}
