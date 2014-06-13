<?php

/*
 * This file is part of the SeferovAwsBundle package.
 *
 * (c) Farhad Safarov <http://ferhad.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Seferov\AwsBundle\Services;

use \Aws\Common\Aws;
use \Seferov\AwsBundle\Entity\AWSCredentials;

/**
 * Factory class that initiates an AWS service.
 *
 * @author Farhad Safarov <http://ferhad.in>
 */
class ServicesFactory
{
    /**
     * @var array
     */
    public static $AVAILABLE_SERVICES = array('s3', 'sqs');

    /**
     * @param $service
     * @param  AWSCredentials            $AWSCredentials
     * @return mixed
     * @throws \InvalidArgumentException
     */
    public function get(AWSCredentials $AWSCredentials, $service)
    {
        $service = strtolower($service);

        if (!in_array($service, self::$AVAILABLE_SERVICES)) {
            throw new \InvalidArgumentException($service.' is not a available as a AWS Bundle Service');
        }

        $aws = Aws::factory($AWSCredentials->getParameters($service));

        return $aws->get($service);
    }

    /**
     * @param  string  $service
     * @return Boolean
     */
    private function isValidServiceName($service)
    {
        return !in_array($service, self::$AVAILABLE_SERVICES);
    }
}
