<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Orderdesc;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index()
    {
        if (session()->has('Admin') && session('Admin') == true) {
            $categories = Category::all();
            $orders =  DB::table('order')
                ->join('orderdesc', 'orderdesc.od_id', '=', 'order.od_id')
                ->join('product', 'product.p_id', '=', 'orderdesc.p_id')
                ->select('order.od_id', 'order.amount', 'order.status', 'orderdesc.p_id', 'product.p_name')
                ->where('order.u_id', '=', session('User_id'))
                ->get();
            $cate = compact('categories', 'orders');
            return view('Admin')->with($cate);
        } else {

            return redirect('/');
        }
    }


    public function Cat_insert(Request $request)
    {
        $validated = $request->validate(
            [
                'cat_name' => 'required',
                'cat_desc' => 'required|string|min:20',
            ],
            [
                'cat_name.required' => 'Please enter name of category.',
                'cat_desc.required' => 'Please enter  Description of category',
                'cat_desc.min' => 'The category Description field must be at least :min characters.'
            ]

        );
        $cat_data = new Category;
        $cat_data->cat_name = $request['cat_name'];
        $cat_data->cat_desc = $request['cat_desc'];
        // $udata->password = session('password');
        $cat_data->save();
        return redirect('/admin');
    }

    public function pro_insert(Request $request)
    {
        $validated = $request->validate(
            [
                'Name' => 'required',
                'Company' => 'required',
                'Price' => 'required|numeric',
                'Model' => 'required',
                'Category' => 'required',


            ]

        );

        $img1 = $request->file('Image1');
        $img2 = $request->file('Image2');
        $img3 = $request->file('Image3');

        $img1_name = $img1->getClientOriginalName();
        $img2_name = $img2->getClientOriginalName();
        // $img3_name = $img3->getClientOriginalName();
        $path1 = $img1->storeAs('public/images', time() . '_' . $img1_name);
        $path2 = $img2->storeAs('public/images', time() . '_' . $img2_name);
        // $path3 = $img3->storeAs('public/images', time() . '_' . $img3_name);
        // dd($path1, $path2, $path3);
        $image = [
            'image1' => $path1,
            'image2' => $path2,
            // 'image3' => $path3,
        ];
        $desc = [
            $request->input('Field1') => $request->input('Value1'),
            $request->input('Field2') => $request->input('Value2'),
            $request->input('Field3') => $request->input('Value3'),
            $request->input('Field4') => $request->input('Value4'),
        ];


        $pro_data = new Product;
        $pro_data->p_name = $request['Name'];
        $pro_data->p_price = $request['Price'];
        $pro_data->p_company = $request['Company'];
        $pro_data->p_desc = json_encode($desc);
        $pro_data->p_discount = $request['Discount'];
        $pro_data->p_Warranty = $request['Warranty'];
        $pro_data->p_model = $request['Model'];
        $pro_data->cat_id = $request['Category'];
        $pro_data->P_img = json_encode($image);
        $pro_data->save();
        return redirect('/admin')->with('message', 'Your data has been submitted successfully!');
    }
}
