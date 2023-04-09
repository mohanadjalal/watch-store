@auth

    @if (auth()->user()->cart()->count() && request()->path() !== 'cart')
        <div class="cart collapse" id="cart">
            <div class="cart-header" id="cart-header">
                <h4> <b id="cart-name"> &ensp;Show Cart</b>
                    <span class="count">{{ auth()->user()->cart()->count() }}</span>
                </h4>
            </div>

            <div class="cart-list hide" id="cart-list">
                <div class="cart-item-header">
                    <h4>Product </h4>
                    <h4>Quantity</h4>
                    <h4 style="border: none"> Total </h4>
                    <h4 style="border: none"> </h4>


                </div>


                @foreach (auth()->user()->cart()->get() as $cart)
                    <div class="cart-item">
                        <h4 class="flex-item">{{ $cart->product_name }}</h4>
                        <h4 class="flex-item">X{{ $cart->quantity }}</h4>
                        <h4 class="flex-item">{{ $cart->total * $cart->quantity }}$</h4>

                        <form style="border: none" class="flex-item" action="/cart/destroy/{{ $cart->id }}"
                            method="POST">
                            @csrf
                            <button type="submit">Del</button>
                        </form>
                    </div>
                @endforeach
            </div>

        </div>
    @endif
@endauth

@if (session()->has('cart'))
    <span class="flash"> {{ session()->get('cart') }} </span>
@endif
