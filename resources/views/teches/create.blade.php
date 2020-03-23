<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('teches.store')}}" method="post">
      @csrf
      <input type="text" name="name" value="" placeholder="name">
      <input type="text" name="price" value="" placeholder="price">

      <input type="text" name="shop" value="" placeholder="shop">
      <input type="text" name="description" value="" placeholder="description">

      <button type="submit" name="button">invia</button>


      @method('POST')

    </form>

  </body>
</html>
