@if ($product)
    <div class="product" style="background-image:url('{{ $product->image }}')">
        <a href="/product/{{ $product->id }}">

        </a>
    </div>
@endif
