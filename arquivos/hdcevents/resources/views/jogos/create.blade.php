@extends('layouts.app')
@section('title', 'criacao')
@section('content')
<div class="container mt-5">
<h1>Crie um jogo</h1>
<hr>
<form action="{{ route('jogos-store')}}" method="POST">
@csrf
    <div class="form-group">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" list="nomej" class="form-control" name="nome" placeholder="digite um nome..." placeholder="seu nome max 40 caracteres" minlength="1" maxlength="40" size="40" required="required">
        </div>
        <br>
        <div class="form-group">
            <label for="nome">Categoria:</label>
            <input id="categoria" list="categ" class="form-control" name="categoria" placeholder="digite uma categoria..."  minlength="2" maxlength="40" size="40" required="required" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" required="required">
        </div>
        <br>
        <div class="form-group">
            <label for="nome">Ano de Criação:</label>
            <input type="number" class="form-control" name="ano_criacao" id="name" list="names" placeholder="digite um ano de criação..." min="1960" required="required" max="2023" maxlength="4" required="required">
        </div>
        <br>
        <div class="form-group">
            <label for="nome">Valores aceitos 10-100:</label>
            <input type="number" class="form-control" name="valor" placeholder="digite um valor..." list="valores" min="10" required="required" max="100" minlength="2" maxlength="3" >
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
            <a href="{{route('jogos-index')}}" class="btn btn-danger">sair</a>
            
            
        </div>
    </div>
</form>
<datalist id="names"> 
<?php    
for ($i=1960; $i < 2023; $i++) {
    echo "<option>". $i."</option>";
}   
?>
    
</datalist>

<datalist id="valores"> 
<?php    
for ($i=10; $i < 110; $i=$i+10) {
    echo "<option>". $i."</option>";
}   
?>
    
</datalist>

<datalist id="categ"> 
<option>Jogos de plataforma</option>
<option>Jogos de corrida</option>
<option>Jogos de luta</option>
<option>Jogos de esporte</option>
<option>Jogo de simulação</option>
<option>Jogo musical</option>
<option>Jogo de estratégia</option>
<option>Jogo de decoração</option>
<option>Jogo de tiro</option>
<option>Jogo de aventura</option>
<option>Jogo de tabuleiro</option>
<option>Jogo de ação</option>
<option>Quebra-cabeça</option>
<option>Simulador de combate áereo</option>
<option>Simulador de romance</option>
</datalist>

<datalist id="nomej">
  <option>mario</option>
  <option>sonic</option>
  <option>barbie</option>
  <option>spacewar</option>
  <option>pitfall</option>
  <option>mega man</option>
  <option>castlevania</option>
  <option>metroid</option>
  <option>contra</option>
  <option>rayman</option>
  <option>littlebigplanet</option>
  <option>shovel knight</option>
  <option>celeste</option>
  <option>donkey kong</option>
  <option>yoshi's island</option>
  <option>super monkey ball</option>
  <option>ratchet & clank</option>
  <option>limbo</option>
  <option>fez</option>
  <option>ori and the blind forest</option>
  <option>hollow knight</option>
  <option>cuphead</option>
  <option>ori and the will of the wisps</option>
</datalist>

</div>

@endsection

        