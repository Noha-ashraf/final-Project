 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Your Bag</title>
     <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
 </head>

 <body>
     <div class="info col-12 ">
         <h1>YOUR SHOPPING CART</h1>
         <h3> Your Shopping Cart / <a href="shopiee">Home</a>
         </h3>
     </div>
     <div class="container">

         <div id="alerts"></div>
         <div class="productcont container col-3">


             @foreach ($carts as $cart)
                 <div class="card" style="width: 18rem;">
                     <img class="card-img-top" style="width:120px;"
                         src="{{ $cart->product->getFirstMediaUrl('product_image', 'thumb') }}" alt="product_image"
                         class="img-thumbnail">

                     <div class="card-body">
                         <h5 class="productname">{{ $cart->product->product_name }}</h5>
                         <p class="price">{{ $cart->product->price }}$</p>
                         <input type="number" value{{ $cart->product_quantaty }}min=1, max=5>

                     </div>
                 </div>
             @endforeach
         </div>
     </div>
     <div class="cart-container">
         <h2>Go To Chake Out</h2>
         <table>
             <thead>
                 @foreach ($carts as $cart)
                     <tr>
                         <th><strong>{{ $cart->product->product_name }}</strong></th>
                         <th><strong>{{ $cart->product->price }}$</strong></th>
                     </tr>
                 @endforeach
             </thead>

             <tbody id="carttable">
             </tbody>
         </table>
         <hr>
         <table id="carttotals">
             <tr>
                 <td><strong>Items</strong></td>
                 <td><strong>Total</strong></ td>
             </tr>
             <tr>
                 <td>x <span id="itemsquantity">0</span></td>

                 <td>$<span id="total">0</span></td>
             </tr>
         </table>


         <div class="cart-buttons">
             <button id="emptycart">Empty Cart</button>
             <button id="checkout">Checkout</button>
         </div>
     </div>
     </div>






















































     {{-- start js --}}
     <script>
         /* get cart total from session on load */
         updateCartTotal();

         /* button event listeners */
         document.getElementById("emptycart").addEventListener("click", emptyCart);
         var btns = document.getElementsByClassName('addtocart');
         for (var i = 0; i < btns.length; i++) {
             btns[i].addEventListener('click', function() {
                 addToCart(this);
             });
         }

         /* ADD TO CART functions */

         function addToCart(elem) {
             //init
             var sibs = [];
             var getprice;
             var getproductName;
             var cart = [];
             var stringCart;
             //cycles siblings for product info near the add button
             while (elem = elem.previousSibling) {
                 if (elem.nodeType === 3) continue; // text node
                 if (elem.className == "price") {
                     getprice = elem.innerText;
                 }
                 if (elem.className == "productname") {
                     getproductName = elem.innerText;
                 }
                 sibs.push(elem);
             }
             //create product object
             var product = {
                 productname: getproductName,
                 price: getprice
             };
             //convert product data to JSON for storage
             var stringProduct = JSON.stringify(product);
             /*send product data to session storage */

             if (!sessionStorage.getItem('cart')) {
                 //append product JSON object to cart array
                 cart.push(stringProduct);
                 //cart to JSON
                 stringCart = JSON.stringify(cart);
                 //create session storage cart item
                 sessionStorage.setItem('cart', stringCart);
                 addedToCart(getproductName);
                 updateCartTotal();
             } else {
                 //get existing cart data from storage and convert back into array
                 cart = JSON.parse(sessionStorage.getItem('cart'));
                 //append new product JSON object
                 cart.push(stringProduct);
                 //cart back to JSON
                 stringCart = JSON.stringify(cart);
                 //overwrite cart data in sessionstorage
                 sessionStorage.setItem('cart', stringCart);
                 addedToCart(getproductName);
                 updateCartTotal();
             }
         }
         /* Calculate Cart Total */
         function updateCartTotal() {
             //init
             var total = 0;
             var price = 0;
             var items = 0;
             var productname = "";
             var carttable = "";
             if (sessionStorage.getItem('cart')) {
                 //get cart data & parse to array
                 var cart = JSON.parse(sessionStorage.getItem('cart'));
                 //get no of items in cart
                 items = cart.length;
                 //loop over cart array
                 for (var i = 0; i < items; i++) {
                     //convert each JSON product in array back into object
                     var x = JSON.parse(cart[i]);
                     //get property value of price
                     price = parseFloat(x.price.split('$')[1]);
                     productname = x.productname;
                     //add price to total
                     carttable += "<tr><td>" + productname + "</td><td>$" + price.toFixed(2) + "</td></tr>";
                     total += price;
                 }

             }
             //update total on website HTML
             document.getElementById("total").innerHTML = total.toFixed(2);
             //insert saved products to cart table
             document.getElementById("carttable").innerHTML = carttable;
             //update items in cart on website HTML
             document.getElementById("itemsquantity").innerHTML = items;
         }
         //user feedback on successful add
         function addedToCart(pname) {
             var message = pname + " was added to the cart";
             var alerts = document.getElementById("alerts");
             alerts.innerHTML = message;
             if (!alerts.classList.contains("message")) {
                 alerts.classList.add("message");
             }
         }
         /* User Manually empty cart */
         function emptyCart() {
             //remove cart session storage object & refresh cart totals
             if (sessionStorage.getItem('cart')) {
                 sessionStorage.removeItem('cart');
                 updateCartTotal();
                 //clear message and remove class style
                 var alerts = document.getElementById("alerts");
                 alerts.innerHTML = "";
                 if (alerts.classList.contains("message")) {
                     alerts.classList.remove("message");
                 }
             }
         }
     </script>
     {{-- end js --}}
 </body>

 </html>
