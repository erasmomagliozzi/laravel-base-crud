<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
      @endif
    </header>
    <form class="" action="{{route('teches.store')}}" method="post">
      @csrf
      <input type="text" name="name" value="" placeholder="name">

      <input type="text" name="price" value="" placeholder="price">

      <input type="text" name="shop" value="" placeholder="shop">

      <input type="text" name="description" value="" placeholder="description">

      <input type="text" name="shipping_times"
      placeholder="shipping_times" value="">

      <button type="submit" name="button">invia</button>


      @method('POST')

    </form>

  </body>
</html>
