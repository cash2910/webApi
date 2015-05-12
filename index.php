<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
require(__DIR__ . '/framework/Yii.php');

$config = [
    'id' => 'benchmark',
    'basePath' => __DIR__ . '/project',
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
        ],
    ],
];
$application = new yii\web\Application($config);
$application->run();
