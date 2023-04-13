<x-layout :css="'products.css'" :title="'Watch|Products'">

    <div class="container ">

        <h1>Products </h1>

        @can('admin')
            <a class="product-btn" href="/products/create">New Product</a>
        @endcan


        <div class="products">
            @if ($products->count())
                @foreach ($products as $product)
                    <x-product :product="$product"></x-product>
                @endforeach
            @else
                <h1>There is no results</h1>
            @endif



        </div>
        {{ $products->links() }}
    </div>

</x-layout>
