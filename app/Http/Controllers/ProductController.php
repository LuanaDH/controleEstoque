<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

use Auth;


class ProductController extends Controller{

    public function create(Request $request){ //create deve ser usada apenas para criar o produto
        // if($request->isMethod('GET')){
        //     return view('formulario');
        // } else {
        //     //faço cadastro produto
        // }
        //dd($request->nameProduct);
        $newProduct = new Product();
        $newProduct->name= $request->nameProduct;
        $newProduct->description= $request->descriptionProduct;
        $newProduct->quantity= $request->quantityProduct;
        $newProduct->price= $request->priceProduct;
        $newProduct->user_id= Auth::user()->id;

        $result= $newProduct->save();
        // if($result){
        //     echo "Deu certo sem query";
        // } else {
        //     echo "Vai ter que criar query";
        // }
        return view('products.form', ["result"=>$result]);
    }

    public function viewForm(Request $request){ //para visualizar o local de cadastro/formulario
        return view('products.form');
    }

    public function update(Request $request){
        //para att, devemos buscar um produto ao inves de criar
        //usando Product::find($idProduto)
        //necessário usar rotas com parametro
        $newProduct = Product::find();
        $newProduct->name= $request->nameProduct;
        $newProduct->description= $request->descriptionProduct;
        $newProduct->quantity= $request->quantityProduct;
        $newProduct->price= $request->priceProduct;
        $newProduct->user_id= Auth::user()->id;
    }

    public function delete(Request $request){
        //para deletar vai usar Product::destroy($id)
    }

    public function viewAllProducts(Request $request){
        //vai precisar do Product::All
    }
}

?>