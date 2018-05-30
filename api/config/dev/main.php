<?php
$params = array_merge(
    require __DIR__ . '/../../../common/config/' . YII_ENV . '/params.php',
    require __DIR__ . '/../../../common/config/' . YII_ENV . '/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(dirname(__DIR__)),
    'controllerNamespace' => 'api\controllers',
    'bootstrap' => ['log'],
    'defaultRoute' => 'index/index/index',
    'modules' => [
        'index' => [
            'class' => 'api\modules\index\Module',
        ],
        'test' => [
            'class' => 'api\modules\test\Module',
        ],
    ],
    'components' => [
//        'request' => [
//            'csrfParam' => '_csrf-api',
//        ],
//        'user' => [
//            'identityClass' => 'common\models\User',
//            'enableAutoLogin' => true,
//            'identityCookie' => ['name' => '_identity-api', 'httpOnly' => true],
//        ],
//        'session' => [
//            // this is the name of the session cookie used for login on the backend
//            'name' => 'advanced-api',
//        ],
//        'log' => [
//            'traceLevel' => YII_DEBUG ? 3 : 0,
//            'targets' => [
//                [
//                    'class' => 'yii\log\FileTarget',
//                    'levels' => ['error', 'warning'],
//                ],
//            ],
//        ],
//        'errorHandler' => [
//            'errorAction' => 'site/error',
//        ],
//        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
//        */
    ],
    'params' => $params,
];
