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
        // $results = DB::table('order')
        //     ->join('orderdesc', 'orderdesc.od_id', '=', 'order.od_id')
        //     ->select('order.od_id', 'order.amount', 'order.status', 'orderdesc.p_id')

        //     ->where('order.u_id', '=', session('User_id'))
        //     ->get();
        $results = DB::table('order')
            ->join('orderdesc', 'orderdesc.od_id', '=', 'order.od_id')
            ->join('product', 'product.p_id', '=', 'orderdesc.p_id')
            ->select('order.od_id', 'order.amount', 'order.status', 'orderdesc.p_id', 'product.p_name')
            ->where('order.u_id', '=', session('User_id'))
            ->get();


        // dd($results);
        return view('order')->with(compact('results'));
    }
    public function cancel_order($p_id, $od_id)
    {
        $res = DB::table('orderdesc')

            ->where('orderdesc.p_id', '=', $p_id)
            ->where('orderdesc.od_id', '=', $od_id)
            ->where('orderdesc.u_id', '=', session('User_id'))
            ->delete();
        $check = DB::table('orderdesc')
            ->where('orderdesc.od_id', '=', $od_id)
            ->where('orderdesc.u_id', '=', session('User_id'))
            ->exists();
        if ($check) {
            return redirect('/order');
        } else {
            $res = DB::table('order')
                ->where('order.od_id', '=', $od_id)
                ->where('order.u_id', '=', session('User_id'))
                ->delete();
            return redirect('/order');
        }
    }
}
