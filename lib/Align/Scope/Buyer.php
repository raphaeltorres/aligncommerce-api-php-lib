<?php
use aligncommerce\lib\Align\HttpClient\ApiRequest as Request;
use aligncommerce\lib\Align\Config\Apiconfig as Config;

class Buyer extends Request
{
  public $request;

  public static function retrieve($id=null)
  {
    $request = new Request();

    if(!is_null($id))
    {
      $response = $request->get('buyer/retrieve/' . $id);
    }
    else
    {
      $response = $request->all('buyer'); 
    }

    return $response;
  }

  public static function create($data)
  {
     $request = new Request();
     $response = $request->post('buyer/create/',$data);
     return $response;
  }

  public static function update($id,$data)
  {
     $request = new Request();
     $response = $request->put('buyer/update/'.$id,$data);
     return $response;
  }

}
