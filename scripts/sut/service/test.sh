#!/usr/bin/env bash

MODULE_PATH=$DRUPAL_PATH/modules/bar

cp -R $SELF_PATH/service/bar $MODULE_PATH

# Generate services.
$DCG -d$MODULE_PATH d8:service:access-checker -a'{"name":"Bar","machine_name":"bar","applies_to":"bar","class":"BarAccessChecker"}'
$DCG -d$MODULE_PATH d8:service:breadcrumb-builder -a'{"name":"Bar","machine_name":"bar","class":"BarBreadcrumbBuilder"}'
$DCG -d$MODULE_PATH d8:service:custom -a'{"name":"Bar","machine_name":"bar", "service_name":"bar.example","class":"Example"}'
$DCG -d$MODULE_PATH d8:service:event-subscriber -a'{"name":"Bar","machine_name":"bar"}'
$DCG -d$MODULE_PATH d8:service:middleware -a'{"name":"Bar","machine_name":"bar"}'
$DCG -d$MODULE_PATH d8:service:param-converter -a'{"name":"Bar","machine_name":"bar","parameter_type":"example","class":"ExampleParamConverter"}'
$DCG -d$MODULE_PATH d8:service:route-subscriber -a'{"name":"Bar","machine_name":"bar"}'
$DCG -d$MODULE_PATH d8:service:twig-extension -a'{"name":"Bar","machine_name":"bar","class":"BarTwigExtension"}'

# Check code standards.
dcg_phpcs $MODULE_PATH

dcg_drush en bar
dcg_phpunit $MODULE_PATH/tests
dcg_drush pmu bar