<?php

namespace MB\Cloud\Framework\Classes\Utility;

class Autoloader {

    static public function autoloadVendorClasses($fullyQualifiedClassName) {

        $shortenedFullyQualifiedClassName = ltrim($fullyQualifiedClassName, '\\');
        $fileName = 'Vendors' . DIRECTORY_SEPARATOR;

        $namespace = '';
        if (strrpos($shortenedFullyQualifiedClassName, '\\')) {
            $lastNsPos = strrpos($shortenedFullyQualifiedClassName, '\\');
            $namespace = substr($shortenedFullyQualifiedClassName, 0, $lastNsPos);
            $className = substr($shortenedFullyQualifiedClassName, $lastNsPos + 1);
            $fileName .= str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        }

        $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

        if (file_exists($fileName)) {

            require_once $fileName;
        } else {

            Autoloader::autoloadFrameworkClasses($fullyQualifiedClassName);
        }

    }

    static public function autoloadFrameworkClasses($fullyQualifiedClassName) {

        $shortenedFullyQualifiedClassName = ltrim($fullyQualifiedClassName, '\\');
        $fileName = 'Framework'. DIRECTORY_SEPARATOR;
        $namespace = '';

        if (strrpos($shortenedFullyQualifiedClassName, '\\')) {
            $lastNsPos = strrpos($shortenedFullyQualifiedClassName, '\\');
            $namespace = substr($shortenedFullyQualifiedClassName, 0, $lastNsPos);
            $className = substr($shortenedFullyQualifiedClassName, $lastNsPos + 1);
            $fileName .= str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        }
       
        $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

            require_once $fileName;
        
    }

}
