<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class SecretSpecNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\SecretSpec') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\SecretSpec) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\SecretSpec();
        if (property_exists($data, 'Data')) {
            $values = [];
            foreach ($data->{'Data'} as $value) {
                $values[] = $value;
            }
            $object->setData($values);
        }
        if (property_exists($data, 'Labels')) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setLabels($values_1);
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getData()) {
            $values = [];
            foreach ($object->getData() as $value) {
                $values[] = $value;
            }
            $data->{'Data'} = $values;
        }
        if (null !== $object->getLabels()) {
            $values_1 = new \stdClass();
            foreach ($object->getLabels() as $key => $value_1) {
                $values_1->{$key} = $value_1;
            }
            $data->{'Labels'} = $values_1;
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }

        return $data;
    }
}
