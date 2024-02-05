<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Garment;

use App\Models\store;

use App\Models\order;

use App\Models\comment;

use Notification;

use App\Notifications\SendEmailNotification;



class AdminController extends Controller
{
    public function dash()
    {
        return view('admin.home');
    }

    public function view_category()
    {
        $data=Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $data=new category;

        $data->catagory_name=$request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category added successfully');



    }

    public function delete_catagory($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category deleted successfully');
    }

    public function view_garment()
    {
        $category=category::all();
        return view('admin.garment',compact('category'));
    }

    public function add(Request $request)
    {
        $store=new store;

        $store->title=$request->title;

        $store->description=$request->description;

        $store->price=$request->price;

        $store->quantity=$request->quantity;

        $store->discount_price=$request->dis_price;

        $store->catagory=$request->category;



        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('add_garment',$imagename);

        $store->image=$imagename;



        $store->save();

        return redirect()->back()->with('message', 'Prodcut Added Successfully');

    }

    public function show_garment()
    {
        $store=store::all();
        return view('admin.showGarment',compact('store'));
    }

    public function delete_store($id)
    {
        $store=store::find($id);

        $store->delete();

        return redirect()->back()->with('message','Product deleted successfully');
    }

    public function update_store($id)
    {
        $store=store::find($id);

        $category=category::all();

        return view('admin.update_store', compact('store', 'category'));


    }

    public function update_confirm(Request $request,$id)
    {
        $store=store::find($id);

        $store->title=$request->title;

        $store->description=$request->description;

        $store->price=$request->price;

        $store->catagory=$request->category;

        $store->quantity=$request->quantity;



        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('add_garment',$imagename);

        $store->image=$imagename;

        $store->save();

        return back();

       

    }



    public function user()
    {
        return view('admin.user');
    }


    public function show_order()
    {
        $order=order::all();
        return view('admin.showorder',compact('order'));
    }

    public function delivered($id)
    {
        $order = Order::find($id);
    
        $order->delivery_status = "delivered";

        $order->payment_status = "Paid";
        $order->save();
    
        return redirect()->back();
    }

    public function send_email($id)
    {
        $order=order::find($id);
        return view('admin.email_info',compact('order'));
    }

    public function send_user_email(Request $request,$id)
    {
        $order=order::find($id);

        $details = [
            'greeting'=>$request->greeting,

            'heading'=>$request->heading,

            'body'=>$request->body,

            'button'=>$request->button,

            'url'=>$request->url,

            'close'=>$request->close,
        ];

        Notification::send($order,new SendEmailNotification($details));

        return redirect()->back();
    }


    public function searchdata(Request $request)
    {
        $searchText=$request->search;

        $order=order::where('name','LIKE' , "%%$searchText%")->orWhere('phone','LIKE' , "%%$searchText%")->orWhere('store_title','LIKE' , "%%$searchText%")->get();

        return view('admin.showorder',compact('order'));
    }





    public function complain()
    {
        $comment=comment::all();
        return view('admin.complain',compact('comment'));
    }
}
