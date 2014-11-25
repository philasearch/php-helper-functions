<?php

if ( !function_exists('dd') )
{
    /**
     *  Dumps the passed variable and dies
     *
     *  @param mixed
     *
     *  @return void
     */

    function dd ( $var )
    {
        die(var_dump($var));
    }
}
