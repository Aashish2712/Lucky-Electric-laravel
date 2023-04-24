<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $categories = Category::has('products', '>=', 1)->get();
        $categoryIds = [];
        foreach ($categories as $category) {
            $categoryIds[] = $category->cat_id;
        }
        // dd($categoryIds);
        $products = DB::table('product')
            ->join('category', 'product.cat_id', '=', 'category.cat_id')
            ->select('category.cat_name', 'category.cat_desc', 'product.p_name', 'product.p_price', 'product.p_company', 'product.cat_id', 'product.P_img', 'product.p_id')
            ->where('product.p_status', '=', 1)
            ->where('category.cat_status', '=', 1)
            ->whereIn('category.cat_id', $categoryIds)
            ->get();
        // dd($products);
        $cate = compact('categories', 'products');
        return view('index')->with($cate);
    }
    public function show_product()
    {
        $prod = Product::all();
        $data = compact('prod');
        return view('product')->with($data);
    }

    public function show($field)
    {



        $results = DB::table('product')
            ->join('category', 'product.cat_id', '=', 'category.cat_id')
            ->select('category.cat_name', 'category.cat_desc', 'product.p_name', 'product.p_price', 'product.p_company', 'product.cat_id', 'product.P_img', 'product.p_id')
            ->where('product.p_status', '=', 1)
            ->where('category.cat_status', '=', 1)
            ->whereRaw("concat(p_name, ' ', p_company, ' ', p_model) like ?", ["%$field%"])
            ->get();



        // dd($results);
        $result = compact('results');

        return view('product')->with($result);
    }
    public function search(Request $request)
    {
        $validated = $request->validate(
            [
                'search' => 'required',
            ]
        );
        $field = $request['search'];

        return redirect(url('product', $field));
    }
    public function pro_desc($id)
    {
        $products = DB::table('product')
            // ->join('category', 'product.cat_id', '=', 'category.cat_id')
            ->select(
                'product.p_name',
                'product.p_price',
                'product.p_company',
                'product.P_img',
                'product.p_id',
                'product.p_discount',
                'product.p_Warranty',
                'product.p_model',
                'product.p_desc'
            )
            ->where('p_id', $id)
            ->first();

        return view('show_pro')->with(compact('products'));
    }
}
