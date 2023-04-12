<x-layout :css="'auth.css'">



    <form class="login-form" action="login" method="post">
        @csrf

        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" />

            @error('email')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <label for="password">password</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}" />
            @error('password')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <button id="auth-btn" type="submit">login</button>
        </div>




        <a class="signup" href="/register">OR Create Account </a>


    </form>
    @error('login')
        <span class="login-error">{{ $message }}</span>
    @enderror

</x-layout>
