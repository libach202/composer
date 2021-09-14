<?php
/**
 *   #----------------------------------------------------------#
 *   # * @Company       : photodesign.vn.                       #
 *   # * @Project       : composer                               #
 *   # * @File          : index.php                              #
 *   # * @Developer     : taint.ict@gmail.com                   #
 *   # * @IDE           : PhpStorm                              #
 *   # * @Copyright     : 2021 - NOW                            #
 *   #----------------------------------------------------------#
 *
 *                                        CHANGE HISTORY
 *   ---------------------------------------------------------------------------------------------
 *   |   DATE         | DEVELOPER             | DESCRIPTION                                       |
 *   ---------------------------------------------------------------------------------------------
 *   | 9/14/2021      | taint.ict@gmail.com   | First creation.                                   |
 *   --------------------------------------------------------------------------------------------
 *
 *
 */
require_once ('vendor/autoload.php');
use Test\Math\Oporator;
$o = new Oporator();
$o->square(10);
echo "\n" . total(4,5);
