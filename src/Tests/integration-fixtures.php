<?php
return [
  [
    'answers' => [
      '<comment>Drupal 6</comment>',
      '<comment>Component</comment>',
      'MODULE.info',
      'Example',
      'example',
    ],
    'output' => [
      'Command: d6:component:module-info',
      '---------------------------------',
      'The following files have been created:',
      '- example.info',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      '<comment>Component</comment>',
      '<comment>Ctools plugin</comment>',
      'Access',
      'Example',
      'example',
    ],
    'output' => [
      'Command: d7:component:ctools-plugin:access',
      '------------------------------------------',
      'The following files have been created:',
      '- example.inc',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      '<comment>Component</comment>',
      '<comment>Ctools plugin</comment>',
      'Content type',
      'Example',
      'example',
    ],
    'output' => [
      'Command: d7:component:ctools-plugin:content-type',
      '------------------------------------------------',
      'The following files have been created:',
      '- example.inc',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      '<comment>Component</comment>',
      '<comment>Ctools plugin</comment>',
      'Relationship',
      'Example',
      'example',
    ],
    'output' => [
      'Command: d7:component:ctools-plugin:relationship',
      '------------------------------------------------',
      'The following files have been created:',
      '- example.inc',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      '<comment>Component</comment>',
      'MODULE.info',
      'Example',
      'example',
    ],
    'output' => [
      'Command: d7:component:module-info',
      '---------------------------------',
      'The following files have been created:',
      '- example.info',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      '<comment>Component</comment>',
      '<comment>Views plugin</comment>',
      'Argument default',
      'Example',
      'example',
      'Foo',
      'foo',
    ],
    'output' => [
      'Command: d7:component:views-plugin:argument-default',
      '---------------------------------------------------',
      'The following files have been created:',
      '- views_plugin_argument_foo.inc',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      '<comment>Component</comment>',
      'THEME.info',
      'Example',
      'example',
      'example',
      'example',
    ],
    'output' => [
      'Command: d7:component:theme-info',
      '--------------------------------',
      'The following files have been created:',
      '- example.info',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      '<comment>Component</comment>',
      'MODULE.install',
      'Example',
      'example',
    ],
    'output' => [
      'Command: d7:component:install',
      '-----------------------------',
      'The following files have been created:',
      '- example.install',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      '<comment>Component</comment>',
      'MODULE.js',
      'Example',
      'example',
    ],
    'output' => [
      'Command: d7:component:js',
      '------------------------',
      'The following files have been created:',
      '- example.js',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      '<comment>Component</comment>',
      'MODULE.module',
      'Example',
      'example',
    ],
    'output' => [
      'Command: d7:component:module-file',
      '---------------------------------',
      'The following files have been created:',
      '- example.module',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      '<comment>Component</comment>',
      // Test jumping on upper menu level.
      '..',
      '<comment>Component</comment>',
      'settings.php',
    ],
    'output' => [
      'Command: d7:component:settings.php',
      '----------------------------------',
      'The following files have been created:',
      '- settings.php',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      '<comment>Component</comment>',
      // Test jumping on upper menu level.
      '..',
      '<comment>Component</comment>',
      'template.php',
    ],
    'output' => [
      'Command: d7:component:template.php',
      '----------------------------------',
      'The following files have been created:',
      '- template.php',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      '<comment>Component</comment>',
      'MODULE.test',
      'Example',
      'example',
      'ExampleTestCase',
    ],
    'output' => [
      'Command: d7:component:test',
      '--------------------------',
      'The following files have been created:',
      '- example.test',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      'Module',
      'Example',
      'example',
    ],
    'output' => [
      'Command: d7:module',
      '------------------',
      'The following files have been created:',
      '- example/example.info',
      '- example/example.module',
      '- example/example.install',
      '- example/example.admin.inc',
      '- example/example.pages.inc',
      '- example/example.test',
      '- example/example.js',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 7</comment>',
      'Theme',
      'Example',
      'example',
    ],
    'output' => [
      'Command: d7:theme',
      '-----------------',
      'The following files and directories have been created:',
      '- example/example.info',
      '- example/template.php',
      '- example/css/example.css',
      '- example/js/example.js',
      '- example/templates',
      '- example/images',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 8</comment>',
      '<comment>Component</comment>',
      '<comment>Plugin</comment>',
      'Filter',
      'Example',
      'example',
    ],
    'output' => [
      'Command: d8:component:plugin:filter',
      '-----------------------------------',
      'The following files have been created:',
      '- Example.php',
    ],
  ],
  [
    'answers' => [
      '<comment>Drupal 8</comment>',
      'Module',
      'Example',
      'example',
    ],
    'output' => [
      'Command: d8:module',
      '------------------',
      'The following files have been created:',
      '- example/example.info.yml',
      '- example/example.module',
      '- example/example.install',
    ]
  ],
  [
    'answers' => [
      '<comment>Other</comment>',
      'Apache virtual host',
      'example.com',
    ],
    'output' => [
      'Command: apache-virtual-host',
      '----------------------------',
      'The following files have been created:',
      '- example.com.conf',
    ],
  ],
  [
    'answers' => [
      '<comment>Other</comment>',
      'DCG command',
      'custom:category:command',
      'example',
    ],
    'output' => [
      'Command: dcg-command',
      '--------------------',
      'The following files have been created:',
      '- custom/category/Command.php',
    ],
  ],
  [
    'answers' => [
      '<comment>Other</comment>',
      'Drush command',
      'Example',
      'example',
    ],
    'output' => [
      'Command: drush-command',
      '----------------------',
      'The following files have been created:',
      '- example.drush.inc',
    ],
  ],
  [
    'answers' => [
      '<comment>Other</comment>',
      'HTML page',
      'index.html',
    ],
    'output' => [
      'Command: html-page',
      '------------------',
      'The following files have been created:',
      '- index.html',
      '- css/main.css',
      '- js/main.js',
    ],
  ],
];