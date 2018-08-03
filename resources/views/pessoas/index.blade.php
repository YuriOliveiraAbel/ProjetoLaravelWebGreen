@extends("template.app")

@section("content")
    <style>
        .btn-action{
            padding:5px;
            margin-left: 5px;
            float: right;
        }
    </style>
    <div>
        @foreach($pessoas as $pessoa)
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        {{$pessoa->nome}}
                        <a href="{{url("/pessoas/$pessoa->id/editar")}}" class="btn btn-xs btn-info btn-action">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>

                        <a href="{{url("/pessoas/$pessoa->id/excluir")}}" class="btn btn-xs btn-danger btn-action">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </div>
                    <div class="panel-body">
                        @foreach($pessoa->telefone as $telefone)
                            <p><strong>Telefone: </strong>({{$telefone->ddd}}) ({{$telefone->telefone}})</p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection