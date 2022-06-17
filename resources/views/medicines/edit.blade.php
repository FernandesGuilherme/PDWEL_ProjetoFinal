<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Medicamento</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar medicamento</h1>
        <hr>
        <form action="{{ route('medicines-update', ['id'=>$medicines->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="name" value="{{ $medicines->name }}" placeholder="Digite um medicamento">
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <input type="text" class="form-control" name="tipo" value="{{ $medicines->tipo }}" placeholder="Digite o tipo do medicamento">
                </div>
                <div class="form-group">
                    <label for="data_inicio">Data de Inicio:</label>
                    <input type="date" class="form-control" name="data_inicio" value="{{ $medicines->data_inicio }}"placeholder="Selecione a data de inicio do uso do medicamento">
                </div>
                <div class="form-group">
                    <label for="duracao">Duracao em dias:</label>
                    <input type="number" class="form-control" name="duracao" value="{{ $medicines->duracao }}" placeholder="Digite a quantidade de dias do uso do medicamento">
                </div>
                <div class="form-group">
                    <label for="id_user">ID do usuario:</label>
                    <input type="number" class="form-control" name="id_user" value="{{ $medicines->id_user }}" placeholder="Digite o ID do usuario que usa o medicamento">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
            </div>
        </form>
    </div>
</body>
</html>