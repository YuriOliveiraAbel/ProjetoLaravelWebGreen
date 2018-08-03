@extends('template.app')

@section('content')
    <div class="col-md-6 well" >
        <div class="col-md-12">
            <h3>Deseja exluir esse contato? </h3>
            <div style="float: right;">
                <a class="btn btn-default" href="{{url("pessoas")}}" >
                    <i class="glyphicon glyphicon-chevron-left"></i>
                    Cancelar
                </a>
                <a class="btn btn-danger" href="{{url("pessoas/$pessoa->id/destroy")}}" >
                    <i class="glyphicon glyphicon-remove"></i>
                    Excluir
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="panel panel-danger">
            <div class="panel-heading">{{$pessoa->nome}} </div>
            <div class="panel-body">
                @foreach($pessoa->telefone as $telefone)
                    <p><strong>Telefone: </strong>({{$telefone->ddd}}) ({{$telefone->telefone}})</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection()