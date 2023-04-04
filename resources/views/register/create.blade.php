<x-layout :css="'form.css'">


    <h1>register </h1>

    <form class="create-form" action="register" method="post">
        @csrf

        <div class="form-input">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" />

            @error('name')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" />


            @error('email')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-input">
            <label for="username">username</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" />
            @error('username')
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
            <button type="submit">Register</button>
        </div>
    </form>
</x-layout>
