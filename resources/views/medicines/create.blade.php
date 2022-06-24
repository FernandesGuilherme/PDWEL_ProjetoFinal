<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Medicamento</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container mt-5">
        <h1>Cadastrar medicamento</h1>
        <hr>
        <form action="{{ route('medicines-store')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="name" placeholder="Digite um medicamento">
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <input type="text" class="form-control" name="tipo" placeholder="Digite o tipo do medicamento">
                </div>
                <div class="form-group">
                    <label for="data_inicio">Data de Inicio:</label>
                    <input type="date" class="form-control" name="data_inicio" placeholder="Selecione a data de inicio do uso do medicamento">
                </div>
                <div class="form-group">
                    <label for="duracao">Duracao em dias:</label>
                    <input type="number" class="form-control" name="duracao" placeholder="Digite a quantidade de dias do uso do medicamento">
                </div>
                <div class="form-group">
                    <label for="usuario">Usuário:</label>
                    <select class="form-control" name="id_user" id="id_user">
                        <option value="">Selecione</option>
                        @foreach($users as $user) 
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</body>
</html>