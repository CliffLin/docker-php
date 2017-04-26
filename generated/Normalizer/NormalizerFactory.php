<?php

namespace Docker\API\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers   = [];
        $normalizers[] = new \Joli\Jane\Runtime\Normalizer\ReferenceNormalizer();
        $normalizers[] = new \Joli\Jane\Runtime\Normalizer\ArrayDenormalizer();
        $normalizers[] = new AuthConfigNormalizer();
        $normalizers[] = new BuildInfoNormalizer();
        $normalizers[] = new ClusterInfoNormalizer();
        $normalizers[] = new ConfigNormalizer();
        $normalizers[] = new VolumesNormalizer();
        $normalizers[] = new CreateImageInfoNormalizer();
        $normalizers[] = new DeviceMappingNormalizer();
        $normalizers[] = new EndpointPortConfigNormalizer();
        $normalizers[] = new EndpointSettingsNormalizer();
        $normalizers[] = new IPAMConfigNormalizer();
        $normalizers[] = new EndpointSpecNormalizer();
        $normalizers[] = new ErrorDetailNormalizer();
        $normalizers[] = new ErrorResponseNormalizer();
        $normalizers[] = new GraphDriverNormalizer();
        $normalizers[] = new HealthConfigNormalizer();
        $normalizers[] = new IPAMNormalizer();
        $normalizers[] = new IdResponseNormalizer();
        $normalizers[] = new ImageNormalizer();
        $normalizers[] = new RootFSNormalizer();
        $normalizers[] = new ImageDeleteResponseNormalizer();
        $normalizers[] = new ImageSummaryNormalizer();
        $normalizers[] = new MountNormalizer();
        $normalizers[] = new BindOptionsNormalizer();
        $normalizers[] = new TmpfsOptionsNormalizer();
        $normalizers[] = new VolumeOptionsNormalizer();
        $normalizers[] = new DriverConfigNormalizer();
        $normalizers[] = new MountPointNormalizer();
        $normalizers[] = new NetworkNormalizer();
        $normalizers[] = new NetworkConfigNormalizer();
        $normalizers[] = new NetworkContainerNormalizer();
        $normalizers[] = new NodeNormalizer();
        $normalizers[] = new DescriptionNormalizer();
        $normalizers[] = new EngineNormalizer();
        $normalizers[] = new PlatformNormalizer();
        $normalizers[] = new ResourcesNormalizer();
        $normalizers[] = new NodeSpecNormalizer();
        $normalizers[] = new ObjectVersionNormalizer();
        $normalizers[] = new PluginNormalizer();
        $normalizers[] = new ConfigNormalizer();
        $normalizers[] = new ArgsNormalizer();
        $normalizers[] = new InterfacedNormalizer();
        $normalizers[] = new LinuxNormalizer();
        $normalizers[] = new NetworkNormalizer();
        $normalizers[] = new UserNormalizer();
        $normalizers[] = new RootfsNormalizer();
        $normalizers[] = new SettingsNormalizer();
        $normalizers[] = new PluginDeviceNormalizer();
        $normalizers[] = new PluginEnvNormalizer();
        $normalizers[] = new PluginInterfaceTypeNormalizer();
        $normalizers[] = new PluginMountNormalizer();
        $normalizers[] = new PortNormalizer();
        $normalizers[] = new ProcessConfigNormalizer();
        $normalizers[] = new ProgressDetailNormalizer();
        $normalizers[] = new PushImageInfoNormalizer();
        $normalizers[] = new ResourcesNormalizer();
        $normalizers[] = new RestartPolicyNormalizer();
        $normalizers[] = new SecretNormalizer();
        $normalizers[] = new SecretSpecNormalizer();
        $normalizers[] = new ServiceNormalizer();
        $normalizers[] = new EndpointNormalizer();
        $normalizers[] = new UpdateStatusNormalizer();
        $normalizers[] = new ServiceUpdateResponseNormalizer();
        $normalizers[] = new SwarmSpecNormalizer();
        $normalizers[] = new CAConfigNormalizer();
        $normalizers[] = new DispatcherNormalizer();
        $normalizers[] = new EncryptionConfigNormalizer();
        $normalizers[] = new OrchestrationNormalizer();
        $normalizers[] = new RaftNormalizer();
        $normalizers[] = new TaskDefaultsNormalizer();
        $normalizers[] = new LogDriverNormalizer();
        $normalizers[] = new TaskNormalizer();
        $normalizers[] = new StatusNormalizer();
        $normalizers[] = new ContainerStatusNormalizer();
        $normalizers[] = new TaskSpecNormalizer();
        $normalizers[] = new ContainerSpecNormalizer();
        $normalizers[] = new DNSConfigNormalizer();
        $normalizers[] = new LogDriverNormalizer();
        $normalizers[] = new PlacementNormalizer();
        $normalizers[] = new ResourcesNormalizer();
        $normalizers[] = new LimitsNormalizer();
        $normalizers[] = new RestartPolicyNormalizer();
        $normalizers[] = new ThrottleDeviceNormalizer();
        $normalizers[] = new VolumeNormalizer();
        $normalizers[] = new UsageDataNormalizer();

        return $normalizers;
    }
}
