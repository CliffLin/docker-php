<?php

namespace Docker\API\Model;

class Interfaced
{
    /**
     * @var string
     */
    protected $socket;
    /**
     * @var PluginInterfaceType[]
     */
    protected $types;

    /**
     * @return string
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * @param string $socket
     *
     * @return self
     */
    public function setSocket($socket = null)
    {
        $this->socket = $socket;

        return $this;
    }

    /**
     * @return PluginInterfaceType[]
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param PluginInterfaceType[] $types
     *
     * @return self
     */
    public function setTypes(array $types = null)
    {
        $this->types = $types;

        return $this;
    }
}
