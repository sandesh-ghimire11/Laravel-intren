<!DOCTYPE html>
<head>
    <title>Welcome</title>
</head>
<body>
<h1>Welcome to Laravel</h1>
<h1> Add product</h1>
<div class="form-container">
    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="image">Image</label>
        <input type="file" id="image" name="image" required>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="available">Available</option>
            <option value="unavailable">Unavailable</option>
        </select>
        <button type="submit">save Product</button>
    </form>

</div>

</body>
</html>
