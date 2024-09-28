<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$name1}}</h1>
    <h1>{{$name2}}</h1>
    <h1>{{$name2}}</h1>
      {!!$name!!}

   @if ($name == "mohammed")
   <h1>mohammed</h1>
@elseif ($name=="bakir3")
  <h1>bakir3</h1>
@else
   <h1> I don't have any name!</h1>
@endif
<br>
@unless (Auth::check())
    You are not signed in.
@endunless
<br>
@isset($name)
    // $name is defined and is not null...
@endisset
 <br>
@empty($name)
    // $name is "empty"...
@endempty

@auth
    // The user is authenticated...
@endauth
 
@guest
    // The user is not authenticated...
@endguest
</body>
</html>