<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 10.11.2014
 * Time: 11:41
 */
require_once('Framework/Classes/View/StandardView.php');
require_once('Framework/Classes/Utility/Autoloader.php');
spl_autoload_register('MB\Cloud\Framework\Classes\Utility\Autoloader::autoloadVendorClasses');

$db = new \MB\Classes\Controller\Database();
$db->connectDatabase();

 $view = new \Framework\Classes\View\StandardView();
 $view->render('Form');

