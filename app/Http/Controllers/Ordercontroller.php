<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orderdesc;

class Ordercontroller extends Controller
{
    public function index()
    {
        $results = DB::table('order')

            ->select('order.od_id', 'order.amount', 'order.status')

            ->where('order.u_id', '=', session('User_id'))
            ->get();
        $rest = DB::table('orderdesc')
            ->join('order', 'order.od_id', '=', 'orderdesc.od_id')
            ->join('product', 'product.p_id', '=', 'orderdesc.p_id')
            ->select(
                'order.od_id',
                'order.amount',
                'order.status',
                'orderdesc.p_id',
                'product.p_name',
                'orderdesc.price',
                'orderdesc.quantity',
                'orderdesc.t_price'
            )
            ->where('order.u_id', '=', session('User_id'))
            ->get();


        // print_r($results);
        // dd($rest);
        return view('order')->with(compact('results', 'rest'));
    }
    public function cancel_order($od_id)
    {
        // $res = DB::table('order')
        // ->where('order.od_id', '=', $od_id)
        // ->where('order.u_id', '=', session('User_id'))
        // ->delete();
        DB::table('orderdesc')
            ->where('orderdesc.od_id', '=', $od_id)
            ->where('orderdesc.u_id', '=', session('User_id'))
            ->delete();

        DB::table('order')
            ->where('order.od_id', '=', $od_id)
            ->where('order.u_id', '=', session('User_id'))
            ->delete();
        return redirect('/order');
    }
}
