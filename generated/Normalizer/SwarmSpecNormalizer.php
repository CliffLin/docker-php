<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class SwarmSpecNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\SwarmSpec') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\SwarmSpec) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\SwarmSpec();
        if (property_exists($data, 'CAConfig')) {
            $object->setCAConfig($this->serializer->deserialize($data->{'CAConfig'}, 'Docker\\API\\Model\\CAConfig', 'raw', $context));
        }
        if (property_exists($data, 'Dispatcher')) {
            $object->setDispatcher($this->serializer->deserialize($data->{'Dispatcher'}, 'Docker\\API\\Model\\Dispatcher', 'raw', $context));
        }
        if (property_exists($data, 'EncryptionConfig')) {
            $object->setEncryptionConfig($this->serializer->deserialize($data->{'EncryptionConfig'}, 'Docker\\API\\Model\\EncryptionConfig', 'raw', $context));
        }
        if (property_exists($data, 'Labels')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Orchestration')) {
            $object->setOrchestration($this->serializer->deserialize($data->{'Orchestration'}, 'Docker\\API\\Model\\Orchestration', 'raw', $context));
        }
        if (property_exists($data, 'Raft')) {
            $object->setRaft($this->serializer->deserialize($data->{'Raft'}, 'Docker\\API\\Model\\Raft', 'raw', $context));
        }
        if (property_exists($data, 'TaskDefaults')) {
            $object->setTaskDefaults($this->serializer->deserialize($data->{'TaskDefaults'}, 'Docker\\API\\Model\\TaskDefaults', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCAConfig()) {
            $data->{'CAConfig'} = $this->serializer->serialize($object->getCAConfig(), 'raw', $context);
        }
        if (null !== $object->getDispatcher()) {
            $data->{'Dispatcher'} = $this->serializer->serialize($object->getDispatcher(), 'raw', $context);
        }
        if (null !== $object->getEncryptionConfig()) {
            $data->{'EncryptionConfig'} = $this->serializer->serialize($object->getEncryptionConfig(), 'raw', $context);
        }
        if (null !== $object->getLabels()) {
            $values = new \stdClass();
            foreach ($object->getLabels() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Labels'} = $values;
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getOrchestration()) {
            $data->{'Orchestration'} = $this->serializer->serialize($object->getOrchestration(), 'raw', $context);
        }
        if (null !== $object->getRaft()) {
            $data->{'Raft'} = $this->serializer->serialize($object->getRaft(), 'raw', $context);
        }
        if (null !== $object->getTaskDefaults()) {
            $data->{'TaskDefaults'} = $this->serializer->serialize($object->getTaskDefaults(), 'raw', $context);
        }

        return $data;
    }
}
