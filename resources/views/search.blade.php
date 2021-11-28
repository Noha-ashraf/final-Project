  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      </script>
      <link rel="stylesheet" href="{{ asset('css/shopiee.css') }}">
  </head>

  <body>

      <div class="container">
          <form class="form-inline my-2 my-lg-0 col-3 " method="GET" action="{{ route('search.shopiee') }}">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              @if (isset($products))
                  {{-- table products --}}
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Product_Name</th>
                              <th scope="col">Price</th>
                              <th scope="col">Product_image</th>
                              <th scope="col">Category</th>
                          </tr>
                      </thead>
                      <tbody>
                          @if (count($products) > 0)
                              @foreach ($products as $product)
                                  <tr>
                                      <th scope="row">{{ $product->product_name }}</th>
                                      <td>{{ $product->price }}</td>
                                      <td><img src="{{ $product->getFirstMediaUrl('product_image', 'thumb') }}" /
                                              width="120px"></td>
                                      <td>{{ $product->category->category_name }}</td>
                                  </tr>
                              @endforeach
                          @else
                              <tr>
                                  <td>No result found !</td>
                              </tr>
                          @endif
                      </tbody>
                  </table>
              @endif
          </form>
          <br>
          <br>
          <br>
      </div>






























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
