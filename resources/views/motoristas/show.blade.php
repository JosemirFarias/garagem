<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Ficha do Motorista</h4>
            <a href="{{ route('motoristas.edit', $motorista->id) }}" class="btn btn-warning btn-sm">Editar</a>
        </div>
        <div class="card-body">
            <p><strong>Nome:</strong> {{ $motorista->nome }}</p>
            <p><strong>CPF:</strong> {{ $motorista->cpf }}</p>
            <p><strong>CNH:</strong> {{ $motorista->cnh }}</p>
            <p><strong>Vencimento CNH:</strong> {{ \Carbon\Carbon::parse($motorista->validade_cnh)->format('d/m/Y') }}
            </p>
            <p><strong>Telefone:</strong> {{ $motorista->telefone }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('motoristas.index') }}" class="btn btn-secondary">Voltar para a Lista</a>
        </div>
    </div>
</div>
