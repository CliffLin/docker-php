<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class InterfacedNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Interfaced') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Interfaced) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\Interfaced();
        if (property_exists($data, 'Socket')) {
            $object->setSocket($data->{'Socket'});
        }
        if (property_exists($data, 'Types')) {
            $values = [];
            foreach ($data->{'Types'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Docker\\API\\Model\\PluginInterfaceType', 'raw', $context);
            }
            $object->setTypes($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSocket()) {
            $data->{'Socket'} = $object->getSocket();
        }
        if (null !== $object->getTypes()) {
            $values = [];
            foreach ($object->getTypes() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'Types'} = $values;
        }

        return $data;
    }
}
