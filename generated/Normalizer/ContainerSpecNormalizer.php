<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class ContainerSpecNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\ContainerSpec') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\ContainerSpec) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\ContainerSpec();
        if (property_exists($data, 'Args')) {
            $values = [];
            foreach ($data->{'Args'} as $value) {
                $values[] = $value;
            }
            $object->setArgs($values);
        }
        if (property_exists($data, 'Command')) {
            $values_1 = [];
            foreach ($data->{'Command'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCommand($values_1);
        }
        if (property_exists($data, 'DNSConfig')) {
            $object->setDNSConfig($this->serializer->deserialize($data->{'DNSConfig'}, 'Docker\\API\\Model\\DNSConfig', 'raw', $context));
        }
        if (property_exists($data, 'Dir')) {
            $object->setDir($data->{'Dir'});
        }
        if (property_exists($data, 'Env')) {
            $values_2 = [];
            foreach ($data->{'Env'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setEnv($values_2);
        }
        if (property_exists($data, 'Groups')) {
            $values_3 = [];
            foreach ($data->{'Groups'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setGroups($values_3);
        }
        if (property_exists($data, 'HealthCheck')) {
            $object->setHealthCheck($this->serializer->deserialize($data->{'HealthCheck'}, 'Docker\\API\\Model\\HealthConfig', 'raw', $context));
        }
        if (property_exists($data, 'Hostname')) {
            $object->setHostname($data->{'Hostname'});
        }
        if (property_exists($data, 'Hosts')) {
            $values_4 = [];
            foreach ($data->{'Hosts'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setHosts($values_4);
        }
        if (property_exists($data, 'Image')) {
            $object->setImage($data->{'Image'});
        }
        if (property_exists($data, 'Labels')) {
            $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value_5) {
                $values_5[$key] = $value_5;
            }
            $object->setLabels($values_5);
        }
        if (property_exists($data, 'Mounts')) {
            $values_6 = [];
            foreach ($data->{'Mounts'} as $value_6) {
                $values_6[] = $this->serializer->deserialize($value_6, 'Docker\\API\\Model\\Mount', 'raw', $context);
            }
            $object->setMounts($values_6);
        }
        if (property_exists($data, 'OpenStdin')) {
            $object->setOpenStdin($data->{'OpenStdin'});
        }
        if (property_exists($data, 'ReadOnly')) {
            $object->setReadOnly($data->{'ReadOnly'});
        }
        if (property_exists($data, 'Secrets')) {
            $values_7 = [];
            foreach ($data->{'Secrets'} as $value_7) {
                $values_7[] = $this->serializer->deserialize($value_7, 'Docker\\API\\Model\\Secrets', 'raw', $context);
            }
            $object->setSecrets($values_7);
        }
        if (property_exists($data, 'StopGracePeriod')) {
            $object->setStopGracePeriod($data->{'StopGracePeriod'});
        }
        if (property_exists($data, 'TTY')) {
            $object->setTTY($data->{'TTY'});
        }
        if (property_exists($data, 'User')) {
            $object->setUser($data->{'User'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getArgs()) {
            $values = [];
            foreach ($object->getArgs() as $value) {
                $values[] = $value;
            }
            $data->{'Args'} = $values;
        }
        if (null !== $object->getCommand()) {
            $values_1 = [];
            foreach ($object->getCommand() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Command'} = $values_1;
        }
        if (null !== $object->getDNSConfig()) {
            $data->{'DNSConfig'} = $this->serializer->serialize($object->getDNSConfig(), 'raw', $context);
        }
        if (null !== $object->getDir()) {
            $data->{'Dir'} = $object->getDir();
        }
        if (null !== $object->getEnv()) {
            $values_2 = [];
            foreach ($object->getEnv() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'Env'} = $values_2;
        }
        if (null !== $object->getGroups()) {
            $values_3 = [];
            foreach ($object->getGroups() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'Groups'} = $values_3;
        }
        if (null !== $object->getHealthCheck()) {
            $data->{'HealthCheck'} = $this->serializer->serialize($object->getHealthCheck(), 'raw', $context);
        }
        if (null !== $object->getHostname()) {
            $data->{'Hostname'} = $object->getHostname();
        }
        if (null !== $object->getHosts()) {
            $values_4 = [];
            foreach ($object->getHosts() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'Hosts'} = $values_4;
        }
        if (null !== $object->getImage()) {
            $data->{'Image'} = $object->getImage();
        }
        if (null !== $object->getLabels()) {
            $values_5 = new \stdClass();
            foreach ($object->getLabels() as $key => $value_5) {
                $values_5->{$key} = $value_5;
            }
            $data->{'Labels'} = $values_5;
        }
        if (null !== $object->getMounts()) {
            $values_6 = [];
            foreach ($object->getMounts() as $value_6) {
                $values_6[] = $this->serializer->serialize($value_6, 'raw', $context);
            }
            $data->{'Mounts'} = $values_6;
        }
        if (null !== $object->getOpenStdin()) {
            $data->{'OpenStdin'} = $object->getOpenStdin();
        }
        if (null !== $object->getReadOnly()) {
            $data->{'ReadOnly'} = $object->getReadOnly();
        }
        if (null !== $object->getSecrets()) {
            $values_7 = [];
            foreach ($object->getSecrets() as $value_7) {
                $values_7[] = $this->serializer->serialize($value_7, 'raw', $context);
            }
            $data->{'Secrets'} = $values_7;
        }
        if (null !== $object->getStopGracePeriod()) {
            $data->{'StopGracePeriod'} = $object->getStopGracePeriod();
        }
        if (null !== $object->getTTY()) {
            $data->{'TTY'} = $object->getTTY();
        }
        if (null !== $object->getUser()) {
            $data->{'User'} = $object->getUser();
        }

        return $data;
    }
}
