<?php

/*
 * This file is part of the SeferovAwsBundle package.
 *
 * (c) Farhad Safarov <http://ferhad.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Tests for various services.
 *
 * @author Farhad Safarov <http://ferhad.in>
 */
class ServicesTest extends WebTestCase
{
    public function testS3()
    {
        $client = static::createClient();

        $s3 = $client->getContainer()->get('aws.s3');
        $this->assertEquals('Aws\S3\S3Client', get_class($s3));
    }

    public function testSqs()
    {
        $client = static::createClient();

        $sqs = $client->getContainer()->get('aws.sqs');
        $this->assertEquals('Aws\Sqs\SqsClient', get_class($sqs));
    }

    /**
     * @expectedException \Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException
     */
    public function testNonExistentService()
    {
        $client = static::createClient();

        $client->getContainer()->get('aws.nonexistentservice');
    }
}
