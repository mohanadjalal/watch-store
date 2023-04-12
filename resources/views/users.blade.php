<x-layout :title="'Users'" :css="'users.css'">

    <div class="users">
        <div class="user">
            <h2>#</h2>
            <h2>Name</h2>
            <h2>Username</h2>
            <h2>Email</h2>
            <h2>UserType</h2>
        </div>
        @foreach ($users as $user)
            <div class="user">
                <h4>{{ $user->id }}</h4>
                <h4>{{ $user->name }}</h4>
                <h4>{{ $user->username }}</h4>

                <h4> {{ $user->email }}</h4>
                <h4> {{ $user->isAdmin ? 'Admin' : 'Customer' }}</h4>
            </div>
        @endforeach
    </div>
</x-layout>
