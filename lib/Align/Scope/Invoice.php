<?php
use aligncommerce\lib\Align\HttpClient\ApiRequest as Request;
use aligncommerce\lib\Align\Config\Apiconfig as Config;

class Invoice extends Request
{
  public $request;

  public static function retrieve($id=null)
  {
    $request = new Request();

    if(!is_null($id))
    {
      $response = $request->get('invoice/retrieve/' . $id);
    }
    else
    {
      $response = $request->all('invoice'); 
    }

    return $response;
  }

  public static function create($data)
  {
     $request = new Request();
     $response = $request->post('invoice/create/',$data);
     return $response;
  }

  public static function update($id,$data)
  {
     $request = new Request();
     $response = $request->put('invoice/update/'.$id,$data);
     return $response;
  }

}
