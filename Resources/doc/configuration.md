## Configuration

Parameters can be set for each services seperately. If not set, general parameters at the top will be applied.

Available services: CloudFront, CloudSearch, CloudWatch, CloudWatchLogs, CognitoIdentity, CognitoSync, DynamoDb, Ec2, Emr, ElasticTranscoder, ElastiCache, Glacier, Redshift, Rds, Route53, Ses, Sns, Sqs, S3, Swf, SimpleDb, AutoScaling, CloudFormation, CloudTrail, DataPipeline, DirectConnect, ElasticBeanstalk, Iam, ImportExport, OpsWorks, Sts, StorageGateway, Support, ElasticLoadBalancing

``` yaml
seferov_aws:
    key: AWS_KEY
    secret: AWS_SECRET
    region: AWS_REGION
    services:
        s3:
            key: AWS_S3_KEY
            secret: AWS_S3_SECRET
            region: AWS_S3_REGION
        sqs:
            key: AWS_SQS_KEY
            secret: AWS_SQS_SECRET
            region: AWS_SQS_REGION
        ...
```
