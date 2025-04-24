<div>
    <h1>Login Form</h1>
    <form action="/login" method="post" >
        @csrf
        <input type="text" name="name" placeholder="Enter name">
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <button>Submit</button>


        @if(session('name'))
    <h1>welcome, {{session('name')}}</h1>
    @else
    <h1>no user found in session</h1>
    @endif
</div>
