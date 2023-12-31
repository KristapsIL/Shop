<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$product->name}}</title>
</head>
<body>
  <main>
    <h1>{{$product->name}}</h1>
    <img src={{$product->imageURL}} alt="{{$product->name}}" width="200px"/>
    <p>{{$product->description}}
    </p>
    <p>{{$product->price}} EUR</p>
    <form method="POST" action="/products/{{$product->id}}">
    @csrf
    @method("DELETE")
    <button>DELETE!?</button>
    </form>
  </main>
</body>
</html>