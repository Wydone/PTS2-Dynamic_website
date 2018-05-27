@extends('layouts.app')

@section('content')

  <img class"separateur" src="img/separator.png" width="100" height="80">

<div class="createAccountContent">

  <h3>CREER UN COMPTE</h3>
  <input class="inputCANomP" type="text" placeholder="Nom">
  <input class="inputCANomP" type="text" placeholder="Prénom"><br>

  <p> Email (identifiant)</p>
  <input class="inputCAEmail" type="text">
  <p>Choisir un mot de passe</p><br>
  <input class="inputMdpCA" type="password"><br>
  <p>Confirmer le moot de passe</p><br>
  <input class="inputMdpCA" type="password"><br>
  <p>Date de naissance</p><br>
  <input class="inputDateCA" type="date"><br>

  <button class="btnConfirmationCA" type="submit" >Valider</button>
  <button class="btnAnnulerCA" type="submit" >Annuler</button>
</div>
@endsection
