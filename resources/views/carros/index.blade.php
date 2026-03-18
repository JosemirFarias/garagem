<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Lista de Veículos</h2>
        <a href="{{ route('carros.create') }}" class="btn btn-primary">Cadastrar Novo Carro</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Placa</th>
                <th>Marca/Modelo</th>
                <th>Motorista Responsável</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($carros as $carro)
                <tr>
                    <td><strong>{{ $carro->placa }}</strong></td>
                    <td>{{ $carro->marca }} {{ $carro->modelo }}</td>
                    <td>
                        @if ($carro->motorista)
                            <span class="badge bg-info text-dark">{{ $carro->motorista->nome }}</span>
                        @else
                            <span class="text-muted small"><i>Sem motorista</i></span>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('carros.destroy', $carro->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm"
                                onclick="return confirm('Tem certeza?')">
                                Apagar
                            </button>
                            <a href="{{ route('carros.show', $carro->id) }}"
                                class="btn btn-outline-info btn-sm">Detalhes</a>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Nenhum carro cadastrado até o momento.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <a href="{{ route('motoristas.index') }}" class="btn btn-secondary">Ver Motoristas</a>
</div>
