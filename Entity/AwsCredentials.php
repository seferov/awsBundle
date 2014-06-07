<?php

/*
 * This file is part of the SeferovAwsBundle package.
 *
 * (c) Farhad Safarov <http://ferhad.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Seferov\AwsBundle\Entity;

/**
 * AWS Credentials entity.
 *
 * @author Farhad Safarov <http://ferhad.in>
 */
class AwsCredentials
{
    /**
     * @var array
     */
    protected static $parameters = array();

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->setParameters($parameters);
    }

    /**
     * @param array $parameters
     */
    public function setParameters(array $parameters)
    {
        self::$parameters = $parameters;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return self::$parameters;
    }
}
