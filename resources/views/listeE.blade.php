@extends('layouts.app')
<link rel="stylesheet" href=" {{ asset ('css/bootstrap.min.css') }}">  
<link rel="stylesheet" href=" {{ asset ('css/listeA.css') }}">

@section('content')

    <div class="container sup ">
        <p class="voir"> La liste des Abonnés</p>
    </div>


            @if(session()->get('success'))
                <script>
                    swal({
                        title: 'Success',
                        text: "{{ session()->get('success') }}",
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    })
                </script>
            @endif
        

    <div class="d-flex justify-content-between mb-4">
        {{ $etudiants->links() }}
        </div>

    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Numero</th>
                <th scope="col">Mail</th>
                <th scope="col">Date d'abonnement</th>
                <th scope="col" style="width: 70px ;">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
            <tr id="ligne11" style="background: #CC767F;">
                <th scope="row">{{ $loop-> index + 1 }}</th>
                <td>{{$etudiant->nomE}}</td>
                <td>{{$etudiant->prenomE}}</td>
                <td>{{$etudiant->date_naissance}}</td>
                <td>{{$etudiant->numeroE}}</td>
                <td>{{$etudiant->emailE}}</td>
                <td>{{$etudiant->date_debut}}</td>
                <td>
                    <a class="" style="cursor: pointer;"><ion-icon name="trash" style="color: #000;" onclick="if(confirm('voulez vous vraiment supprimer cet etudiant ?')){ document.getElementById('form-{{$etudiant->id}}').submit() }" title="Supprimer"></ion-icon></a>
                    <a href="{{ route('etudiant.edit' ,[ 'etudiant'=>$etudiant->id  ] )}}"><ion-icon name="create" style="color: blue;" title="Modifier" ></ion-icon></a>
                    <form id="form-{{ $etudiant->id }}" action=" {{ route('etudiant.supprimer' , ['etudiant'=>$etudiant->id]) }} " method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    <center>
        <a href="{{ route('etudiant.create') }}" title="Ajouter"> 
            <img src="{{asset('images/plus.png') }}" alt=''>
        </a>
    </center>


    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection