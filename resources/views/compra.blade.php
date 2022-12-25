@if (\Session::has('comprado'))
<div style="text-align: center" class="alert alert-success">    {!! \Session::get('comprado') !!} </div>
@endif
@include('home')

<style>
    #listagemProdutos{
        border: 8px solid rgb(43, 42, 46);
        width:850px;
        margin: 0 auto;
        background-color: rgb(58, 48, 73);
    }
</style>

<div style="color: white; font-size:20px; text-align: center">
    @foreach ($produtos as $produto)
    <form action="{{ route('comprarProduto') }}" method="POST">
        @csrf
    <input hidden name="produto_id" id="produto_id" type="text" value="{{ $produto->id }}">
    <input hidden name="usuario_id" id="usuario_id" type="text" value="{{ session()->all()['id'] }}">
    <div id="listagemProdutos">
        <br>

{{ $produto->nome }} <br> preco: {{ $produto->preco }} <br><br>
<button type="submit" class="btn btn-secondary">Comprar</button>
 <br><br><br>
</div>
<br><br>
</form>
@endforeach
</div>
