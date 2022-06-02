@extends('layouts.app')

<link rel="stylesheet" href=" {{ asset ('css/bootstrap.min.css') }}">  
<link rel="stylesheet" href=" {{ asset ('css/acceuil.css') }}">

@section('content')

<div class=" corps">

    <a class="logo" href="#"><img src="../images/logoauf.png" alt="logo"></a>
   

    <center>
        <form method="post" action="">
            <div class="sup">
                <div class="pre">
                    <img src="../images/Groupe 14.png" width="170px" alt="">
                </div>

                <div class="entree">
                    <label for="adresse"> <img src="../images/Groupe 15.png" width="71px" alt=""></label>
                    <input type="email" name="adresse" required placeholder="Adresse ID"> <br>
                    <label for="password"> <img src="../images/Groupe 16.png" width="71px" alt=""></label>
                    <input type="password" required name="password" placeholder="Mot de passe"> <br>

                    <a href="inscriptionA.php"> S'enregistrer</a>
                </div>
            </div>
            <div class="infe">
                <input name="connecter" type="submit" value="Se connecter">
            </div>

        </form>
        <br> <br> <br> <br>


    </center>
</div>

@endsection