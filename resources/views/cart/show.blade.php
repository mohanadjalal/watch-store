<x-layout :title="'Cart'" :css="'cart.css'">

    <div class="cart-table">
        <h2>Your cart </h2>

        <div class="table-header">
            <div>img</div>
            <div>Product Name </div>
            <div>Price</div>
            <div>Quantity</div>
            <div>Total</div>
            <div></div>


        </div>

        @foreach ($carts as $cart)
            <div class="table-row">
                <div>img</div>
                <div>{{ $cart->product_name }} </div>
                <div>{{ $cart->total }}$</div>
                <div>{{ $cart->quantity }}</div>
                <div>{{ $cart->total * $cart->quantity }}$</div>
                <div>
                    <form class="cart-form" action="cart/destroy/{{ $cart->id }}" method="post">
                        @csrf
                        <button class="btn-delete" type="submit"> &#10005;</button>
                    </form>
                </div>

            </div>
        @endforeach

    </div>

</x-layout>
