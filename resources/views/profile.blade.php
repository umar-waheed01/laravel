<div>
    <h1>Profile Page</h1>
    @if(session('name'))
    <h1>welcome, {{session('name')}}</h1>
    @else
    <h1>no user found in session</h1>
    @endif

    {{print_r(session('allData'));}}
    <br>

    <a href="/logout">Logout</a>
</div>
