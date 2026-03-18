<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Ficha do Veículo</h4>
            <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-warning btn-sm">Editar</a>
        </div>
        <div class="card-body">
            <p><strong>Veículo:</strong> {{ $carro->marca }} {{ $carro->modelo }}</p>
            <p><strong>Placa:</strong> {{ $carro->placa }}</p>
            <p><strong>Ano:</strong> {{ $carro->ano }}</p>
            <p><strong>Status de Vínculo:</strong>
                @if ($carro->motorista)
                    O veículo está sob responsabilidade de <strong>{{ $carro->motorista->nome }}</strong>.
                @else
                    Este veículo não possui um motorista vinculado no momento.
                @endif
            </p>
        </div>
        <div class="card-footer">
            <a href="{{ route('carros.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
