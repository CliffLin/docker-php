<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class DNSConfigNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\DNSConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\DNSConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\DNSConfig();
        if (property_exists($data, 'Nameservers')) {
            $values = [];
            foreach ($data->{'Nameservers'} as $value) {
                $values[] = $value;
            }
            $object->setNameservers($values);
        }
        if (property_exists($data, 'Options')) {
            $values_1 = [];
            foreach ($data->{'Options'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setOptions($values_1);
        }
        if (property_exists($data, 'Search')) {
            $values_2 = [];
            foreach ($data->{'Search'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSearch($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getNameservers()) {
            $values = [];
            foreach ($object->getNameservers() as $value) {
                $values[] = $value;
            }
            $data->{'Nameservers'} = $values;
        }
        if (null !== $object->getOptions()) {
            $values_1 = [];
            foreach ($object->getOptions() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Options'} = $values_1;
        }
        if (null !== $object->getSearch()) {
            $values_2 = [];
            foreach ($object->getSearch() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'Search'} = $values_2;
        }

        return $data;
    }
}
