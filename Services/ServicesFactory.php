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
     * @param  AWSCredentials            $AWSCredentials
     * @param $service
     * @return mixed
     * @throws \InvalidArgumentException
     */
    public function get(AWSCredentials $AWSCredentials, $service)
    {
        $service = strtolower($service);
        $aws = Aws::factory($AWSCredentials->getParameters($service));

        return $aws->get($service);
    }
}
