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
    <form class="" action="{{(!empty($tech)) ? route('teches.update', $tech->id) : route('teches.store')}}" method="post">
      @csrf
      @if(!empty($shoe))
        @method('PATCH')
       @else
        @method('POST')
      @endif

      <input type="text" name="name" value="{{(!empty($tech)) ? $tech->name : ''}}" placeholder="name">

      <div>

        <input type="text" name="price" value="{{(!empty($tech)) ? $tech->price : ''}}" placeholder="price">

      </div>
      <div>
        <input type="text" name="shop" value="{{(!empty($tech)) ? $tech->shop : ''}}" placeholder="shop">
      </div>
      <div>
        <textarea name="description" cols="30" rows='10'>
          {{(!empty($tech)) ? $tech->description : ''}}
        </textarea>
      </div>
      <div>
        <input type="text" name="shipping_times"
        placeholder="shipping_times" value="{{(!empty($tech)) ? $tech->shipping_times : ''}}">
      </div>

      @if(!empty($tech))
      <input type="hidden" name="id" value="{{$tech->id}}">
      @endif
      <button type="submit" name="button">invia</button>



    </form>

  </body>
</html>
