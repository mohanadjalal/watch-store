<x-layout :title="'Profile'" :css="'profile.css'">


    <div id="main" class="main">
        <h1 class="name">{{ $user->name }}</h1>
        <h4 class="username">&#64;{{ $user->username }}</h4>
        <hr>
        <div class="contact-info">
            <h2>Contact Info</h2>

            <h3 class=""><span>Email : {{ $user->email }}</span> <span> Phone: {{ $user->phone }} </span>
            </h3>
        </div>

        <hr>

        <div class="location">
            <h3>Location</h3>
            <pre>{{ $user->location }}</pre>
        </div>

        <button id="edit-btn">Edit</button>

    </div>

    <form id="edit-form" action="profile/{{ auth()->user()->id }}" method="post">
        @csrf
        <div class="form-input">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" placeholder="{{ $user->name }}"
                value="{{ old('name') ?? $user->name }}" />


            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" placeholder="{{ $user->username }}"
                value="{{ old('username') ?? $user->username }}">
            @error('username')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" placeholder="{{ $user->email }}"
                value="{{ old('email') ?? $user->email }}">
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-input">
            <label for="phone">Phone</label>
            <input id="phone" type="tel" name="phone" placeholder="{{ $user->phone }}"
                value="{{ old('phone') ?? $user->phone }}">
            @error('phone')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <label for="location">location</label>
            <textarea id="location" type="text" name="location" rows="6" placeholder="{{ $user->location }}"> {{ old('location') ?? $user->location }} </textarea>
            @error('phone')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <button id="submit-btn" type="submit">save</button>

    </form>


    <script src="{{ asset('js/profile.js') }}"></script>
</x-layout>
