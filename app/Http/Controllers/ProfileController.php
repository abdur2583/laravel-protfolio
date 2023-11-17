<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ProfileController extends Controller {
    function index( $id ) {
        //return "Hello World: {$id}";
        $name = "Donal Trump";
        $age = "75";
        $data = array(
            "name" => $name,
            "age"  => $age,
            "id"   => $id,
        );
        return $data;
    }
    function setCookie(){
        //Also make a cookie; name as `access_token` , value  as `123-XYZ` , minutes as 1, path as ‘/’, domain as $_SERVER[‘SERVER_NAME’], secure as false and httpOnly as true.
        $name = "access_token";
        $value = "123-XYZ";
        $minutes = "1";
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure = false;
        $httpOnly = true;
        return response("Cookie Set")->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}