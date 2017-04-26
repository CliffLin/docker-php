<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PluginNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Plugin') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Plugin) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\Plugin();
        if (property_exists($data, 'Config')) {
            $object->setConfig($this->serializer->deserialize($data->{'Config'}, 'Docker\\API\\Model\\Config', 'raw', $context));
        }
        if (property_exists($data, 'Enabled')) {
            $object->setEnabled($data->{'Enabled'});
        }
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'PluginReference')) {
            $object->setPluginReference($data->{'PluginReference'});
        }
        if (property_exists($data, 'Settings')) {
            $object->setSettings($this->serializer->deserialize($data->{'Settings'}, 'Docker\\API\\Model\\Settings', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getConfig()) {
            $data->{'Config'} = $this->serializer->serialize($object->getConfig(), 'raw', $context);
        }
        if (null !== $object->getEnabled()) {
            $data->{'Enabled'} = $object->getEnabled();
        }
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getPluginReference()) {
            $data->{'PluginReference'} = $object->getPluginReference();
        }
        if (null !== $object->getSettings()) {
            $data->{'Settings'} = $this->serializer->serialize($object->getSettings(), 'raw', $context);
        }

        return $data;
    }
}
