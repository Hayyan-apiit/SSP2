<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\store;

use App\Models\order;

use App\Models\cart;

use App\Models\comment;

class HomeController extends Controller
{
    

    public function index()
    {
        $store = Store::all();
        $cart = Cart::where('user_id', Auth::id())->get();
        return view('home.user', compact('store','cart'));
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
    
        if ($usertype == '1') 
        {
            $total_store=store::all()->count();

            $total_order=order::all()->count();

            $total_user=user::all()->count();

            $total_complain=comment::all()->count();

            $order=order::all();

            $total_revenue=0;

            foreach($order as $order)
            {
                $total_revenue=$total_revenue + $order->price;

            }

            $total_delivered=order::where('delivery_status', '=' , 'delivered')->get()->count();


            $total_nodelivered=order::where('delivery_status', '=' , 'processing')->get()->count();


            $total_cancel=order::where('delivery_status', '=' , 'cancelled order')->get()->count();



            return view('admin.home',compact('total_store','total_order','total_user','total_revenue','total_delivered','total_nodelivered','total_complain','total_cancel'));
        } else {
         
            $cart = Cart::where('user_id', Auth::id())->get();
            return view('home.user', compact('cart'));
        }
    }
    
}
