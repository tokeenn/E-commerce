@extends('layouts.default')
@section('main')
<link rel="stylesheet" href="css/styleStore.css">
 <body>
 <a id="cart_logo" href="/cart"></a>
 <div id="cart_content"> </div>
<script src="{{ asset('js/cart.js') }}"></script>
<script>display_cart()</script>
</body>
@endsection 