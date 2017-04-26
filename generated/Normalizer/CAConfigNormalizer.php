<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class CAConfigNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\CAConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\CAConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\CAConfig();
        if (property_exists($data, 'ExternalCAs')) {
            $values = [];
            foreach ($data->{'ExternalCAs'} as $value) {
                $values[] = $this->serializer->deserialize($value, 'Docker\\API\\Model\\ExternalCAs', 'raw', $context);
            }
            $object->setExternalCAs($values);
        }
        if (property_exists($data, 'NodeCertExpiry')) {
            $object->setNodeCertExpiry($data->{'NodeCertExpiry'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getExternalCAs()) {
            $values = [];
            foreach ($object->getExternalCAs() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data->{'ExternalCAs'} = $values;
        }
        if (null !== $object->getNodeCertExpiry()) {
            $data->{'NodeCertExpiry'} = $object->getNodeCertExpiry();
        }

        return $data;
    }
}
