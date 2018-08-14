<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductCat;
use App\Product;
use App\Departamento;
use Illuminate\Http\Response;   

use Codedge\Fpdf\Fpdf\Fpdf;  

class TestController extends Controller
{
   public function prodfunct(){

        $prod=ProductCat::all();//get data from table

        return view('web.productlist',compact('prod'));//sent data to view

    }

    public function findProductName(Request $request){


        //if our chosen id and products table prod_cat_id col match the get first 100 data 

        //$request->id here is the id of our chosen option id
        $data=Product::select('productname','id')->where('prod_cat_id',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
    }


    public function findPrice(Request $request){

        //it will get price if its id match with product id
        $p=Product::select('price')->where('id',$request->id)->first();

        return response()->json($p);
    }
    
    public function fpdf(){
        $product=Product::all();
        $fpdf= new Fpdf(); 
        $fpdf->AddPage();
        $fpdf->SetFont('Arial', 'B', 11); 

        $i=0; 
        foreach ($product as $key => $value) 
        {
            $fpdf->Cell(40, 10*$i, $value->productname);
            $fpdf->Cell(40, 10*$i, $value->qty, 0, 1, 'C');
            $i++; 
        }

        /*dd($fpdf);*/
        $headers=['Content-Type'=>'aplication/pdf'];
        return new Response($fpdf->Output(), 200, $headers);

        
    }
}
