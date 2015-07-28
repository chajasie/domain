<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.domainCheck');
    }

    public function domainCheck(Request $request){
         //Base URL
         $url = 'http://api.domain.hosttech.eu/api/call.cgi?s_login=supportvorort&s_pw=ju7Ghfrd&s_entity=1234'; //Testumgebung
         //$url = 'http://api.domain.hosttech.eu/api/call.cgi?s_login=w.mattar&s_pw=dex5hAAV';
          //Command check domain
          /*
          $command_checkDomain = '&command=CheckDomain&domain=';
          $domain = $request->get('domain');
          $response = file_get_contents($url . $command_checkDomain . $domain);
          $ckeckDomainProperty = responseHandler($response);
          var_dump($ckeckDomainProperty);
          return 0;

           //Command get user status (for domain prices)
          $command_userStatus = '&command=StatusUser';
          $response = file_get_contents($url . $command_userStatus);
          $userStatusProperty = responseHandler($response);


         return view('pages.domainCheck', ['domain' => $domain]);
         */


    }

      private function responseHandler($response){
        $obj = explode("\n", $response);
        $property = array();
        if($obj[0] == "[RESPONSE]"){
          for($i=1;$i<count($obj);$i++){
             if($obj[$i]!=""){
               if($obj[$i]=== "EOF"){
                  break; //End of Response
               }
               //Add Array Element
               $line = explode("=", $obj[$i]);
               $property[strtolower($line[0])] = $line[1];
             }
          }
        }
        return $property;
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
