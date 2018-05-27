@extends('layouts.app')

@section('content')

  <div class="contactContent">
    <h2>CONTACT<h2>
    <p> Demande d'information </p>
    <input class="inputContactEmailNom" type="text" placeholder="Email"><br>
    <input class="inputContactEmailNom" type="text" placeholder="Nom Prénom " ><br>
    <textarea class="inputContactMsg" type="text" placeholder="Message"></textarea><br>
    <button class="btnEnvoyer" type="submit" >Envoyer</button>
  </div>
@endsection
