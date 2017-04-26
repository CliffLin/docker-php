<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ArgsNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Args') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Args) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\Args();
        if (property_exists($data, 'Description')) {
            $object->setDescription($data->{'Description'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Settable')) {
            $values = [];
            foreach ($data->{'Settable'} as $value) {
                $values[] = $value;
            }
            $object->setSettable($values);
        }
        if (property_exists($data, 'Value')) {
            $values_1 = [];
            foreach ($data->{'Value'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setValue($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDescription()) {
            $data->{'Description'} = $object->getDescription();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getSettable()) {
            $values = [];
            foreach ($object->getSettable() as $value) {
                $values[] = $value;
            }
            $data->{'Settable'} = $values;
        }
        if (null !== $object->getValue()) {
            $values_1 = [];
            foreach ($object->getValue() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Value'} = $values_1;
        }

        return $data;
    }
}
