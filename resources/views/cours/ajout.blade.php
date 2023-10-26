<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
   <div class="container ">
       <div class="row">
           <div class="col s12">
           <H1>Ajout cours</H1> 
           <br>
           @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>

           
                    <form method="post" action="/ajout/traitement" class="form-group"> 
                    @csrf
                <div class="form-group">
                    <label for="nom">Cour</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="prenom" >Date</label>
                    <input type="text" class="form-control" id="date" name="date" placeholder="Ex:Mardi, 12 Octobre , 2023">
                </div>
                <div class="form-group">
                    <label for="classe">Nombre de leçons</label>
                    <input type="text" class="form-control" id="lesson" name="lesson">
                </div>
               
                <button type="submit" class="btn btn-primary" >Ajoutez un etudiant</button>
                <br> 
                <br>
                <a href="/cour" class="btn btn-danger">Revenir a la liste des etudiants</a>
                </form>
                       
       </div>
   </div> 
</div>
    
</body>
</html>