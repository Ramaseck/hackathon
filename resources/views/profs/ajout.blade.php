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
                    <label for="name">name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email" >Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ex:seckrama095@gmail.com">
                </div>
                <div class="form-group">
                    <label for="classe">Matière</label>
                    <input type="text" class="form-control" id="matiere" name="matiere">
                </div>
               
                <button type="submit" class="btn btn-primary" >Ajoutez un Professeur</button>
                <br> 
                <br>
                <a href="/prof" class="btn btn-danger">Revenir a la liste des professeurs</a>
                </form>
                       
       </div>
   </div> 
</div>
    
</body>
</html>