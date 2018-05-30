<?php

if (isset($_SERVER['APP_ENV'])) {
    switch ($_SERVER['APP_ENV']) {
        case 'prod':
            defined('YII_DEBUG') or define('YII_DEBUG', false);
            defined('YII_ENV') or define('YII_ENV', 'prod');
            break;
        case 'test':
            defined('YII_DEBUG') or define('YII_DEBUG', false);
            defined('YII_ENV') or define('YII_ENV', 'test');
            break;
        case 'dev':
            defined('YII_DEBUG') or define('YII_DEBUG', true);
            defined('YII_ENV') or define('YII_ENV', 'dev');
            break;
        default:
            defined('YII_DEBUG') or define('YII_DEBUG', true);
            defined('YII_ENV') or define('YII_ENV', 'dev');
            break;
    }
} else {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');
}

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../../common/config/bootstrap.php';
require __DIR__ . '/../config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/' . YII_ENV . '/main.php',
    require __DIR__ . '/../../common/config/' . YII_ENV . '/main-local.php',
    require __DIR__ . '/../config/' . YII_ENV . '/main.php',
    require __DIR__ . '/../config/' . YII_ENV . '/main-local.php'
);

(new yii\web\Application($config))->run();
