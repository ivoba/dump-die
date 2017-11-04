<?php

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dump_die')) {
  /**
   * @author Ivo Bathke <ivo.bathke@gmail.com>
   */
   function dump_die($var, ...$moreVars)
   {
       VarDumper::dump($var);

       foreach ($moreVars as $var) {
           VarDumper::dump($var);
       }

       exit;
   }
}

// shortcuts

if (!function_exists('d')) {
   /**
    * @author Ivo Bathke <ivo.bathke@gmail.com>
    */
   function d($var, ...$moreVars)
   {
       VarDumper::dump($var);

       foreach ($moreVars as $var) {
           VarDumper::dump($var);
       }

       if (1 < func_num_args()) {
           return func_get_args();
       }

       return $var;
   }
}

if (!function_exists('dd')) {
  /**
   * @author Ivo Bathke <ivo.bathke@gmail.com>
   */
   function dd($var, ...$moreVars)
   {
       VarDumper::dump($var);

       foreach ($moreVars as $var) {
           VarDumper::dump($var);
       }

       exit;
   }
}
