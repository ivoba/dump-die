<?php

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dump_die')) {
  /**
   * @author Ivo Bathke <ivo.bathke@gmail.com>
   */
   function dump_die($var, ...$moreVars)
   {
// we cant simply use dump($var);exit;
// since this will cause wrong file & line with symfony
       VarDumper::dump($var);

       foreach ($moreVars as $var) {
           VarDumper::dump($var);
       }

       exit;
   }
}
