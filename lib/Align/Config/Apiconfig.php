<?php
namespace aligncommerce\lib\Align\Config;

abstract class Apiconfig
{
  public static $authBasicUsername  = 'angel@aligncommerce.com'; 
  public static $authBasicPassword  = 'password123';
  public static $clientId           = '5d8a919b6022812a0be983bc6cd7c8f8';
  public static $secretKey          = '5672b505d051580fccfbd74b655a9402';
  public static $apiUrl             =  'http://api.aligncommerce.com/';  

  public static function getBasicAuthUsername()
  {
    return self::$authBasicUsername;
  }

    public static function getBasicAuthPassword()
  {
    return self::$authBasicPassword;
  }

  public static function getClientId()
  {
    return self::$clientId;
  }

}
