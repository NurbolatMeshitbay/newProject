<?php

namespace App\Http\Controllers;

use App\Models\Addition;
use App\Models\Product;
use App\Models\ProductsAddition;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function list_page()
    {
        $data = Product::with('type','productAdditions.additions')->get()->toArray();

        return view('list')->with('data',$data);
    }

    public function add_page()
    {
        return view('add');
    }

    public function add_dvd_page()
    {
        return view('dvd');
    }
    public function add_furniture_page()
    {
        return view('furniture');
    }
    public function add_book_page()
    {
        return view('book');
    }


    public function add_book(Request $request){
        $valid = $request->validate([
            'sku' => 'required',
            'name' => 'required',
            'price' => 'required|integer',
            'weight' =>'required|integer'
        ]);
        $product = Product::create([
            'sku' => $request['sku'],
            'name' => $request['name'],
            'price' => $request['price'],
            'type_id' => 1
        ]);
        $addition = Addition::create([
            'value'=>$request['weight'],
            'name'=>'weight'
        ]);
        ProductsAddition::create([
                'product_id'=> $product->id,
                'additions_id'=> $addition->id,
            ]
        );

        return redirect()->route('add_page.book');
    }






    public function add_dvd(Request $request)
    {
        $valid = $request->validate([
            'sku' => 'required',
            'name' => 'required',
            'price' => 'required|integer',
            'size' =>'required|integer'
        ]);

         $product = Product::create([
            'sku' => $request['sku'],
            'name' => $request['name'],
            'price' => $request['price'],
            'type_id' => 2
        ]);

         $addition = Addition::create([
             'value'=>$request['size'],
             'name'=>'size'
         ]);

         ProductsAddition::create([
             'product_id'=> $product->id,
             'additions_id'=> $addition->id,
             ]
         );

        return redirect()->route('add_page.dvd');
    }


    public function add_furniture(Request $request)
    {
        $valid = $request->validate([
            'sku' => 'required',
            'name' => 'required',
            'price' => 'required|integer',
            'height' => 'required|integer',
            'width' => 'required|integer',
            'length' => 'required|integer'
        ]);

        $product = Product::create([
            'sku' => $request['sku'],
            'name' => $request['name'],
            'price' => $request['price'],
            'type_id' => 3
        ]);
        $addition1 = Addition::create([
            'value'=>$request['height'],
            'name'=>'height'
        ]);

        ProductsAddition::create([
                'product_id'=> $product->id,
                'additions_id'=> $addition1->id,
            ]
        );
        $addition2 = Addition::create([
            'value'=>$request['width'],
            'name'=>'width'
        ]);

        ProductsAddition::create([
                'product_id'=> $product->id,
                'additions_id'=> $addition2->id,
            ]
        );
        $addition3 = Addition::create([
            'value'=>$request['length'],
            'name'=>'length'
        ]);

        ProductsAddition::create([
                'product_id'=> $product->id,
                'additions_id'=> $addition3->id,
            ]
        );

        return redirect()->route('add_page.furniture');
    }

}
