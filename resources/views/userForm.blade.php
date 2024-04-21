<x-nav-link></x-nav-link>

<form action="{{route('createUser')}}" method="post">
    @csrf
    <div class="container">
    <input type="text" name="name"  style="border: 1px solid"/>
    <input type="text" name="email" style="border: 1px solid" />
    <input type="text" name="password" style="border: 1px solid" />
    <button type="submit">Submit</button>
    </div>


</form>
<div>
    @foreach($users as $user)
        <a href="/users/{{$user->id}}">{{$user->name}}</a>
        <br>
    @endforeach



</div>
