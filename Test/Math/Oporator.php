<?php
/**
 *   #----------------------------------------------------------#
 *   # * @Company       : photodesign.vn.                       #
 *   # * @Project       : test                               #
 *   # * @File          : Oporator.php                              #
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

namespace Test\Math;
use Test\Constant;
class Oporator
{
    public function square($r) {
        return Constant::PI * $r *$r;
    }
}