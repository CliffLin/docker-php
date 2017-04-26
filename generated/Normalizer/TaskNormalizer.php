<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class TaskNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Task') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Task) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\Task();
        if (property_exists($data, 'CreatedAt')) {
            $object->setCreatedAt($data->{'CreatedAt'});
        }
        if (property_exists($data, 'DesiredState')) {
            $object->setDesiredState($data->{'DesiredState'});
        }
        if (property_exists($data, 'ID')) {
            $object->setID($data->{'ID'});
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
        if (property_exists($data, 'NodeID')) {
            $object->setNodeID($data->{'NodeID'});
        }
        if (property_exists($data, 'ServiceID')) {
            $object->setServiceID($data->{'ServiceID'});
        }
        if (property_exists($data, 'Slot')) {
            $object->setSlot($data->{'Slot'});
        }
        if (property_exists($data, 'Spec')) {
            $object->setSpec($this->serializer->deserialize($data->{'Spec'}, 'Docker\\API\\Model\\TaskSpec', 'raw', $context));
        }
        if (property_exists($data, 'Status')) {
            $object->setStatus($this->serializer->deserialize($data->{'Status'}, 'Docker\\API\\Model\\Status', 'raw', $context));
        }
        if (property_exists($data, 'UpdatedAt')) {
            $object->setUpdatedAt($data->{'UpdatedAt'});
        }
        if (property_exists($data, 'Version')) {
            $object->setVersion($this->serializer->deserialize($data->{'Version'}, 'Docker\\API\\Model\\ObjectVersion', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreatedAt()) {
            $data->{'CreatedAt'} = $object->getCreatedAt();
        }
        if (null !== $object->getDesiredState()) {
            $data->{'DesiredState'} = $object->getDesiredState();
        }
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
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
        if (null !== $object->getNodeID()) {
            $data->{'NodeID'} = $object->getNodeID();
        }
        if (null !== $object->getServiceID()) {
            $data->{'ServiceID'} = $object->getServiceID();
        }
        if (null !== $object->getSlot()) {
            $data->{'Slot'} = $object->getSlot();
        }
        if (null !== $object->getSpec()) {
            $data->{'Spec'} = $this->serializer->serialize($object->getSpec(), 'raw', $context);
        }
        if (null !== $object->getStatus()) {
            $data->{'Status'} = $this->serializer->serialize($object->getStatus(), 'raw', $context);
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'UpdatedAt'} = $object->getUpdatedAt();
        }
        if (null !== $object->getVersion()) {
            $data->{'Version'} = $this->serializer->serialize($object->getVersion(), 'raw', $context);
        }

        return $data;
    }
}
