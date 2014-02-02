<?php
/**
 * @link      https://github.com/index0h/yii-phar
 * @copyright Copyright (c) 2014 Roman Levishchenko <index.0h@gmail.com>
 * @license   https://raw.github.com/index0h/yii-phar/master/LICENSE
 */

namespace index0h\yii\phar\iterators;

/**
 * Iterator of files, that set as array.
 *
 * @author Roman Levishchenko <index.0h@gmail.com>
 */
class FileIterator extends \ArrayIterator
{
    /**
     * @return string
     */
    public function getRelativePath()
    {
        return basename($this->current());
    }
}