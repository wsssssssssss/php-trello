<?php
namespace src\Controller;

class MasterController
{
    public static function render($page, $data=[])
    {
        extract($data);

        require_once( __ROOT__ . "/views/" . $page . ".php" );
    }
}

