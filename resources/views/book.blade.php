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
<h1>Add Book</h1>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif

<form method="post" action={{route('add_book')}}>
    @csrf
    <label for="text" class="form-label">SKU</label>
    <input type="text" name="sku" id="text" placeholder="Insert SKU"><br>
    <label for="text" class="form-label">Name</label>
    <input type="text" name="name" id="text" placeholder="Insert Name"><br>
    <label for="text" class="form-label">Price</label>
    <input type="text" name="price" id="text" placeholder="Insert Price"><br>
    <label for="text" class="form-label">Weight</label>
    <input type="text" name="weight" id="text" placeholder="Insert Weight"><br>
    <button type="submit" class = "btn btn-successes">Save</button>
    <a href="/add" class="btn btn-secondary my-2">Back</a>
</form>


</body>
</html>
