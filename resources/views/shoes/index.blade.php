<!DOCTYPE html>
<html>
<head>
    <title>Shoe Store</title>
</head>
<body>
    <h1>Shoe List</h1>
    <a href="{{ route('shoes.create') }}">Add New Shoe</a>
    <ul>
        @foreach($shoes as $shoe)
            <li>
                {{ $shoe->brand }} - {{ $shoe->model }} 
                <a href="{{ route('shoes.show', $shoe->id) }}">View</a>
                <a href="{{ route('shoes.edit', $shoe->id) }}">Edit</a>
                <form action="{{ route('shoes.destroy', $shoe->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
