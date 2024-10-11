<?php

namespace Config;

class Config
{
    private function __construct()
    {

    }

    public static function getRoutes()
    {
        return [
            "GET" => [
                [
                    "uri" => "",
                    "controller" => "\\Controller\\HomeController",
                    "action" => "index",
                    "params" => "",
                ], [
                    "uri" => "qqq/www",
                    "controller" => "\\Controller\\HomeController",
                    "action" => "qqq",
                    "params" => "",
                ], [
                    "uri" => "qqq/www/(.+)/(.+)/(.+)",
                    "controller" => "\\Controller\\ParController",
                    "action" => "par",
                    "params" => "$1/$2/$3",
                ]
            ],
        ];
    }
}