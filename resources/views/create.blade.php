@include('home')


@if (\Session::has('funcionou'))
    <div style="text-align: center" class="alert alert-success">    {!! \Session::get('funcionou') !!} </div>
@endif
@if (\Session::has('error'))
    <div style="text-align: center" class="alert alert-danger">    {!! \Session::get('error') !!} </div>
@endif


<form action="{{route('cadastrar')}}" method="POST">
    @csrf


<div style="color: white; margin-left:690px; margin-top: 10%">
    Digite seu login: &nbsp; &nbsp;<input type="text" name="login" id="login"><br><br>
    Digite seu email: &nbsp; <input type="text" name="email" id="email"><br><br>
    Digite sua senha: &nbsp; <input type="text" name="senha" id="senha"><br><br><br>
    <button id="botao" style="margin-left:150px; width:100px; text-align: center;font-size:20px; font-family:Arial, Helvetica, sans-serif;" type="submit">Criar</button>
</div>

<style>
        #botao{
        background-color:black;
        transition: all 1s ease;
        color: white;
    }
    #botao:hover{
        background-color: white; 
        color:black;

    }
</style>
</form>