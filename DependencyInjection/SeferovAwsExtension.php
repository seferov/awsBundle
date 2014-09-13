<?php

/*
 * This file is part of the SeferovAwsBundle package.
 *
 * (c) Farhad Safarov <http://ferhad.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Seferov\AwsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;
use Seferov\AwsBundle\Services\ServicesFactory;
use Seferov\AwsBundle\Services\Helper\ServicesHelper;

/**
 * SeferovAWSExtension
 *
 * @author Farhad Safarov <http://ferhad.in>
 */
class SeferovAwsExtension extends Extension
{
    const SERVICE_NAMESPACE = 'seferov_aws';

    /**
     * @param array            $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        foreach ($config as $key => $value) {
            if ($key == 'services') {
                foreach ($config['services'] as $sk => $sv) {
                    if (!array_key_exists('region', $sv) || !$sv['region'])
                        $sv['region'] = $config['region'];

                    $container->setParameter(self::SERVICE_NAMESPACE .'.'. $sk, $sv);
                }
                continue;
            }

            $container->setParameter(self::SERVICE_NAMESPACE .'.'. $key, $value);
        }

        foreach (ServicesFactory::$AVAILABLE_SERVICES as $service) {
            $serviceKey = ServicesHelper::camelcaseToUnderscore($service);
            if (!array_key_exists($serviceKey, $config['services'])) {
                $container->setParameter(self::SERVICE_NAMESPACE.'.' . $serviceKey, array(
                    'key' => $config['key'],
                    'secret' => $config['secret'],
                    'region' => $config['region']
                ));
            }
        }
    }
}
