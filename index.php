<?php
/**
 * Created by PhpStorm.
 * User: daidv
 * Date: 12/20/2017
 * Time: 11:33 PM
 */

$user = new App\Models\User();
$user->setNameUser('dai');
var_dump($user->getNameUser());