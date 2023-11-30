<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD IN LARAVEL 10</title>
  </head>
  <body>
    
    

    <div class="container text-center">
        <div class="row">
          <div class="col">
            <h1>CRUD IN LARAVEL 10</h1>
            <hr>
            <a href="/ajouter" class="btn btn-primary">Ajouter un etudiant</a>
            <hr>
            @if(session('status'))

                <div class="alert alert-success">
                    {{session('status')}}

                </div>


            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Classe</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @php
                      $ide = 1;
                  @endphp
                    @foreach($etudiants as $etudiant)
                    <tr>
                        <td>{{ $ide}}</td>
                        <td>{{ $etudiant->Nom}}</td>
                        <td>{{ $etudiant->Prenom}}</td>
                        <td>{{ $etudiant->Classe}}</td>
                        <td>
                            <a href="/update-etudiant/{{ $etudiant->id}}" class="btn btn-info">Update</a>
                            <a href="/delete-etudiant/{{ $etudiant->id}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @php
                    $ide += 1;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            {{$etudiants->links()}}


          </div>
          
        </div>
    </div>
      
    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
