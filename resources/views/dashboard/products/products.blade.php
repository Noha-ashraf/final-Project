 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>products</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
         integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 </head>

 <body>
     <table class="table table-striped table-dark">
         <thead>
             <tr>
                 <th scope="col">id</th>
                 <th scope="col">product_name</th>
                 <th scope="col">price</th>
                 <th scope="col">category_id</th>
                 <th scope="col">product_image</th>
                 <th scope="col">update</th>
                 <th scope="col">Delete</th>
             </tr>
         </thead>
         <tbody>
             @foreach ($products as $product)
                 <tr>
                     <th scope="row">{{ $product->id }}</th>
                     <th scope="row">{{ $product->product_name }}</th>
                     <td>{{ $product->price }}</td>
                     <td>{{ $product->category->category_name }}</td>
                     <td><img src="{{ $product->getFirstMediaUrl('product_image', 'thumb') }}" / width="120px"></td>
                     <td><a href="{{ route('update.products', $product->id) }}">Update</a></td>
                     <td><a href="{{ route('delete.products', $product->id) }}">Delete</a></td>
                 </tr>
             @endforeach
             <button><a href="{{ route('create.products') }}">Create</a></button>

         </tbody>
     </table>



















     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
          integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
     </script>
 </body>
 </body>

 </html>
