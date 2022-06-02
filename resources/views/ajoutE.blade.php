@extends('layouts.app')
<link rel="stylesheet" href=" {{ asset ('css/bootstrap.min.css') }}">  
<link rel="stylesheet" href=" {{ asset ('css/formuInscri.css') }}">

@section('content')

    <div class="container sup">
        <p class="ajout"> Ajouter des Abonnés</p>
    </div>

    <div class="container">
        <form method="post" action="" class="formu py-5">


            <label for="nom">
                <p id="nom" class="gx-3"><img src="../images/name.png" alt="" width="40" class=""></p>
            </label>
            <input id="nomi" type="text" required name="nom" placeholder="Nom" class="element" style="">


            <label for="numero">
                <p id="num" ><img src="../images/phone.png" alt="" width="40"></p>
            </label>
            <input id="numi" type="text" required name="numero" placeholder="Numero de telephone" class="element" > <br>

            <label for="prenom">
                <p id="prenm"><img src="../images/name.png" alt="" width="40"></p>
            </label>
            <input id="prenmi" type="text" required name="prenom" placeholder="Prenom" class="element" >

            <label for="mail">
                <p id="mail" ><img src="../images/mail.png" alt="" width="40"></p>
            </label>
            <input id="maili" type="email" required name="mail" placeholder="Email" class="element" > <br>

            <label for="dNaissance">
                <p id="naiss"><img src="../images/birth.png" alt="" width="40"></p>
            </label>
            <input id="naissi" type="date" required name="dNaissance" placeholder="Date de naissance" class="element" >

            <label for="debut">
                <p id="abon" ><img src="../images/date.png" alt="" width="40"></p>
            </label>
            <input id="aboni" type="date" required name="debut" placeholder="Début d'abonnement" class="element" >

            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-5">
                        <input type="submit" value="Enregistrer" name="enregistrer" class="enregi" style="width: 190px; height:70px; background:red; border-radius :20px;">
                    </div>
                </div>
            </div>



        </form>
    </div>

    <center>
        <a href='#'>
            <img src='../images/+.png' alt=''>
        </a>
    </center>

@endsection