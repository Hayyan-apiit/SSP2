<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\store;

use App\Models\cart;

use App\Models\order;

use App\Models\comment;

use Session;

use Stripe;


class pageController extends Controller
{
    public function user()
    {
        return view('home.user');
    }

    public function shop()
    {
        $store=store::paginate(8);
        $cart = Cart::where('user_id', Auth::id())->get();
        return view('home.shop',compact('store','cart'));
 
    }
    

    public function contact()
    {
        if (auth::check()) {
            // If user is authenticated
            $user = Auth::user();

            
            $cart = Cart::where('user_id', $user->id)->get();
            return view('home.contact', compact('cart', 'user'));
        } else {
            // If user is not authenticated
            return view('auth.login');
        }
    }


    public function add_contact(Request $request)
    {
        // Retrieve the authenticated user
        $user = Auth::user();
    
        // Check if the user is authenticated
        if ($user) {
            $comment = new Comment;
    
            // Associate the user_id with the Comment model
            $comment->user_id = $user->id;
    
            $comment->name = $request->name;
            $comment->phone = $request->phone;  
            $comment->email = $request->email;    
            $comment->subject = $request->subject;
            $comment->complain = $request->message;
    
            $comment->save();
    
            return redirect()->back();
        } 
    }
    
    







    

    public function about()
    {
        $cart = Cart::where('user_id', Auth::id())->get();
        return view('home.about',compact('cart'));
    }

    public function men()
    {
        $store = store::where('catagory', 'men')->paginate(8);
        $cart = Cart::where('user_id', Auth::id())->get();
        return view('home.men',compact('store','cart'));
    }

    public function women()
    {
        $store = store::where('catagory', 'women')->paginate(8);
        $cart = Cart::where('user_id', Auth::id())->get();
        return view('home.women',compact('store','cart'));
    }

    public function kid()
    {
        $store = store::where('catagory', 'boys')->paginate(8);
        $cart = Cart::where('user_id', Auth::id())->get();
        return view('home.kid',compact('store','cart'));
    }


    
    public function cart(Request $request,$id)
    {
        if(auth::id())
        {
            $user=Auth::user();

            $store=Store::find($id);

            $cart=new cart;

            $cart->name=$user->name;

            $cart->email=$user->email;

            $cart->phone=$user->phone;

            $cart->address=$user->address;

            $cart->user_id=$user->id;



            $cart->store_title=$store->title;

            if($store->discount_price!=null)
            {
                $cart->price=$store->discount_price * $request->quantity;
            }
            else
            {
                
                $cart->price=$store->price * $request->quantity;
            }

            $cart->image=$store->image;

            $cart->store_id=$store->id;

            $cart->quantity=$request->quantity;
        

            $cart->save();

            return redirect()->back();

        }
        else
        {
            return view('auth.login');

        }
    }


    public function show_cart()
    {
        if(Auth::user()->id)
        {
            $id = Auth::user()->id;
    
            // Corrected the usage of quotes in the where clause
            $cart = Cart::where('user_id', '=', $id)->get();
        
            return view('home.showcart', compact('cart'));

        }
        else
        {
            return view('auth.login');

        }
    }






    public function add_order()
    {
        $user=Auth::user();
        $userid=$user->id;
        $data=cart::where('user_id','=',$userid)->get();


        foreach($data as $data)
        {
            $order=new order;

            $order->name=$data->name;

            $order->email=$data->email;

            $order->phone=$data->phone;

            $order->address=$data->address;


/*

            $order->country=$request->country;

            $order->location=$request->location;

            $order->notes=$request->notes;

            $order->coupon=$request->coupon;
*/

            $order->user_id=$data->user_id;




            $order->store_title=$data->store_title;

            $order->quantity=$data->quantity;

            $order->price=$data->price;

            $order->image=$data->image;

            $order->store_id=$data->store_id;


            $order->payment_status='cash on delivery';

            $order->delivery_status='processing';

            $order->save();


            $cart_id=$data->id;

            $cart=cart::find($cart_id);

            $cart->delete();

            
        }

        return view('home.thankyou');
    }


/*
    public function thankyou()
    {
        return view('home.thankyou');
    }
*/

    public function store_details($id)
    {
        $store=store::find($id);
        $cart = Cart::where('user_id', Auth::id())->get();
        return view('home.store_details',compact('store','cart'));
    }

    public function remove_cart($id)
    {
        $cart=cart::find($id);

        $cart->delete();

        return redirect()->back();
    }


    
    public function stripe($totalprice)
    {
        return view('home.stripe', compact('totalprice'));
    }






    public function stripePost(Request $request,$totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Tanks for payment" 
        ]);

        $user=Auth::user();
        $userid=$user->id;
        $data=cart::where('user_id','=',$userid)->get();


        foreach($data as $data)
        {
            $order=new order;

            $order->name=$data->name;

            $order->email=$data->email;

            $order->phone=$data->phone;

            $order->address=$data->address;


/*

            $order->country=$request->country;

            $order->location=$request->location;

            $order->notes=$request->notes;

            $order->coupon=$request->coupon;
*/

            $order->user_id=$data->user_id;




            $order->store_title=$data->store_title;

            $order->quantity=$data->quantity;

            $order->price=$data->price;

            $order->image=$data->image;

            $order->store_id=$data->store_id;


            $order->payment_status='Paid';

            $order->delivery_status='processing';

            $order->save();


            $cart_id=$data->id;

            $cart=cart::find($cart_id);

            $cart->delete();

            
        }
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }






    public function show_userorder()
    {
        if(Auth::id())
        {
            $user=Auth::user();

            $userid=$user->id;

            $order=order::where('user_id','=',$userid)->get();

            return view('home.userorder',compact('order'));
        }

        else
        {
            return view('auth.login');

        }
    }





public function cancel_store($id)
{
    $order = Order::find($id);

    if (!$order) {
        // Handle case where order is not found
        return redirect()->back()->with('error', 'Order not found');
    }

    $order->delivery_status = 'cancelled order';
    $order->save();

    return redirect()->back()->with('success', 'Order cancelled successfully');
}






}


