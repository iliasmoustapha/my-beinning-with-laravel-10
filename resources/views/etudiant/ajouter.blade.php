<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD IN LARAVEL 10</title>
  </head>
  <body>
    
    

    <div class="container">
        <div class="row">
          <div class="col">
            <h1>AJOUTER UN ETUDIANT - LARAVEL 10</h1>
            <hr>

            @if(session('status'))

                <div class="alert alert-success">
                    {{session('status')}}

                </div>


            @endif

            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{$error}}</li>
                @endforeach
            </ul>

            <form action="/ajouter/traitement" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="Nom" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="Nom" name="Nom">
                </div>
                
                <div class="mb-3">
                    <label for="Prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="Prenom" name="Prenom">
                </div>

                <div class="mb-3">
                    <label for="Classe" class="form-label">Classe</label>
                    <input type="text" class="form-control" id="Classe" name="Classe">
                </div>
                <button type="submit" class="btn btn-primary">AJOUTER UN ÉTUDIANT</button>
                <br><br>
                <a href="\etudiant" class="btn btn-danger">LISTE DES ÉTUDIANTS</a>
              </form>

            

          </div>
          
        </div>
    </div>
      
    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
