@extends('layouts.default')
@section('main')
<head>
<link rel="stylesheet" href="css/styleStore.css">

</head>
 <body>
   <a id="cart_logo" href="/cart"></a>
  @foreach ($products as $product)
  <div class="product">
      <p class="product_title" id="title">{{ $product->title }}</p>
      <p class="product_price" id="price">{{ $product->price }}€</p>
      <p class="product_description" id="desc">{{ $product->description }}</p>
      <p class="product_stock" id="stock">{{ $product->stock }} unités en stock.</p>
      <button class="product_buy_button" onclick="buy({{ $product->id }}, '{{ $product->title }}', '{{ $product->price }}', '{{ $product->stock }}')">BUY</button>
    </div>
  @endforeach
  <script src="{{ asset('js/cart.js') }}"></script>
  <script>display_cart_logo()</script>
</body>
@endsection 