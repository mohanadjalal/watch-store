<x-layout :css="'auth.css'">




    <form class="register-form" action="register" method="post">
        @csrf

        <div class="form-input">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" />

            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" />


            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <label for="username">username</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" />
            @error('username')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <label for="password">password</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}" />
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <button id="auth-btn" type="submit">Register</button>
        </div>

        <a class="signup" href="/login">Already Have Account </a>
    </form>
</x-layout>
