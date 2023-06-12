<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderdesc;
use App\Models\Address;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Cartcontroller extends Controller
{
    public function index()
    {
        if (session()->has('User_name') && session()->has('User_email')) {
            $results = DB::table('cart')
                ->join('product', 'product.p_id', '=', 'cart.pro_id')
                ->select('product.p_name', 'product.p_price', 'product.P_img', 'product.p_id', 'cart.quantity', 'cart_id')
                ->where('product.p_status', '=', 1)
                ->where('cart.status', '=', 1)
                ->where('cart.u_id', '=', session('User_id'))
                ->get();

            $data = compact('results');
            return view('cart')->with($data);
        } else {

            return view('layouts._login');
        }
    }

    public function incre_q($id)
    {
        $cartItem = Cart::find($id);
        $cartItem->quantity++;
        $cartItem->save();
        return redirect('/cart');
    }
    public function decre_q($id)
    {
        $cartItem = Cart::find($id);
        if ($cartItem->quantity == 1) {
            return redirect('/cart/remove/' . $cartItem->cart_id);
        }
        $cartItem->quantity--;
        $cartItem->save();
        return redirect('/cart');
    }
    public function remove_q($id)
    {
        Cart::find($id)->delete();
        return redirect('/cart');
    }







    public function Add_pro($id)
    {

        $cartItem = DB::table('cart')
            ->select('cart_id')
            ->where('cart.status', '=', 1)
            ->where('pro_id', '=', $id)
            ->first();

        if ($cartItem) {
            return redirect('/cart/increment/' . $cartItem->cart_id);
        } else {


            $res = DB::table('product')
                ->select('*')
                ->where('product.p_status', '=', 1)
                ->where('product.p_id', '=', $id)
                ->first();
            // dd($res);
            $cartd = new Cart;
            $cartd->quantity = 1;
            // $cartd->total = 1 * $res->p_price;
            $cartd->pro_id = $id;
            $cartd->u_id = session('User_id');
            // dd($cartd);
            $cartd->save();
            return redirect('/cart');
        }
    }







    public function confirm_order()
    {
        if (session()->has('User_name') && session()->has('User_email')) {

            $results = DB::table('cart')
                ->join('product', 'product.p_id', '=', 'cart.pro_id')
                ->select('product.p_name', 'product.p_price', 'product.p_id', 'cart.quantity')
                ->where('product.p_status', '=', 1)
                ->where('cart.status', '=', 1)
                ->where('cart.u_id', '=', session('User_id'))
                ->get();
            if ($results->count()) {

                $addr = DB::table('address')
                    ->select('u_address', 'a_id')
                    ->where('u_id', '=', session('User_id'))->get();

                $data = compact('results', 'addr');
                return view('checkout')->with($data);
            }
            return redirect('/cart');
        }
        return view('layouts._login');
    }



    public function pay_process(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required'
        ], [
            'address.required' => 'Please Provide Address of Delivery ',
        ]);

        $selected_add = $request->input('address');
        $amount = (session('total'));
        // print_r($amount);
        $request->session()->forget('total');
        $order_id = rand(1000, 9999) . time();

        $or = new order;
        $or->od_id = $order_id;
        $or->u_id = session('User_id');
        $or->a_id = $selected_add;
        $or->amount = $amount;
        $or->save();


        $pro = DB::table('cart')
            ->join('product', 'product.p_id', '=', 'cart.pro_id')
            ->select('product.p_name', 'product.p_price', 'product.p_id', 'cart.quantity')
            ->where('product.p_status', '=', 1)
            ->where('cart.status', '=', 1)
            ->where('cart.u_id', '=', session('User_id'))
            ->get();


        foreach ($pro as $product) {


            $or_desc = new  orderdesc;
            $or_desc->u_id = session('User_id');
            $or_desc->od_id = $order_id;
            $or_desc->p_id = $product->p_id;
            $or_desc->price = $product->p_price;
            $or_desc->quantity = $product->quantity;
            $or_desc->t_price = $product->p_price * $product->quantity;
            $or_desc->save();
        }


        DB::table('cart')->where('u_id', session('User_id'))->delete();



        return view('layouts._thanks');









        // $url = "https://sandbox.cashfree.com/pg/orders";

        // $headers = [
        //     'Content-Type: application/json',
        //     'x-api-version:2021-05-21',
        //     'X-Client-Id: TEST3678079caf8b36d3eadaf3e7a7708763', // add your client ID here
        //     'X-Client-Secret: TEST23415e755b3169ea3a0e4196e070727ed3269ffe' // add your secret key here
        // ];
        // $payload = [

        //     'order_id' => '484486',
        //     'order_amount' => '150',
        //     'order_currency' => 'INR',
        //     "customer_details" => [
        //         'customer_id' => "01231",
        //         'customer_name' => 'Aashish',
        //         'customer_email' => 'aashu27122001@gmail.com',
        //         'customer_phone' => '9669081918',
        //     ],
        //     'returnUrl' => 'http://127.0.0.1:8000/cart',
        // ];


        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));


        // $response = json_decode(curl_exec($ch), true);
        // curl_close($ch);
        // dd($response);
        // return redirect()->to($response['payment_link']);
    }
    public function success(Request $request)
    {
        // dd($request->all()); // PAYMENT STATUS RESPONSE
    }

    public function address_save(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|alpha|max:30',
            'lname' => 'required|alpha|max:30',
            's_add' => 'required|max:30',
            'v_add' => 'required|max:30',
            'd_add' => 'required|max:30',
            'p_code' => 'required|max:8|min:6',
            'c_phone' => 'required|min:10|numeric',
        ]);



        $Address = [
            'Name' => $request->input('fname') . ' '  . $request->input('lname'),
            'landmark' => $request->input('s_add'),
            'town' => $request->input('v_add'),
            'District' => $request->input('d_add'),
            'Postal_code' => $request->input('p_code'),
            'contact' => $request->input('c_phone'),
        ];
        $add = new Address;
        $add->u_address = json_encode($Address);
        $add->u_id = session('User_id');
        $add->save();
        return redirect('/checkout');
    }
}