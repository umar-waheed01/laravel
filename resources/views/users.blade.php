<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <h1>Add New Users</h1>
    {{session('message')}}
    <br>
    <form action="/add" method="post" >
        {{-- <input type="hidden" name="_method" value="put"> --}}
        @csrf
        <input type="text" name="name" placeholder="Enter name">
        <br>
        <input type="text" name="email" placeholder="Enter email">
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <button>Submit</button>
    </form>
    
</div>
