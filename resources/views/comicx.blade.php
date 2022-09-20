<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie</title>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- js --}}
    <script defer src="{{ asset('js/app.js')}}"></script>
</head>
<body>


  @foreach($movies as $movie)
   <div class="card" style="width: 18rem;">
     <div class="card-body">
       <h5 class="card-title">{{$movie->title}}</h5>
       <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
       <p class="card-text">{{$movie->nationality}}</p>
     </div>
   </div>
  @endforeach
</body>
</html>