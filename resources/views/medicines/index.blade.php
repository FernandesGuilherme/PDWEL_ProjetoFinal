<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Medicamentos Cadastrados</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container mt-5">
            <div class="col-sm-10 d-flex justify-content-start">
                <h1>Lista de Medicamentos</h1>
            </div>
            
        <table class="table text-center">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Tipo</th>
            <th scope="col">Data de inicio</th>
            <th scope="col">Duracao</th>
            </tr>
        </thead>
        <tbody>
        @foreach($medicines as $medicine)
            <tr>
            <th scope="row">{{$medicine->id}}</th>
            <th>{{$medicine->name}}</th>
            <th>{{$medicine->tipo}}</th>
            <th>{{$medicine->data_inicio}}</th>
            <th>{{$medicine->duracao}}</th>
            </tr>
        @endforeach
        </tbody>
        </table>

        <div class="d-flex justify-content-end">
            <a href="{{ route('medicines-create') }}" class="btn btn-success">Cadastrar novo medicamento</a>
        </div>
    </div>
</body>
</html>