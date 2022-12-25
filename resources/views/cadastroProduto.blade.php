@if (\Session::has('cadastradoProduto'))
<div style="text-align: center" class="alert alert-success">    {!! \Session::get('cadastradoProduto') !!} </div>
@endif
@include('home')

<form action="{{ route('cadastroProduto') }}" method="POST">
    @csrf


<div style="color: white; margin-left:690px; margin-top: 10%">
    Digite o nome do produto: &nbsp; <input type="text" name="nome" id="nome"><br><br>
    Digite o preco do produto: &nbsp; <input type="text" name="preco" id="preco"><br><br>
    Digite a quantidade do produto: &nbsp; <input type="text" name="quantidade" id="quantidade"><br><br><br>
    <button id="botao" style="margin-left:150px; width:100px; text-align: center;font-size:20px; font-family:Arial, Helvetica, sans-serif;" type="submit">Criar</button>
</div>

<style>
        #botao{
        background-color:black;
        transition: all 0.2s ease;
        color: white;
    }
    #botao:hover{
        background-color: white; 
        color:black;

    }
</style>
</form>