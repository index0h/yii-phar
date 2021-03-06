<?php
/**
 * @link      https://github.com/index0h/yii2-phar
 * @copyright Copyright (c) 2014 Roman Levishchenko <index.0h@gmail.com>
 * @license   https://raw.github.com/index0h/yii2-phar/master/LICENSE
 */

defined('ROOT_PATH') || define('ROOT_PATH', implode(DIRECTORY_SEPARATOR, [__DIR__, '..']));

defined('YII_DEBUG') || define('YII_DEBUG', true);
defined('YII_ENV') || define('YII_ENV', 'dev');

require_once implode(DIRECTORY_SEPARATOR, [ROOT_PATH, 'vendor', 'yiisoft', 'yii2', 'Yii.php']);

Yii::setAlias('@tests', __DIR__);
Yii::setAlias('@runtime', __DIR__ . DIRECTORY_SEPARATOR . '_runtime');
Yii::setAlias('@tests/_runtime', __DIR__ . DIRECTORY_SEPARATOR . '_runtime');
