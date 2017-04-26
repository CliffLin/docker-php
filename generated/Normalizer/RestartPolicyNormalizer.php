<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RestartPolicyNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\RestartPolicy') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\RestartPolicy) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\RestartPolicy();
        if (property_exists($data, 'Condition')) {
            $object->setCondition($data->{'Condition'});
        }
        if (property_exists($data, 'Delay')) {
            $object->setDelay($data->{'Delay'});
        }
        if (property_exists($data, 'MaxAttempts')) {
            $object->setMaxAttempts($data->{'MaxAttempts'});
        }
        if (property_exists($data, 'Window')) {
            $object->setWindow($data->{'Window'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCondition()) {
            $data->{'Condition'} = $object->getCondition();
        }
        if (null !== $object->getDelay()) {
            $data->{'Delay'} = $object->getDelay();
        }
        if (null !== $object->getMaxAttempts()) {
            $data->{'MaxAttempts'} = $object->getMaxAttempts();
        }
        if (null !== $object->getWindow()) {
            $data->{'Window'} = $object->getWindow();
        }

        return $data;
    }
}
