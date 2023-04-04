<x-layout :title="'Create Product '" :css="'form.css'">
    <form class="create-form" action="/product/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-input">
            <label class="label" class="input" for="title">Title : </label>
            <input class="input" type="text" name="title" id="title" required value="{{ old('title') }}">
            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-input">
            <label class="label" for="price">price : </label>
            <input class="input" type="number" name="price" id="price" required value="{{ old('price') }}">
            @error('price')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <label class="label" for="quantity">Quentity : </label>
            <input class="input" type="number" name="quantity" id="quantity" required value="{{ old('quantity') }}">
            @error('quantity')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-input">
            <label class="label" for="description">Description : </label>
            <textarea class="input" name="description" id="description" cols="30" rows="10" required>{{ old('description') }}</textarea>

            @error('description')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <label class="label" for="image">image : </label>
            <input type="file" name="image" id="image" accept="image/*" value="{{ old('image') }}">

            @error('image')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Add Product</button>
        <a href={{ url()->previous() }}>Cancel</a>

    </form>

</x-layout>
