<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5ec9f7fc94a3aabb8cb9d61d70344816
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

        spl_autoload_register(array('ComposerAutoloaderInit5ec9f7fc94a3aabb8cb9d61d70344816', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5ec9f7fc94a3aabb8cb9d61d70344816', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5ec9f7fc94a3aabb8cb9d61d70344816::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}