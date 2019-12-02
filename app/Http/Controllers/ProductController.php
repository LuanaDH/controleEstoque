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
        return view('products.formRegister', ["result"=>$result]);
    }

    public function viewForm(Request $request){ //para visualizar o local de cadastro/formulario
        return view('products.formRegister');
    }

    public function viewFormUpdate(Request $request, $id=0){
        $product = Product::find($id);
        if($product){
            return view('products.formUpdate',["product"=>$product]);
        } else {
            return view('products.formUpdate');
        }
    }

    public function update(Request $request){
        //para att, devemos buscar um produto ao inves de criar
        //usando Product::find($idProduto)
        //necessário usar rotas com parametro
        $product = Product::find($request->idProduct);
        $product->name= $request->nameProduct;
        $product->description= $request->descriptionProduct;
        $product->quantity= $request->quantityProduct;
        $product->price= $request->priceProduct;
        
        $result= $product->save();
        return view('products.formUpdate', ["result"=>$result]);
    }

    public function delete(Request $request, $id=0){
        //para deletar vai usar Product::destroy($id)
        $result = Product::destroy($id);
        if($result){
            return redirect('/produtos');
        }
    }

    public function viewAllProducts(Request $request){
        //vai precisar do Product::All
        $listProducts = Product::all();
        return view ('products.products', ['listProducts'=>$listProducts]);
    }

    public function viewOneProducts(Request $request){

    }
}

?>