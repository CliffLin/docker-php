<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class StatusNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Status') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Status) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\Status();
        if (property_exists($data, 'ContainerStatus')) {
            $object->setContainerStatus($this->serializer->deserialize($data->{'ContainerStatus'}, 'Docker\\API\\Model\\ContainerStatus', 'raw', $context));
        }
        if (property_exists($data, 'Err')) {
            $object->setErr($data->{'Err'});
        }
        if (property_exists($data, 'Message')) {
            $object->setMessage($data->{'Message'});
        }
        if (property_exists($data, 'State')) {
            $object->setState($data->{'State'});
        }
        if (property_exists($data, 'Timestamp')) {
            $object->setTimestamp($data->{'Timestamp'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getContainerStatus()) {
            $data->{'ContainerStatus'} = $this->serializer->serialize($object->getContainerStatus(), 'raw', $context);
        }
        if (null !== $object->getErr()) {
            $data->{'Err'} = $object->getErr();
        }
        if (null !== $object->getMessage()) {
            $data->{'Message'} = $object->getMessage();
        }
        if (null !== $object->getState()) {
            $data->{'State'} = $object->getState();
        }
        if (null !== $object->getTimestamp()) {
            $data->{'Timestamp'} = $object->getTimestamp();
        }

        return $data;
    }
}
