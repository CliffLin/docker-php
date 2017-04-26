<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class GraphDriverNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\GraphDriver') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\GraphDriver) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\GraphDriver();
        if (property_exists($data, 'Data')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Data'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setData($values);
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
            $values = new \stdClass();
            foreach ($object->getData() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Data'} = $values;
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }

        return $data;
    }
}
