<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <table class="table table-dark">
        <thead>
            <tr>

                <th scope="col">product_name</th>
                <th scope="col">price</th>
                <th scope="col">category_id</th>
                <th scope="col">product_image</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <form action="{{ route('edit.products', $product->id) }}" method="post">
                @csrf
                @method('put')
                <td><input type="text" placeholder="product_name" name='product_name'
                        value={{ $product->product_name }}></td>
                <td><input type="text" placeholder="price" name='price' value={{ $product->price }}></td>
                <td><input type="text" placeholder="category_id" name='category_id' value={{ $product->category_id }}>
                </td>
                <td><input type="text" placeholder="product_image" name='product_image'
                        value={{ $product->product_image }}></td>
                <td><input type="submit" value='submit'></td>
            </form>
        </tbody>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>

</html>
