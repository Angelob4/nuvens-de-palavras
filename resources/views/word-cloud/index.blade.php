<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('css/createNuvem.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-dark bg-primary">
                <div class="px-3 top-menu">
                    <a href="/" class="navbar-brand">Nuvens de Palavras</a>
                    <a class="btn btn-light" href="/create">Criar</a>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            @if (isset($listOfWord))
                                <th>Vezes</th>
                                <th>Palavra</th>
                            @else
                                <th>Informações</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($listOfWord))
                            @foreach ($listOfWord as $key => $value)
                                @if ($key != '')
                                    <tr>
                                        <td>{{ $value }}</td>
                                        <td>{{ $key }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @else
                            <tr>
                                <td>Não há dados cadastrados, por favor clique em "Criar" para gerar novos dados!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>
