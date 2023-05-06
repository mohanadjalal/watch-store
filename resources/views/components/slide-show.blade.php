<div class="slide-show">
    @dd("$images")
    @foreach ($images as $image)
        <h1>asd</h1>
        <img src="{{ asset('storage/images/' . $image->path) }}" alt="">
    @endforeach
</div>
