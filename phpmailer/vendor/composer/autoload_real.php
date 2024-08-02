<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit91a5b77125cf9ef33c1367621ed8e016
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit91a5b77125cf9ef33c1367621ed8e016', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit91a5b77125cf9ef33c1367621ed8e016', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit91a5b77125cf9ef33c1367621ed8e016::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
