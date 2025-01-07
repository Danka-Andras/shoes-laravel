<!DOCTYPE html>
<html>
<head>
    <title>Add New Shoe</title>
</head>
<body>
    <h1>Add New Shoe</h1>
    <form action="{{ route('shoes.store') }}" method="POST">
        @csrf
        <label>Brand:</label><br>
        <input type="text" name="brand" required><br>

        <label>Model:</label><br>
        <input type="text" name="model" required><br>

        <label>Size:</label><br>
        <input type="number" name="size" required><br>

        <label>Color:</label><br>
        <input type="text" name="color" required><br>

        <label>Price:</label><br>
        <input type="number" step="0.01" name="price" required><br>

        <label>Category:</label><br>
        <input type="text" name="category" required><br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>
