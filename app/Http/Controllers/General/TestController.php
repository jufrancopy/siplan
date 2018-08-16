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


        $fpdf->Cell(40,3*$i, "Nombre");
        $fpdf->Cell(65,3*$i, "Cantidad");
        $fpdf->Cell(50,3*$i, "Precio");
        
        $i++; 

        $fpdf->Cell(20, 3*$i, '', 0, 1, 'C'); 
        $fpdf->Cell(20, 3*$i, '', 0, 1, 'C');

        $fpdf->SetFont('Arial', '', 10);
        foreach ($product as $key => $value) 
        {
            $fpdf->Cell(40, 3*$i, $value->productname);
            $fpdf->Cell(65, 3*$i, $value->qty);
            $fpdf->Cell(50, 3*$i, $value->price, 0, 1, 'C');
            
            $i++; 
        }
        $headers=['Content-Type'=>'aplication/pdf'];
        return new Response($fpdf->Output(), 200, $headers);
    }
}
