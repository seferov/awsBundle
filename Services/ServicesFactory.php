<?php

/*
 * This file is part of the SeferovAwsBundle package.
 *
 * (c) Farhad Safarov <https://farhadsafarov.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Seferov\AwsBundle\Services;

class ServicesFactory
{
    /**
     * @return array
     */
    public static function getAvailableServices()
    {
        return array(
            'ACMPCA',
            'Ecr',
            'MediaStoreData',
            'Acm',
            'Ecs',
            'MediaTailor',
            'AlexaForBusiness',
            'Efs',
            'MigrationHub',
            'ElastiCache',
            'Mobile',
            'ApiGateway',
            'ElasticBeanstalk',
            'AppSync',
            'ElasticLoadBalancing',
            'Neptune',
            'ApplicationAutoScaling',
            'ElasticLoadBalancingV2',
            'OpsWorks',
            'ApplicationDiscoveryService',
            'ElasticTranscoder',
            'OpsWorksCM',
            'Appstream',
            'ElasticsearchService',
            'Organizations',
            'Athena',
            'Emr',
            'PI',
            'AutoScaling',
            'Pinpoint',
            'AutoScalingPlans',
            'Polly',
            'Batch',
            'FMS',
            'Pricing',
            'Budgets',
            'Firehose',
            'Rds',
            'Cloud9',
            'GameLift',
            'Redshift',
            'CloudDirectory',
            'Glacier',
            'Rekognition',
            'CloudFormation',
            'Glue',
            'ResourceGroups',
            'CloudFront',
            'Greengrass',
            'ResourceGroupsTaggingAPI',
            'CloudHSMV2',
            'GuardDuty',
            'Route53',
            'CloudHsm',
            'Route53Domains',
            'CloudSearch',
            'Health',
            'S3',
            'Iam',
            'SageMaker',
            'CloudTrail',
            'ImportExport',
            'SageMakerRuntime',
            'CloudWatch',
            'Inspector',
            'SecretsManager',
            'CloudWatchEvents',
            'IoT1ClickDevicesService',
            'ServerlessApplicationRepository',
            'CloudWatchLogs',
            'IoT1ClickProjects',
            'ServiceCatalog',
            'CodeBuild',
            'IoTAnalytics',
            'ServiceDiscovery',
            'CodeCommit',
            'IoTJobsDataPlane',
            'Ses',
            'CodeDeploy',
            'Iot',
            'Sfn',
            'CodePipeline',
            'IotDataPlane',
            'Shield',
            'CodeStar',
            'Kinesis',
            'CognitoIdentity',
            'KinesisAnalytics',
            'Sms',
            'CognitoIdentityProvider',
            'KinesisVideo',
            'SnowBall',
            'CognitoSync',
            'KinesisVideoArchivedMedia',
            'Sns',
            'Comprehend',
            'KinesisVideoMedia',
            'Sqs',
            'ConfigService',
            'Kms',
            'Ssm',
            'Connect',
            'Lambda',
            'StorageGateway',
            'CostExplorer',
            'LexModelBuildingService',
            'Sts',
            'CostandUsageReportService',
            'LexRuntimeService',
            'Support',
            'Lightsail',
            'Swf',
            'MQ',
            'TranscribeService',
            'DAX',
            'MTurk',
            'Translate',
            'DataPipeline',
            'MachineLearning',
            'Waf',
            'DatabaseMigrationService',
            'Macie',
            'WafRegional',
            'DeviceFarm',
            'MarketplaceCommerceAnalytics',
            'WorkDocs',
            'DirectConnect',
            'MarketplaceEntitlementService',
            'WorkMail',
            'DirectoryService',
            'MarketplaceMetering',
            'WorkSpaces',
            'DynamoDb',
            'MediaConvert',
            'XRay',
        );
    }
}
