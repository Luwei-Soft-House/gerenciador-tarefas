<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de Tarefas')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .custom-pagination .page-link {
            color: #0d6efd;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            padding: 0.5rem 0.75rem;
            margin: 0 0.25rem;
            transition: all 0.2s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custom-pagination .page-item.active .page-link {
            background-color: #0d6efd;
            border-color: #0d6efd;
            color: #fff;
            font-weight: bold;
            box-shadow: 0 0 0.25rem rgba(0, 0, 0, 0.15);
        }

        .custom-pagination .page-link:hover {
            background-color: #e9f0ff;
            color: #0a58ca;
            text-decoration: none;
        }

        .custom-pagination .page-item.disabled .page-link {
            color: #adb5bd;
            pointer-events: none;
            background-color: #f8f9fa;
        }

        .pagination {
            --bs-pagination-bg: #ffffff;
            --bs-pagination-hover-bg: #f1f1f1;
            --bs-pagination-color: #0d6efd;
            --bs-pagination-hover-color: #0a58ca;
            --bs-pagination-active-bg: #0d6efd;
            --bs-pagination-active-border-color: #0d6efd;
            --bs-pagination-border-radius: 0.375rem;
            --bs-pagination-padding-x: 1rem;
            --bs-pagination-padding-y: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, .075);
        }

        .pagination .page-link {
            border: 1px solid #dee2e6;
            transition: all 0.2s ease;
        }

        .pagination .page-link:hover {
            background-color: #f8f9fa;
            color: #0d6efd;
        }

        .message-success {
            color: green;
            margin: 10px 0;
        }

        .message-error {
            color: red;
            margin: 10px 0;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-4">
        <h1 class="mb-4">@yield('title')</h1>

        @if (session('success'))
            <div id="success-message" class="alert alert-success">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(function() {
                    let msg = document.getElementById('success-message');
                    if (msg) msg.style.display = 'none';
                }, 5000);
            </script>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>
</body>

</html>
