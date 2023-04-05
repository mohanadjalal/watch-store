<x-layout :title="'Cart'" :css="'cart.css'">

    <div class="cart-table">
        <h2>Your cart </h2>

        <div class="table-header">
            <div>img</div>
            <div>Product Name </div>
            <div>Price</div>
            <div>Quantity</div>
            <div>Total</div>

        </div>

        @foreach ($carts as $cart)
            <div class="table-row">
                <div>{{ $cart->product_name }} </div>
                <div>{{ $cart->total }}$</div>
                <div>{{ $cart->quantity }}</div>
                <div>{{ $cart->total * $cart->quantity }}$</div>
            </div>
        @endforeach

    </div>

</x-layout>
