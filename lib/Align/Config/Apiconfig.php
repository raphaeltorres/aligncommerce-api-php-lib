<?php
namespace aligncommerce\lib\Align\Config;

abstract class Apiconfig
{
  public static $authBasicUsername  = ''; 
  public static $authBasicPassword  = '';
  public static $clientId           = '';
  public static $secretKey          = '';
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
