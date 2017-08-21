# PHP App Deployment (AWS)

An example of how an simple PHP App easily can be distributed at AWS using Docker containers under the Continuous Integration/Delivery ([CircleCI](https://circleci.com)) principle.

## Prerequisites

This example utilizes sensitive AWS and Docker data that you may not want to make public. To accomplish that, we have to setup environment variable values at CircleCI with following key names:

```
AWS_ACCESS_KEY_ID
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

## Techniques

* [Docker](https://www.docker.com/)
* [CircleCI](https://circleci.com/)
* [AWS Elastic Beanstalk](https://aws.amazon.com/elasticbeanstalk/)
