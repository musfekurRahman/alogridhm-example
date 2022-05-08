<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdc7d730b5f6b9bc6951853ed93db6749
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

        spl_autoload_register(array('ComposerAutoloaderInitdc7d730b5f6b9bc6951853ed93db6749', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdc7d730b5f6b9bc6951853ed93db6749', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdc7d730b5f6b9bc6951853ed93db6749::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
