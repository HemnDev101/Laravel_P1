<?php

namespace App\Http\Controllers;

use App\Models\ModelTest;
use App\Models\post;
use Illuminate\Http\Request;
 
class ExampleController extends Controller
{
    
//route paramaeter
    function routeParameter( $id   , $name   ){
        return view('shopper' , ['id' => $id , 'name'=>$name] ) ;
        }


            //http://127.0.0.1:8000/?user=1123&password=hemnpass QueryParameter
        function home () {
        $user  = request('user' ); 
        $password  = request('password' ); 
        
            return view('index' , ["user" => $user , "password" => $password]);
        }
        
        function home_seller () {
           
           $items =  ModelTest::all( ) ;

                return view('/home_seller' , ["items" => $items]  );
            }


            function seller($id){
                 
                     $items = post::where('userid' , $id)->get() ; 
                     $names =  ModelTest::where('id' , $id)->get("name") ;
                return view('seller' , ['items'=> $items ,'names'=> $names ]) ; 
            }
}
