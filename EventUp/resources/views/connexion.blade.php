@extends('layouts.app')

@section('content')

<div class="connexionContent">
  <img src="/img/logotxt2.png" alt="EventUp" class="logoConnexion">
  <input class="inputEmailConnexion" type="text" placeholder="Email"><br>
  <input class="inputMdpConnexion" type="password" placeholder="Mot de passe"><br>
  <a class="createAccountLink" href="/creercompte">Créer un compte</a> <br>
  <button class="btnConnexion" type="submit" >Connexion</button>
</div>
@endsection
