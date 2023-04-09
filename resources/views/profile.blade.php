<x-layout :title="'Profile'" :css="'profile.css'">


    <div class="main">
        <h1 id="name">{{ $user->name }}</h1>
        <h4 id="username">&#64;{{ $user->username }}</h4>
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
    </div>


</x-layout>
