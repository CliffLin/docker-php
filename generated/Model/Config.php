<?php

namespace Docker\API\Model;

class Config
{
    /**
     * @var Args
     */
    protected $args;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $documentation;
    /**
     * @var string[]
     */
    protected $entrypoint;
    /**
     * @var PluginEnv[]
     */
    protected $env;
    /**
     * @var Interfaced
     */
    protected $interfaced;
    /**
     * @var Linux
     */
    protected $linux;
    /**
     * @var PluginMount[]
     */
    protected $mounts;
    /**
     * @var Network
     */
    protected $network;
    /**
     * @var string
     */
    protected $propagatedMount;
    /**
     * @var User
     */
    protected $user;
    /**
     * @var string
     */
    protected $workDir;
    /**
     * @var Rootfs
     */
    protected $rootfs;

    /**
     * @return Args
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * @param Args $args
     *
     * @return self
     */
    public function setArgs(Args $args = null)
    {
        $this->args = $args;

        return $this;
    }

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
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * @param string $documentation
     *
     * @return self
     */
    public function setDocumentation($documentation = null)
    {
        $this->documentation = $documentation;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }

    /**
     * @param string[] $entrypoint
     *
     * @return self
     */
    public function setEntrypoint(array $entrypoint = null)
    {
        $this->entrypoint = $entrypoint;

        return $this;
    }

    /**
     * @return PluginEnv[]
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * @param PluginEnv[] $env
     *
     * @return self
     */
    public function setEnv(array $env = null)
    {
        $this->env = $env;

        return $this;
    }

    /**
     * @return Interfaced
     */
    public function getInterfaced()
    {
        return $this->interfaced;
    }

    /**
     * @param Interfaced $interfaced
     *
     * @return self
     */
    public function setInterfaced(Interfaced $interfaced = null)
    {
        $this->interfaced = $interfaced;

        return $this;
    }

    /**
     * @return Linux
     */
    public function getLinux()
    {
        return $this->linux;
    }

    /**
     * @param Linux $linux
     *
     * @return self
     */
    public function setLinux(Linux $linux = null)
    {
        $this->linux = $linux;

        return $this;
    }

    /**
     * @return PluginMount[]
     */
    public function getMounts()
    {
        return $this->mounts;
    }

    /**
     * @param PluginMount[] $mounts
     *
     * @return self
     */
    public function setMounts(array $mounts = null)
    {
        $this->mounts = $mounts;

        return $this;
    }

    /**
     * @return Network
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param Network $network
     *
     * @return self
     */
    public function setNetwork(Network $network = null)
    {
        $this->network = $network;

        return $this;
    }

    /**
     * @return string
     */
    public function getPropagatedMount()
    {
        return $this->propagatedMount;
    }

    /**
     * @param string $propagatedMount
     *
     * @return self
     */
    public function setPropagatedMount($propagatedMount = null)
    {
        $this->propagatedMount = $propagatedMount;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     *
     * @return self
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkDir()
    {
        return $this->workDir;
    }

    /**
     * @param string $workDir
     *
     * @return self
     */
    public function setWorkDir($workDir = null)
    {
        $this->workDir = $workDir;

        return $this;
    }

    /**
     * @return Rootfs
     */
    public function getRootfs()
    {
        return $this->rootfs;
    }

    /**
     * @param Rootfs $rootfs
     *
     * @return self
     */
    public function setRootfs(Rootfs $rootfs = null)
    {
        $this->rootfs = $rootfs;

        return $this;
    }
}
