## Configuration

Parameters can be set for each services seperately. If not set, general parameters at the top will be applied.

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
```