<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PluginInterfaceTypeNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\PluginInterfaceType') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\PluginInterfaceType) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\PluginInterfaceType();
        if (property_exists($data, 'Capability')) {
            $object->setCapability($data->{'Capability'});
        }
        if (property_exists($data, 'Prefix')) {
            $object->setPrefix($data->{'Prefix'});
        }
        if (property_exists($data, 'Version')) {
            $object->setVersion($data->{'Version'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCapability()) {
            $data->{'Capability'} = $object->getCapability();
        }
        if (null !== $object->getPrefix()) {
            $data->{'Prefix'} = $object->getPrefix();
        }
        if (null !== $object->getVersion()) {
            $data->{'Version'} = $object->getVersion();
        }

        return $data;
    }
}
