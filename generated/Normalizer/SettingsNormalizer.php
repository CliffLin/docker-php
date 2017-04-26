<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class SettingsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Settings') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Settings) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\Settings();
        if (property_exists($data, 'Args')) {
            $values = [];
            foreach ($data->{'Args'} as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
        }
        if (property_exists($data, 'Devices')) {
            $values_1 = [];
            foreach ($data->{'Devices'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Docker\\API\\Model\\PluginDevice', 'raw', $context);
            }
            $object->setDevices($values_1);
        }
        if (property_exists($data, 'Env')) {
            $values_2 = [];
            foreach ($data->{'Env'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setEnv($values_2);
        }
        if (property_exists($data, 'Mounts')) {
            $values_3 = [];
            foreach ($data->{'Mounts'} as $value_3) {
                $values_3[] = $this->serializer->deserialize($value_3, 'Docker\\API\\Model\\PluginMount', 'raw', $context);
            }
            $object->setMounts($values_3);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getArgs()) {
            $values = [];
            foreach ($object->getArgs() as $value) {
                $values[] = $value;
            }
            $data->{'Args'} = $values;
        }
        if (null !== $object->getDevices()) {
            $values_1 = [];
            foreach ($object->getDevices() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'Devices'} = $values_1;
        }
        if (null !== $object->getEnv()) {
            $values_2 = [];
            foreach ($object->getEnv() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'Env'} = $values_2;
        }
        if (null !== $object->getMounts()) {
            $values_3 = [];
            foreach ($object->getMounts() as $value_3) {
                $values_3[] = $this->serializer->serialize($value_3, 'raw', $context);
            }
            $data->{'Mounts'} = $values_3;
        }

        return $data;
    }
}
