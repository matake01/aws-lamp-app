# LAMP App Deployment (AWS)

An example of how an PHP+MySQL App can be distributed with AWS using Docker containers under the Continuous Delivery ([CircleCI](https://circleci.com)) principle.

## Flow description

The project is based on the `circle.yml` file which initially builds a new version of the Docker image based on the `Dockerfile` in the root directory. Subsequently we're stepping through some simple tests to ensure that the application software behaves as expected.

If the new app version passes the tests, the new image version is pushed to [Docker Hub](https://hub.docker.com).

Now we are ready to initiate the AWS deployment. First we have to create a [AWS ECS Task Definition](http://docs.aws.amazon.com/AmazonECS/latest/developerguide/task_definitions.html) which describes our behaviors to be able to distribute the app. The Task Definition is represented in the `Dockerrun.aws.json.template` file.

Then we will finally copy the new version to AWS S3 based on the recent created definition as well as creating the new application version to [AWS Elastic Beanstalk](http://docs.aws.amazon.com/elasticbeanstalk/latest/dg/Welcome.html).

## Prerequisites

This example utilizes AWS and DOCKER information that you may don't want to public. You'll need to
configure a few CircleCI environment variables before the deploy script will work:

```
AWS_ACCESS_KEY_ID
AWS_ACCOUNT_ID
AWS_APPLICATION_NAME
AWS_EB_BUCKET_NAME
AWS_ENVIRONMENT_NAME
AWS_REGION
AWS_SECRET_ACCESS_KEY

DOCKER_EMAIL
DOCKER_ORGANISATION
DOCKER_PASS
DOCKER_REPOSITORY_NAME
DOCKER_USER
```

## Database Access

This example assumes that an [Amazon RDS](https://aws.amazon.com/rds/) storage already exists with following environment variables available:

```
RDS_HOSTNAME
RDS_PORT
RDS_DB_NAME
RDS_USERNAME
RDS_PASSWORD
```
