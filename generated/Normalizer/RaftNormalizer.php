<?php

namespace Docker\API\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class RaftNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\Model\\Raft') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\Model\Raft) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Docker\API\Model\Raft();
        if (property_exists($data, 'ElectionTick')) {
            $object->setElectionTick($data->{'ElectionTick'});
        }
        if (property_exists($data, 'HeartbeatTick')) {
            $object->setHeartbeatTick($data->{'HeartbeatTick'});
        }
        if (property_exists($data, 'KeepOldSnapshots')) {
            $object->setKeepOldSnapshots($data->{'KeepOldSnapshots'});
        }
        if (property_exists($data, 'LogEntriesForSlowFollowers')) {
            $object->setLogEntriesForSlowFollowers($data->{'LogEntriesForSlowFollowers'});
        }
        if (property_exists($data, 'SnapshotInterval')) {
            $object->setSnapshotInterval($data->{'SnapshotInterval'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getElectionTick()) {
            $data->{'ElectionTick'} = $object->getElectionTick();
        }
        if (null !== $object->getHeartbeatTick()) {
            $data->{'HeartbeatTick'} = $object->getHeartbeatTick();
        }
        if (null !== $object->getKeepOldSnapshots()) {
            $data->{'KeepOldSnapshots'} = $object->getKeepOldSnapshots();
        }
        if (null !== $object->getLogEntriesForSlowFollowers()) {
            $data->{'LogEntriesForSlowFollowers'} = $object->getLogEntriesForSlowFollowers();
        }
        if (null !== $object->getSnapshotInterval()) {
            $data->{'SnapshotInterval'} = $object->getSnapshotInterval();
        }

        return $data;
    }
}