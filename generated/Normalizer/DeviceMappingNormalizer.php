<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class DeviceMappingNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\DeviceMapping') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\DeviceMapping) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\DeviceMapping();
        if (property_exists($data, 'CgroupPermissions')) {
            $object->setCgroupPermissions($data->{'CgroupPermissions'});
        }
        if (property_exists($data, 'PathInContainer')) {
            $object->setPathInContainer($data->{'PathInContainer'});
        }
        if (property_exists($data, 'PathOnHost')) {
            $object->setPathOnHost($data->{'PathOnHost'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCgroupPermissions()) {
            $data->{'CgroupPermissions'} = $object->getCgroupPermissions();
        }
        if (null !== $object->getPathInContainer()) {
            $data->{'PathInContainer'} = $object->getPathInContainer();
        }
        if (null !== $object->getPathOnHost()) {
            $data->{'PathOnHost'} = $object->getPathOnHost();
        }

        return $data;
    }
}
