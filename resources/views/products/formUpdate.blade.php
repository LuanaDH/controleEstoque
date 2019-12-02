@extends('layouts.app')

@section('content')

    <section class="container">
    <div class= "row col-md-12 d-flex justify-content-center">
        <h1>Formulário de Atualização de Produtos</h1>
    </div>

    @if(isset($product))
        <form action="/produtos/atualizar" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="idProduct" value="{{$product->id}}" hidden>

            <div class="form-group">
                <label for="nameProduct">Nome do Produto</label>
                <input class= "form-control" type="text" name="nameProduct" id="nameProduct" value="{{$product->name}}">
            </div>

            <div class="form-group">
                <label for="descriptionProduct">Descrição</label>
                <textarea id="descriptionProduct" name="descriptionProduct" class= "form-control">{{$product->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="quantityProduct">Quantidade</label>
                <input class= "form-control" type="number" name="quantityProduct" id="quantityProduct" value="{{$product->quantity}}">
            </div>

            <div class="form-group">
                <label for="priceProduct">Preço</label>
                <input class= "form-control" type="number" name="priceProduct" id="priceProduct" value="{{$product->price}}">
            </div>

            <div class="form-group">
                <label for="imgProduct">Imagem Produto</label>
                <input class= "form-control" type="file" name="imgProduct" id="imgProduct">
            </div>

            <div class= "form-group">
                <button class="btn btn-primary" type="submit">Atualizar Produto</button>
            </div>
        </form>

        @elseif(isset($result))

        @else
            <h4 class="d-flex justify-content-center">Você não passou um ID ou o produto não existe!</h4>
        @endif

            <div class="row">
                <div class="col-md-12">
                    @if(isset($result)) <!--perguntando se existe -->
                        @if($result) <!--perguntando se é vdd ou falso -->
                            <h3>Deu certo</h3>
                        @else
                            <h3>Não deu certo sua atualização</h3>
                        @endif
                    @endif            
                </div>
            </div>
    
    </section>
@endsection