<?php
class helper {
    public static function include(String $path, bool $fileInclude = false)
    {
        $root = 'sections/';
        $file = '/index.php';
        if ($fileInclude)
        {
            $file = '';
            $root = '';
        }

        include($root.$path.$file);
    }
}