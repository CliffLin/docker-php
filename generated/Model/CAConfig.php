<?php

namespace Docker\API\Model;

class CAConfig
{
    /**
     * @var ExternalCAs[]
     */
    protected $externalCAs;
    /**
     * @var int
     */
    protected $nodeCertExpiry;

    /**
     * @return ExternalCAs[]
     */
    public function getExternalCAs()
    {
        return $this->externalCAs;
    }

    /**
     * @param ExternalCAs[] $externalCAs
     *
     * @return self
     */
    public function setExternalCAs(array $externalCAs = null)
    {
        $this->externalCAs = $externalCAs;

        return $this;
    }

    /**
     * @return int
     */
    public function getNodeCertExpiry()
    {
        return $this->nodeCertExpiry;
    }

    /**
     * @param int $nodeCertExpiry
     *
     * @return self
     */
    public function setNodeCertExpiry($nodeCertExpiry = null)
    {
        $this->nodeCertExpiry = $nodeCertExpiry;

        return $this;
    }
}
