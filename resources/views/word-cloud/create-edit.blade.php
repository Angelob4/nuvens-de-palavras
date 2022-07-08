<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Criar Nuvens de Palavras</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('css/createNuvem.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>



    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-dark bg-primary">
                <div class="px-3 top-menu">
                    <a href="/" class="navbar-brand">Nuvens de Palavras</a>
                    <a class="btn btn-danger" href="/">Cancelar</a>
                </div>
            </nav>
        </div>
    </div>



    <div class="container pt-5">
        <form action="/" method="post">
            @csrf

            <div class="row">
                <div class="form-label">
                    <label for="txt">Texto: </label>
                </div>
                <textarea id="txt" class="form-control" name="txtcloud" rows="4" cols="50"></textarea>
            </div>
            <div class="row pt-2">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary">Criar</button>
                </div>
            </div>

        </form>
    </div>
</body>

</html>
