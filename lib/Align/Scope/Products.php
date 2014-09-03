<?php
use aligncommerce\lib\Align\HttpClient\ApiRequest as Request;
use aligncommerce\lib\Align\Config\Apiconfig as Config;

class Products extends Request
{
  public $request;

  public static function retrieve($id=null)
  {
    $request = new Request();

    if(!is_null($id))
    {
      $response = $request->get('products/retrieve/' . $id);
    }
    else
    {
      $response = $request->all('products'); 
    }

    return $response;
  }

  public static function create($data)
  {
     $request = new Request();
     $response = $request->post('products/create/',$data);
     return $response;
  }

  public static function update($id,$data)
  {
     $request = new Request();
     $response = $request->put('products/update/'.$id,$data);
     return $response;
  }

}
