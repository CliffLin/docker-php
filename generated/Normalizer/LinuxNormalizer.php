<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class LinuxNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Linux') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Linux) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\Linux();
        if (property_exists($data, 'AllowAllDevices')) {
            $object->setAllowAllDevices($data->{'AllowAllDevices'});
        }
        if (property_exists($data, 'Capabilities')) {
            $values = [];
            foreach ($data->{'Capabilities'} as $value) {
                $values[] = $value;
            }
            $object->setCapabilities($values);
        }
        if (property_exists($data, 'Devices')) {
            $values_1 = [];
            foreach ($data->{'Devices'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Docker\\API\\Model\\PluginDevice', 'raw', $context);
            }
            $object->setDevices($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAllowAllDevices()) {
            $data->{'AllowAllDevices'} = $object->getAllowAllDevices();
        }
        if (null !== $object->getCapabilities()) {
            $values = [];
            foreach ($object->getCapabilities() as $value) {
                $values[] = $value;
            }
            $data->{'Capabilities'} = $values;
        }
        if (null !== $object->getDevices()) {
            $values_1 = [];
            foreach ($object->getDevices() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'Devices'} = $values_1;
        }

        return $data;
    }
}
