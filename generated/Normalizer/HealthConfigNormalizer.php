<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class HealthConfigNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\HealthConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\HealthConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\HealthConfig();
        if (property_exists($data, 'Interval')) {
            $object->setInterval($data->{'Interval'});
        }
        if (property_exists($data, 'Retries')) {
            $object->setRetries($data->{'Retries'});
        }
        if (property_exists($data, 'Test')) {
            $values = [];
            foreach ($data->{'Test'} as $value) {
                $values[] = $value;
            }
            $object->setTest($values);
        }
        if (property_exists($data, 'Timeout')) {
            $object->setTimeout($data->{'Timeout'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getInterval()) {
            $data->{'Interval'} = $object->getInterval();
        }
        if (null !== $object->getRetries()) {
            $data->{'Retries'} = $object->getRetries();
        }
        if (null !== $object->getTest()) {
            $values = [];
            foreach ($object->getTest() as $value) {
                $values[] = $value;
            }
            $data->{'Test'} = $values;
        }
        if (null !== $object->getTimeout()) {
            $data->{'Timeout'} = $object->getTimeout();
        }

        return $data;
    }
}
