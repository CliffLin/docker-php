<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class PlatformNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Platform') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Platform) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\Platform();
        if (property_exists($data, 'Architecture')) {
            $object->setArchitecture($data->{'Architecture'});
        }
        if (property_exists($data, 'OS')) {
            $object->setOS($data->{'OS'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getArchitecture()) {
            $data->{'Architecture'} = $object->getArchitecture();
        }
        if (null !== $object->getOS()) {
            $data->{'OS'} = $object->getOS();
        }

        return $data;
    }
}
