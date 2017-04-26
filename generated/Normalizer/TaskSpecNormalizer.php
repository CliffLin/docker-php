<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class TaskSpecNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\TaskSpec') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\TaskSpec) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\TaskSpec();
        if (property_exists($data, 'ContainerSpec')) {
            $object->setContainerSpec($this->serializer->deserialize($data->{'ContainerSpec'}, 'Docker\\API\\Model\\ContainerSpec', 'raw', $context));
        }
        if (property_exists($data, 'ForceUpdate')) {
            $object->setForceUpdate($data->{'ForceUpdate'});
        }
        if (property_exists($data, 'LogDriver')) {
            $object->setLogDriver($this->serializer->deserialize($data->{'LogDriver'}, 'Docker\\API\\Model\\LogDriver', 'raw', $context));
        }
        if (property_exists($data, 'Networks')) {
            $values = [];
            foreach ($data->{'Networks'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Docker\\API\\Model\\Networks', 'raw', $context);
            }
            $object->setNetworks($values);
        }
        if (property_exists($data, 'Placement')) {
            $object->setPlacement($this->serializer->deserialize($data->{'Placement'}, 'Docker\\API\\Model\\Placement', 'raw', $context));
        }
        if (property_exists($data, 'Resources')) {
            $object->setResources($this->serializer->deserialize($data->{'Resources'}, 'Docker\\API\\Model\\Resources', 'raw', $context));
        }
        if (property_exists($data, 'RestartPolicy')) {
            $object->setRestartPolicy($this->serializer->deserialize($data->{'RestartPolicy'}, 'Docker\\API\\Model\\RestartPolicy', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getContainerSpec()) {
            $data->{'ContainerSpec'} = $this->serializer->serialize($object->getContainerSpec(), 'raw', $context);
        }
        if (null !== $object->getForceUpdate()) {
            $data->{'ForceUpdate'} = $object->getForceUpdate();
        }
        if (null !== $object->getLogDriver()) {
            $data->{'LogDriver'} = $this->serializer->serialize($object->getLogDriver(), 'raw', $context);
        }
        if (null !== $object->getNetworks()) {
            $values = [];
            foreach ($object->getNetworks() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'Networks'} = $values;
        }
        if (null !== $object->getPlacement()) {
            $data->{'Placement'} = $this->serializer->serialize($object->getPlacement(), 'raw', $context);
        }
        if (null !== $object->getResources()) {
            $data->{'Resources'} = $this->serializer->serialize($object->getResources(), 'raw', $context);
        }
        if (null !== $object->getRestartPolicy()) {
            $data->{'RestartPolicy'} = $this->serializer->serialize($object->getRestartPolicy(), 'raw', $context);
        }

        return $data;
    }
}
