<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP 002</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text">
        <div class="col s12">
            <h1>TP 001 LARAVEL 10- AJOUTER </h1>
            <hr>
            
                @if (session ('status'))
                    <div class=" alert alert-succes">
                        {{session ('status')}}
                    </div>
                @endif
              <ul>
               
                @foreach ($errors ->all() as $error)
                   <li class="alert alert-danger">{{$error}}</li>
                @endforeach
              </ul>
            
            <form action="/ajouter/traitement" method="POST" class="form-group">
                @csrf
                <form>
                    <div class="form-group">
                        <label for="Nom">Nom </label>
                        <input type="text" class="form-control" id="Nom" name="nom">
                     </div>
                     <div class="form-group">
                        <label for="Prenom">Prenom </label>
                        <input type="text" class="form-control" id="Prenom" name="prenom">
                     </div>
                     <div class="form-group">
                        <label for="Option">Option </label>
                        <input type="text" class="form-control" id="Option" name="option">
                     </div>
                     <hr>
                    <button type="submit" class="btn btn-primary">AJOUTER DES DONNEES</button>
                     <hr>
                     <a href="/etudiant" class="btn btn-success">Révenir à la liste des données</a>
                     
                </form>
            </form>
   

        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>