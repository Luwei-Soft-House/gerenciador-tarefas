@extends('layouts.layout')

@section('title', 'Lista de Tarefas')

@section('content')
    <div class="mb-4">
        <a href="{{ route('tarefas.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Nova Tarefa
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Criada em</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tarefas as $tarefa)
                    <tr>
                        <td>{{ $tarefa->titulo }}</td>
                        <td>{{ $tarefa->descricao }}</td>
                        <td class="text-capitalize">{{ $tarefa->status }}</td>
                        <td>{{ $tarefa->created_at->format('d/m/Y H:i') }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('tarefas.edit', $tarefa) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i> Editar
                                </a>
                                <form action="{{ route('tarefas.destroy', $tarefa) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i> Excluir
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Paginação Estilizada --}}
    <div class="d-flex justify-content-center mt-4">
        <nav>
            <ul class="pagination custom-pagination">
                {{-- Página anterior --}}
                <li class="page-item {{ $tarefas->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $tarefas->previousPageUrl() }}" aria-label="Anterior">
                        <i class="bi bi-chevron-left"></i>
                    </a>
                </li>

                {{-- Páginas --}}
                @foreach ($tarefas->getUrlRange(1, $tarefas->lastPage()) as $page => $url)
                    <li class="page-item {{ $tarefas->currentPage() === $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                {{-- Próxima página --}}
                <li class="page-item {{ !$tarefas->hasMorePages() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $tarefas->nextPageUrl() }}" aria-label="Próxima">
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
