<?php

namespace App\Http\Controllers;

use App\users_event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    }


    public function addMore()
    {
        return view("register");
    }


    public function addMorePost(Request $request)
    {
        $rules = [];


        foreach($request->input('fname') as $key => $value) {
            $rules["fname.{$key}"] = 'required';
        }
        foreach($request->input('lname') as $key => $value) {
            $rules["lname.{$key}"] = 'required';
        }
        foreach($request->input('phone') as $key => $value) {
            $rules["phone.{$key}"] = 'required';
        }
        foreach($request->input('email') as $key => $value) {
            $rules["email.{$key}"] = 'required';
        }
        foreach($request->input('gender') as $key => $value) {
            $rules["gender.{$key}"] = 'required';
        }
        foreach($request->input('age') as $key => $value) {
            $rules["age.{$key}"] = 'required';
        }
        foreach($request->input('link') as $key => $value) {
            $rules["link.{$key}"] = 'required';
        }
        //////////////////////////////////////////////

        foreach($request->input('optone') as $key => $value) {
            $rules["optone.{$key}"] = 'required';
        }
        foreach($request->input('opttwo') as $key => $value) {
            $rules["opttwo.{$key}"] = 'required';
        }
        foreach($request->input('optthree') as $key => $value) {
            $rules["optthree.{$key}"] = 'required';
        }
        foreach($request->input('price') as $key => $value) {
            $rules["price.{$key}"] = 'required';
        }


        $validator = Validator::make($request->all(), $rules);


        if ($validator->passes()) {
            $hostID=0;
            $flag=0;
            $i=0;
            foreach($request->input('fname') as $value) {
                $token = str_random(60);
                $data=users_event::create(['fname'=>$request['fname'][$i],'lname'=>$request['lname'][$i],'phone'=>$request['phone'][$i],'email'=>$request['email'][$i],'gender'=>$request['gender'][$i],'age'=>$request['age'][$i],'link'=>$request['link'][$i],'optone'=>$request['optone'][0],'opttwo'=>$request['opttwo'][0],'optthree'=>$request['optthree'][0],'price'=>$request['price'][0],'host'=>$hostID,'token'=>$token]);
                $i++;
                if($flag==0){
                    $hostID=$data->id;
                    $flag=1;
                }
            }

            return response()->json(['success'=>'done']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }

}
