<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP 002</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <div class="col s12">
            <h1>TP 001 LARAVEL 10</h1>
            <hr>
    <a href="/ajouter" class=" btn btn-primary">Ajouter</a>
    <hr>
    
    @if (session ('status'))
         <div class=" alert alert-succes">
            {{session ('status')}}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Option</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            // Incrementation pour afficher par ordre croisant
                $ide = 1;
            @endphp
            @foreach (  $etudiants as  $etudiant)
             <tr>
               <td> {{$ide }}</td>
               <td> {{$etudiant -> nom}}</td>
               <td> {{$etudiant -> prenom}}</td>
               <td> {{$etudiant -> option}}</td>
                <td>
                    <a href="/update-etudiant/{{$etudiant -> id}}" class="btn btn-info">Update</a>
                    <a href="/delete-etudiant/{{$etudiant -> id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @php
                 $ide += 1
                 // Incrementation pour afficher par ordre croisant
            @endphp

            @endforeach
           
        </tbody>
            
           


    </table>

        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>