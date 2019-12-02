@extends('layouts.app')

@section('content')

    <section class="container">
    <div class= "row col-md-12 d-flex justify-content-center">
        <h1>Formulário de Cadastro de Produtos</h1>
    </div>
        <form action="/produtos/cadastrar" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="nameProduct">Nome do Produto</label>
                <input class= "form-control" type="text" name="nameProduct" id="nameProduct">
            </div>

            <div class="form-group">
                <label for="descriptionProduct">Descrição</label>
                <input class= "form-control" type="text" name="descriptionProduct" id="descriptionProduct">
            </div>

            <div class="form-group">
                <label for="quantityProduct">Quantidade</label>
                <input class= "form-control" type="number" name="quantityProduct" id="quantityProduct">
            </div>

            <div class="form-group">
                <label for="priceProduct">Preço</label>
                <input class= "form-control" type="number" name="priceProduct" id="priceProduct">
            </div>

            <div class="form-group">
                <label for="imgProduct">Imagem Produto</label>
                <input class= "form-control" type="file" name="imgProduct" id="imgProduct">
            </div>

            <input type="submit" value="Cadastrar" class="btn btn-primary">

        </form>

            <div class="row">
                <div class="col-md-12">
                    @if(isset($result)) <!--perguntando se existe -->
                        @if($result) <!--perguntando se é vdd ou falso -->
                            <h1>Deu certo</h1>
                        @else
                            <h1>Não deu certo o cadastro</h1>
                        @endif
                    @endif            
                </div>
            </div>
    
    </section>
@endsection