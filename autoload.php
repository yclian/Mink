<?php

/*
 * This file is part of the Behat\Mink.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

define('BEHAT_MINK_PATH', __DIR__);

if (!class_exists('Behat\Mink\ClassLoader\UniversalClassLoader')) {
    require_once __DIR__ . '/src/Behat/Mink/ClassLoader/UniversalClassLoader.php';
}
use Behat\Mink\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Behat\Mink'        => __DIR__ . '/src',
    'Behat\SahiClient'  => __DIR__ . '/vendor/SahiClient/src',
    'Symfony\Component' => __DIR__ . '/vendor',
    'Buzz'              => __DIR__ . '/vendor/Buzz/lib',
));
$loader->register();

require_once __DIR__ . '/vendor/Goutte/goutte.phar';
