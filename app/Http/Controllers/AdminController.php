<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;

class AdminController extends Controller
{
    public function user(){
        $users=User::all();
        return view("admin.user",compact('users'));
    }
    public function delete($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function foodmenu(){
      
        $data=Food::all();
        return view("admin.foodmenu",compact('data'));
    }

    public function deletemenu($id){
        $data=Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id){
        $data=Food::find($id);
        return view('admin.updateview',compact('data'));
    }
    public function update(Request $request ,$id){
        $data=Food::find($id);

        $image=$request->image;//'image from the input name image in foodmenu'
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();

    }
    public function upload(Request $request){
       $data=new Food;

       $image=$request->image;//'image from the input name image in foodmenu'
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->image->move('foodimage',$imagename);
       $data->image=$imagename;
       $data->title=$request->title;
       $data->price=$request->price;
       $data->description=$request->description;
       $data->save();
       return redirect()->back();
    }
    public function reservation(Request $request){
       $data=new Reservation; 

       $data->name=$request->name;
       $data->email=$request->email;
       $data->phone=$request->phone;
       $data->guest=$request->guest;
       $data->date=$request->date;
       $data->time=$request->time;
       $data->message=$request->message;
       $data->save();
       return redirect()->back();

    }
    public function viewreservation(){
        $data=Reservation::all();
        return view('admin.reservation',compact('data'));
    }
    public function viewchefs(){
        $data=Foodchef::all();
        return view('admin.adminchefs',compact('data'));
    }
    public function uploadchef(Request $request){
        $data=new Foodchef;

        $image=$request->image;//'image from the input name image in foodmenu'
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();
    }
    public function updatechef($id){
        $data=Foodchef::find($id);
        return view('admin.updatechef',compact('data'));
    }

    public function updatefoodchef(Request $request ,$id){
        $data=Foodchef::find($id);

        $image=$request->image;//'image from the input name image in foodmenu'

        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('chefimage',$imagename);
            $data->image=$imagename;
        }
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();
    }
    public function deletechef($id){
        $data=Foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }
}
