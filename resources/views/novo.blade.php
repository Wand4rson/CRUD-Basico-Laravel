@extends('painel')

@section('content')
    <br/>
    <form method="post" action="{{route('painel.salvar')}}">
        @csrf
        <div class="mb-3">
            <label for="descricao" class="form-label">Nova Tarefa</label>
            <input type="text" class="form-control" name="descricao" placeholder="Nova Tarefa" required>
        </div>

        <input class="btn btn-primary" type="submit" value="Salvar">

    </form>
@endsection