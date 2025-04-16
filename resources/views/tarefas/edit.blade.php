@extends('layouts.layout')

@section('title', 'Editar Tarefa')

@section('content')
    <form action="{{ route('tarefas.update', $tarefa) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" value="{{ $tarefa->titulo }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required>{{ $tarefa->descricao }}</textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="pendente" @if($tarefa->status == 'pendente') selected @endif>Pendente</option>
                <option value="concluida" @if($tarefa->status == 'concluida') selected @endif>Concluída</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">← Voltar</a>
    </form>
@endsection
