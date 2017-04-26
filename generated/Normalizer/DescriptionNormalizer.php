<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class DescriptionNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Description') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Description) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\Description();
        if (property_exists($data, 'Engine')) {
            $object->setEngine($this->serializer->deserialize($data->{'Engine'}, 'Docker\\API\\Model\\Engine', 'raw', $context));
        }
        if (property_exists($data, 'Hostname')) {
            $object->setHostname($data->{'Hostname'});
        }
        if (property_exists($data, 'Platform')) {
            $object->setPlatform($this->serializer->deserialize($data->{'Platform'}, 'Docker\\API\\Model\\Platform', 'raw', $context));
        }
        if (property_exists($data, 'Resources')) {
            $object->setResources($this->serializer->deserialize($data->{'Resources'}, 'Docker\\API\\Model\\Resources', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEngine()) {
            $data->{'Engine'} = $this->serializer->serialize($object->getEngine(), 'raw', $context);
        }
        if (null !== $object->getHostname()) {
            $data->{'Hostname'} = $object->getHostname();
        }
        if (null !== $object->getPlatform()) {
            $data->{'Platform'} = $this->serializer->serialize($object->getPlatform(), 'raw', $context);
        }
        if (null !== $object->getResources()) {
            $data->{'Resources'} = $this->serializer->serialize($object->getResources(), 'raw', $context);
        }

        return $data;
    }
}
