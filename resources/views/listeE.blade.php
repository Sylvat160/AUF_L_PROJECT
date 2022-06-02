@extends('layouts.app')
<link rel="stylesheet" href=" {{ asset ('css/bootstrap.min.css') }}">  
<link rel="stylesheet" href=" {{ asset ('css/listeA.css') }}">

@section('content')

    <div class="container sup ">
        <p class="voir"> La liste des Abonnés</p>
    </div>

    <div class="affiche">
        <center> <p id="affi" >
                <span id="nom1" > wefrwer</span>
                <span id="prenom1"> erwefczxfsc</span> 
                <span id="numero1" >dfsdfzsdczd</span>
                <span id="mail1" > dfsdfsdfsd</span>
        </p> </center>
    </div>

@endsection