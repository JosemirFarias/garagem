<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Editar Veículo: {{ $carro->placa }}</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('carros.update', $carro->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Marca</label>
                        <input type="text" name="marca" class="form-control" value="{{ $carro->marca }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Modelo</label>
                        <input type="text" name="modelo" class="form-control" value="{{ $carro->modelo }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Ano</label>
                        <input type="number" name="ano" class="form-control" value="{{ $carro->ano }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Motorista Responsável</label>
                        <select name="motorista_id" class="form-control">
                            <option value="">-- Sem Motorista --</option>
                            @foreach ($motoristas as $motorista)
                                <option value="{{ $motorista->id }}"
                                    {{ $carro->motorista_id == $motorista->id ? 'selected' : '' }}>
                                    {{ $motorista->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-success">Atualizar</button>
                    <a href="{{ route('carros.index') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>
