<x-layout :css="'form.css'">


    <h1>login </h1>

    <form class="create-form" action="login" method="post">
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
            <button type="submit">login</button>
        </div>


        @error('login')
            <span style="color:red; text-align:center;">{{ $message }}</span>
        @enderror
    </form>
</x-layout>
