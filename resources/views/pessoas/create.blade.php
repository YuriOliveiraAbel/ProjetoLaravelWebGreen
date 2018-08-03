@extends("template.app")

@section('content')
    <div class="col-md-12">
        <h3>Novo Contato</h3>
    </div>

    <div class="col-md-6 well" >
        <form action="{{url('/pessoas/store')}}" method="POST">
            {{csrf_field()}} <!--Enviando o token de validação-->
            <div class="form-group col-md-12" >
                <label class="control-label">Nome:</label>
                <input name="nome" type="text" class=" form-control" placeholder="Escreva seu nome">
            </div>
            <div class="form-group col-md-4">
                <label class="control-label">DDD:</label>
                <input name="ddd" type="text" class="form-control" placeholder="Escreva o DDD">
            </div>
            <div class="form-group col-md-8">
                <label class="control-label">Telefone:</label>
                <input name="telefone" type="text" class=" form-control" placeholder="Escreva o numero do telefone">
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
@endsection