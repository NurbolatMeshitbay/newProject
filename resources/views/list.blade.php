<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@foreach($data as $oneData)
    <div>
        <h2>{{$oneData['name']}}</h2>
        {{$oneData['sku']}}<br>
        {{$oneData['price']}}$<br>

        @foreach($oneData['product_additions'] as $key => $productAdd)
            @if($key !=0)
                x
            @endif
                {{$productAdd['additions']['value']}}
        @endforeach

        {{$oneData['type']['attribute']}}
        <br>
    </div>
@endforeach
</body>
</html>
