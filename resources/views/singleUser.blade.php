<x-nav-link></x-nav-link>

<div class="container mx-auto">
@if($user)
    <h1>
       {{$user->name}}

    </h1>

    <h1>
        {{$user->email}}
    </h1>
@else
    <h1>No user found</h1>
@endif
</div>

