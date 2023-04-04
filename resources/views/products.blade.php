<x-layout :css="'products.css'" :title="'Watch|Products'">

    <div class="container ">

        <h1>Products </h1>

        @can('admin')
            <a class="add-btn" href="/products/create">New Product</a>
        @endcan


        <div class="products">

            @foreach ($products as $product)
                <x-product :product="$product"></x-product>
            @endforeach




        </div>
        {{ $products->links() }}
    </div>

</x-layout>
