<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Editar Motorista: {{ $motorista->nome }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('motoristas.update', $motorista->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nome Completo</label>
                        <input type="text" name="nome" class="form-control" value="{{ $motorista->nome }}"
                            required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" name="telefone" class="form-control" placeholder="(83) 99999-9999"
                            value="{{ $motorista->telefone }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">CPF</label>
                        <input type="text" name="cpf" class="form-control" value="{{ $motorista->cpf }}"
                            required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">CNH</label>
                        <input type="text" name="cnh" class="form-control" value="{{ $motorista->cnh }}"
                            required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="date" name="data_nascimento" class="form-control"
                            value="{{ $motorista->data_nascimento }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Validade da CNH</label>
                        <input type="date" name="validade_cnh" class="form-control"
                            value="{{ $motorista->validade_cnh }}" required>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-success">Atualizar</button>
                    <a href="{{ route('motoristas.index') }}" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>
