<?php

namespace Docker\API\Model;

class SwarmSpec
{
    /**
     * @var CAConfig
     */
    protected $cAConfig;
    /**
     * @var Dispatcher
     */
    protected $dispatcher;
    /**
     * @var EncryptionConfig
     */
    protected $encryptionConfig;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var Orchestration
     */
    protected $orchestration;
    /**
     * @var Raft
     */
    protected $raft;
    /**
     * @var TaskDefaults
     */
    protected $taskDefaults;

    /**
     * @return CAConfig
     */
    public function getCAConfig()
    {
        return $this->cAConfig;
    }

    /**
     * @param CAConfig $cAConfig
     *
     * @return self
     */
    public function setCAConfig(CAConfig $cAConfig = null)
    {
        $this->cAConfig = $cAConfig;

        return $this;
    }

    /**
     * @return Dispatcher
     */
    public function getDispatcher()
    {
        return $this->dispatcher;
    }

    /**
     * @param Dispatcher $dispatcher
     *
     * @return self
     */
    public function setDispatcher(Dispatcher $dispatcher = null)
    {
        $this->dispatcher = $dispatcher;

        return $this;
    }

    /**
     * @return EncryptionConfig
     */
    public function getEncryptionConfig()
    {
        return $this->encryptionConfig;
    }

    /**
     * @param EncryptionConfig $encryptionConfig
     *
     * @return self
     */
    public function setEncryptionConfig(EncryptionConfig $encryptionConfig = null)
    {
        $this->encryptionConfig = $encryptionConfig;

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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Orchestration
     */
    public function getOrchestration()
    {
        return $this->orchestration;
    }

    /**
     * @param Orchestration $orchestration
     *
     * @return self
     */
    public function setOrchestration(Orchestration $orchestration = null)
    {
        $this->orchestration = $orchestration;

        return $this;
    }

    /**
     * @return Raft
     */
    public function getRaft()
    {
        return $this->raft;
    }

    /**
     * @param Raft $raft
     *
     * @return self
     */
    public function setRaft(Raft $raft = null)
    {
        $this->raft = $raft;

        return $this;
    }

    /**
     * @return TaskDefaults
     */
    public function getTaskDefaults()
    {
        return $this->taskDefaults;
    }

    /**
     * @param TaskDefaults $taskDefaults
     *
     * @return self
     */
    public function setTaskDefaults(TaskDefaults $taskDefaults = null)
    {
        $this->taskDefaults = $taskDefaults;

        return $this;
    }
}
