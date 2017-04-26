<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ContainerStatusNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\ContainerStatus') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\ContainerStatus) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\ContainerStatus();
        if (property_exists($data, 'ContainerID')) {
            $object->setContainerID($data->{'ContainerID'});
        }
        if (property_exists($data, 'ExitCode')) {
            $object->setExitCode($data->{'ExitCode'});
        }
        if (property_exists($data, 'PID')) {
            $object->setPID($data->{'PID'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getContainerID()) {
            $data->{'ContainerID'} = $object->getContainerID();
        }
        if (null !== $object->getExitCode()) {
            $data->{'ExitCode'} = $object->getExitCode();
        }
        if (null !== $object->getPID()) {
            $data->{'PID'} = $object->getPID();
        }

        return $data;
    }
}