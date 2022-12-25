<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tela inicial</title>
</head>
<body style="background-color: rgb(27, 27, 31)">
    @if (isset($logged))
        <div style="text-align: center" class="alert alert-success">   {{ $logged }} </div>
    @endif
    <section>
        <div style="width:100%; height:100px;background-color: rgb(0, 0, 0)">
            <a type="submit" style="margin-top: 35px; margin-left: 50px" href="create" class="btn btn-primary">Registrar</a>
        @if (session()->all()['logado'] == 'false')
            <a type="submit" style="margin-top: 35px; margin-left: 50px" href="login" class="btn btn-primary">Login</a>
        @endif

        @if (session()->all()['logado'] == 'true')
        <a type="submit" style="margin-top: 35px; margin-left: 50px" href="comprar" class="btn btn-primary">Comprar</a>
        <a type="submit" style="margin-top: 35px; margin-left: 50px" href="compras" class="btn btn-primary">Minhas Compras</a>
        <form style="display: inline;" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" style="margin-top: 35px; margin-left: 50px" class="btn btn-primary">Logout</button>
        </form>
        @endif

        @if (isset(session()->all()['admin']))
            @if (session()->all()['admin'] == 1)

                @csrf
            <a type="submit" href="cadastroProduto" style="margin-top: 35px; margin-left: 50px" class="btn btn-primary">Cadastrar produto</a>
            @endif
        @endif

        </div>
    </section>
</body>
<style>

</style>
</html>