<?php

/*
 * This file is part of the SeferovAwsBundle package.
 *
 * (c) Farhad Safarov <http://ferhad.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Seferov\AwsBundle\Services\Helper;

/**
 * Services Helper.
 *
 * @author Farhad Safarov <http://ferhad.in>
 */
class ServicesHelper
{
    /**
     * Converts camelcase strings into underscore ones
     *
     * @param string $string
     *
     * @return string
     */
    public static function camelcaseToUnderscore($string)
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $string));
    }
}
