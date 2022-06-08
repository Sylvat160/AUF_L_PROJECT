@extends('layouts.app')
<link rel="stylesheet" href=" {{ asset ('css/bootstrap.min.css') }}">  
<link rel="stylesheet" href=" {{ asset ('css/formuInscri.css') }}">

@section('content')

    <div class="container sup">
        <p class="ajout"> Modification</p>
    </div>

    <div class="container">

    @if($errors->any())
        <ul class="alert alert-danger">
            
                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach
        </ul>
    @endif

        <form method="post" action="{{route('etudiant.update' , ['etudiant'=>$etudiant->id])}}" class="formu py-5">

        @csrf

            <input type="hidden" name="_method" value="put">


            <label for="nomE">
                <p id="nom" class="gx-3"><img src="../images/name.png" alt="" width="40" class=""></p>
            </label>
            <input id="nomi" type="text" required name="nomE" placeholder="Nom" class="element" value="{{ $etudiant->nomE }}">


            <label for="numeroE">
                <p id="num" ><img src="../images/phone.png" alt="" width="40"></p>
            </label>
            <input id="numi" type="text" required name="numeroE" value="{{ $etudiant->numeroE }}" placeholder="Numero de telephone" class="element" > <br>

            <label for="prenomE">
                <p id="prenm"><img src="../images/name.png" alt="" width="40"></p>
            </label>
            <input id="prenmi" type="text" value="{{ $etudiant->prenomE }}" required name="prenomE" placeholder="Prenom" class="element" >

            <label for="emailE">
                <p id="mail" ><img src="../images/mail.png" alt="" width="40"></p>
            </label>
            <input id="maili" value="{{ $etudiant->emailE }}" type="email" required name="emailE" placeholder="Email" class="element" > <br>

            <label for="date_naissance">
                <p id="naiss"><img src="../images/birth.png" alt="" width="40"></p>
            </label>
            <input id="naissi" value="{{ $etudiant->date_naissance }}" type="date" required name="date_naissance" placeholder="Date de naissance" class="element" >

            <label for="date_debut">
                <p id="abon" ><img src="../images/date.png" alt="" width="40"></p>
            </label>
            <input id="aboni" type="date" value="{{ $etudiant->date_debut }}" required name="date_debut" placeholder="Début d'abonnement" class="element" >

            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-5">
                        <input type="submit" value="Enregistrer" name="enregistrer" class="enregi" style="width: 190px; height:70px; background:red; border-radius :20px;">
                        <button class="mt-3 btn btn-danger" type="submit" style="height: 50px; float:right;"> <a style="text-decoration: none; color:#fff;" class="navbar-brand" href="{{route('etudiant.liste')}}">Annuler </a> </button>
                    </div>
                    
                </div>
            </div>



        </form>
    </div>

   

@endsection