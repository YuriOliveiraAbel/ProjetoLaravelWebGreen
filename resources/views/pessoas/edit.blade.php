@extends('template.app')

@section('content')
    <div class="col-md-12">
        <h3>Editar contato</h3>
    </div>

    <div class="col-md-6 well" >
        <form action="{{ url('/pessoas/update') }}" method="POST">
            {{csrf_field()}} <!--Enviando o token de validação-->
            <input type="hidden" name="id" value="{{$pessoa->id}}">
            <div class="form-group col-md-12" >
                <label class="control-label">Nome:</label>
                <input name="nome" type="text" value="{{$pessoa->nome}}" class=" form-control" placeholder="Escreva seu nome">
            </div>
            <div class="col-md-12">
                <button class="btn btn-info">Salvar</button>
            </div>
        </form>
    </div>


    <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">{{$pessoa->nome}} </div>
            <div class="panel-body">
                @foreach($pessoa->telefone as $telefone)
                    <p><strong>Telefone: </strong>({{$telefone->ddd}}) ({{$telefone->telefone}})</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection