<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/9/5
 * Time: 13:48
 */
include "./Registry.php";

use Registry\RandFactory;
use Registry\Register;
Register::set('rand', RandFactory::factory());
$object = Register::get('rand');
print_r($object);
