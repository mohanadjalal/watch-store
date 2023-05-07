@if ($product)
    <div class="product" style="background-image:url('{{asset('storage/' .$product->images()->get()->first()->path) ?? 'default.png'  }}')">
        <a href="/product/{{ $product->id }}">

        </a>
    </div>
@endif
