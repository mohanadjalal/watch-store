<x-layout :title="'Create Product '" :css="'product-forms.css'">
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
            <input class="input" type="number" name="price" id="price" step="0.01" required
                value="{{ old('price') }}">
            @error('price')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <label class="label" for="quantity">Quantity : </label>
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

        <div class="file">
            <label class="label" for="image">image : </label>
            <input type="file" name="image" id="image" accept="image/*" value="{{ old('image') }}">

            @error('image')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-btns">
            <a id="cancel-btn" class="btns" href={{ url()->previous() }}>Cancel</a>
            <button type="submit" class="btns" id="save-btn">Save</button>

        </div>

    </form>

</x-layout>
