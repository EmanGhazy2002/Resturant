<?php

namespace App\Http\Controllers;
use App\Models\foodchef;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Food;
use App\Models\Order;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function user(){
         $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id){
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function foodmenu(){
        $data=food::all();
        return view("admin.foodmenu",compact("data"));
    }

    public function updateview($id){
        $data=food::find($id);
        return view("admin.updateview" ,compact("data"));
    }

    public function update($id,Request $request){
        $data=food::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            if ($image->isValid()) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $image->move('foodimage',$imagename);
                $data->image=$imagename;
            } else {echo "image error"; }
        } else { echo "image error";}
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();

    }


    public function upload(Request $request){
       $data= new food;
        if ($request->hasFile('image')) {
        $image = $request->file('image');

            if ($image->isValid()) {
              $imagename = time() . '.' . $image->getClientOriginalExtension();
               $image->move('foodimage',$imagename);
               $data->image=$imagename;
            } else {echo "image error"; }
        } else { echo "image error";}
         $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();



    }

    public function reservation(Request $request){
        $data= new reservation;
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            if ($image->isValid()) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $image->move('foodimage',$imagename);
                $data->image=$imagename;
            } else {echo "image error"; }
        } else { echo "image error";}

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
        if (Auth::id()) {
            $data = reservation::all();
            return view("admin.adminreservation", compact("data"));
        }
    else{
        return redirect('login');
    }}

    public function viewchef(){
        $data=  foodchef::all();
        return view("admin.adminchef",compact("data"));
    }


    public function uploadchef(Request $request){
        $data= new foodchef;
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            if ($image->isValid()) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $image->move('chefimage',$imagename);
                $data->image=$imagename;
            } else {echo "image error"; }
        } else { echo "image error";}
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();



    }

    public function updatechef($id){
        $data=foodchef::find($id);
        return view("admin.updatechef",compact("data"));


    }


    public function updatefoodchef($id,Request $request){
        $data=foodchef::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            if ($image->isValid()) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $image->move('chefimage',$imagename);
                $data->image=$imagename;
            } else {echo "image error"; }
        } else { echo "image error";}
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        return redirect()->back();

    }


    public function deletechef($id){
        $data=foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orders(){
        $data=order::all();
        return view('admin.orders',compact('data'));
    }
    public function search(Request $request){
        $search=$request->search;
        $data=order::where('name','Like','%'.$search.'%')->orwhere('foodname','Like','%'.$search.'%')->get();
        return view('admin.orders',compact('data'));
    }

}
