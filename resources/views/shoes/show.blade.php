<!DOCTYPE html>
<html>
<head>
    <title>Shoe Details</title>
</head>
<body>
    <h1>{{ $shoe->brand }} - {{ $shoe->model }}</h1>
    <p>Size: {{ $shoe->size }}</p>
    <p>Color: {{ $shoe->color }}</p>
    <p>Price: ${{ $shoe->price }}</p>
    <p>Category: {{ $shoe->category }}</p>
    <a href="{{ route('shoes.index') }}">Back to List</a>
</body>
</html>
