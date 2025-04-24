<div>
    <h1>Edit Student</h1>
    <form action="/edit-student/{{$data->id}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $data->name }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $data->email }}" required>
        </div>
        <div>
            <label for="batch">Batch:</label>
            <input type="number" id="batch" name="batch" value="{{ $data->batch }}" required>
        </div>
        <button type="submit">Update Student</button>
        <a href="/studentlist">cancel</a>
</div>
