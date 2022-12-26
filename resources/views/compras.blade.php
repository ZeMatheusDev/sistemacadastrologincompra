@if (\Session::has('excluido'))
<div style="text-align: center" class="alert alert-success">    {!! \Session::get('excluido') !!} </div>
@endif
@include('home');
<style>
    #listagemProdutos{
        border: 8px solid rgb(43, 42, 46);
        width:850px;
        margin: 0 auto;
        background-color: rgb(58, 48, 73);
    }
</style>

<div style="font-size:20px; text-align: center">
    @foreach ($nomeDasCompras as $compra)
    <div id="listagemProdutos">
<br><br>
<b style="font-size:30px; color:white">Compra {{ $loop->iteration }} :</b> - 
<b style="color:white; font-size:40px">{{ $compra->nome }}</b> <br>  <br>
<form action="{{ route('excluirCompra') }}" method="POST">
    @csrf
<input hidden type="text" name="id_compra" value="{{ $compra->id }}">
<button type="submit" class="btn btn-danger">Excluir</button>
</form>
<br> <br>
</div>
<br>
@endforeach