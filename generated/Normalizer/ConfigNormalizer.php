<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ConfigNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Config') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Config) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\Config();
        if (property_exists($data, 'Args')) {
            $object->setArgs($this->serializer->deserialize($data->{'Args'}, 'Docker\\API\\Model\\Args', 'raw', $context));
        }
        if (property_exists($data, 'Description')) {
            $object->setDescription($data->{'Description'});
        }
        if (property_exists($data, 'Documentation')) {
            $object->setDocumentation($data->{'Documentation'});
        }
        if (property_exists($data, 'Entrypoint')) {
            $values = [];
            foreach ($data->{'Entrypoint'} as $value) {
                $values[] = $value;
            }
            $object->setEntrypoint($values);
        }
        if (property_exists($data, 'Env')) {
            $values_1 = [];
            foreach ($data->{'Env'} as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'Docker\\API\\Model\\PluginEnv', 'raw', $context);
            }
            $object->setEnv($values_1);
        }
        if (property_exists($data, 'Interfaced')) {
            $object->setInterfaced($this->serializer->deserialize($data->{'Interfaced'}, 'Docker\\API\\Model\\Interfaced', 'raw', $context));
        }
        if (property_exists($data, 'Linux')) {
            $object->setLinux($this->serializer->deserialize($data->{'Linux'}, 'Docker\\API\\Model\\Linux', 'raw', $context));
        }
        if (property_exists($data, 'Mounts')) {
            $values_2 = [];
            foreach ($data->{'Mounts'} as $value_2) {
                $values_2[] = $this->serializer->deserialize($value_2, 'Docker\\API\\Model\\PluginMount', 'raw', $context);
            }
            $object->setMounts($values_2);
        }
        if (property_exists($data, 'Network')) {
            $object->setNetwork($this->serializer->deserialize($data->{'Network'}, 'Docker\\API\\Model\\Network', 'raw', $context));
        }
        if (property_exists($data, 'PropagatedMount')) {
            $object->setPropagatedMount($data->{'PropagatedMount'});
        }
        if (property_exists($data, 'User')) {
            $object->setUser($this->serializer->deserialize($data->{'User'}, 'Docker\\API\\Model\\User', 'raw', $context));
        }
        if (property_exists($data, 'WorkDir')) {
            $object->setWorkDir($data->{'WorkDir'});
        }
        if (property_exists($data, 'rootfs')) {
            $object->setRootfs($this->serializer->deserialize($data->{'rootfs'}, 'Docker\\API\\Model\\Rootfs', 'raw', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getArgs()) {
            $data->{'Args'} = $this->serializer->serialize($object->getArgs(), 'raw', $context);
        }
        if (null !== $object->getDescription()) {
            $data->{'Description'} = $object->getDescription();
        }
        if (null !== $object->getDocumentation()) {
            $data->{'Documentation'} = $object->getDocumentation();
        }
        if (null !== $object->getEntrypoint()) {
            $values = [];
            foreach ($object->getEntrypoint() as $value) {
                $values[] = $value;
            }
            $data->{'Entrypoint'} = $values;
        }
        if (null !== $object->getEnv()) {
            $values_1 = [];
            foreach ($object->getEnv() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data->{'Env'} = $values_1;
        }
        if (null !== $object->getInterfaced()) {
            $data->{'Interfaced'} = $this->serializer->serialize($object->getInterfaced(), 'raw', $context);
        }
        if (null !== $object->getLinux()) {
            $data->{'Linux'} = $this->serializer->serialize($object->getLinux(), 'raw', $context);
        }
        if (null !== $object->getMounts()) {
            $values_2 = [];
            foreach ($object->getMounts() as $value_2) {
                $values_2[] = $this->serializer->serialize($value_2, 'raw', $context);
            }
            $data->{'Mounts'} = $values_2;
        }
        if (null !== $object->getNetwork()) {
            $data->{'Network'} = $this->serializer->serialize($object->getNetwork(), 'raw', $context);
        }
        if (null !== $object->getPropagatedMount()) {
            $data->{'PropagatedMount'} = $object->getPropagatedMount();
        }
        if (null !== $object->getUser()) {
            $data->{'User'} = $this->serializer->serialize($object->getUser(), 'raw', $context);
        }
        if (null !== $object->getWorkDir()) {
            $data->{'WorkDir'} = $object->getWorkDir();
        }
        if (null !== $object->getRootfs()) {
            $data->{'rootfs'} = $this->serializer->serialize($object->getRootfs(), 'raw', $context);
        }

        return $data;
    }
}
