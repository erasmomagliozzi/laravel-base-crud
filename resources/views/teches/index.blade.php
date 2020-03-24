<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <h1>TUTTE LE SCARPE</h1>
    
    </header>
    @foreach ($teches as $tech)
    <div class="tech">
      <ul>
        <li>Id: {{$tech->id}}</li>
        <li>Name: {{$tech->name}}</li>
        <li>Price: {{$tech->price}}</li>
        <li>Shipping Times: {{$tech->shipping_times}}</li>
        <li>Shop: {{$tech->shop}}</li>
        <li>Description: {{$tech->description}}</li>
        <li>Created at: {{$tech->created_at}}</li>
        <li>Update at: {{$tech->updated_at}}</li>
      </ul>









    </div>

    @endforeach

  </body>
</html>
