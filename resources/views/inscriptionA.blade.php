@extends('layouts.app')

<link rel="stylesheet" href=" {{ asset ('css/inscriptionA.css') }}">

@section('content')

    <div class=" corps">
            
            <a class="logo" href="#"><img src="../images/logoauf.png" alt="logo"></a>
        <center>
                <form method="post" action="admins">
                    @csrf
                    <div class="sup">
                        <div class="pre">
                            <img src="../images/Groupe 14.png" width="170px" alt="">
                        </div>

                        <div class="entree">
                            <label for="nom"> <img src="../images/Groupe 15.png" width="71px" alt=""></label>
                            <input type="text" name="nom" required placeholder="Nom"> <br>

                            <label for="prenom"> <img src="../images/Groupe 16.png" width="71px" alt=""></label>
                            <input type="text" required name="prenom" placeholder="Prenom(s)"> <br>

                            <label for="email"> <img src="../images/Groupe 16.png" width="71px" alt=""></label>
                            <input type="email" required name="email" placeholder="E-mail"> <br>

                            <label for="password"> <img src="../images/Groupe 16.png" width="71px" alt=""></label>
                            <input type="password" required name="password11" placeholder=" Mot de passe"> <br>

                            <label for="Cpassword"> <img src="../images/Groupe 16.png" width="71px" alt=""></label>
                            <input type="password" required name="Cpassword" placeholder="Confirmer le mot de passe"> <br>

                            <a href="#"> Se connecter</a>
                        </div>
                    </div>
                    <div class="infe">
                        <input name="enregistrer" type="submit" value="S'enregistrer">
                    </div>

                </form>
                <br> <br> <br> <br>


            </center>
    </div>


@endsection