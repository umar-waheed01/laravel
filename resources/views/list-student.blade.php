<div>
    <h1>Student List</h1>
    <form action="/search" method="GET" class="search-form">
        <input type="text" name="search" placeholder="Search with name" value="{{ $search ?? '' }}">

        <button type="submit">Search</button>
    </form>

    <form action="delete-multi" method="post">
        @csrf
        <button type="submit">Delete</button>
    <table class="table">
        <thead>
            <tr>
                <th>select</th>
                <th>Name</th>
                <th>Email</th>
                <th>Batch</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $student)
                <tr>
                    <td><input type="checkbox" name="id[]" value="{{$student->id}}"></td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->batch }}</td>
                    <td><a href="{{ url('studentdelete/' . $student->id) }}">Delete</a>
                        <a href="{{ url('studentedit/' . $student->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</form>
    <div class="pagination">
        <div class="pagination">
            <a href="{{ $data->previousPageUrl() }}" class="prev">Previous</a>
            @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                <a href="{{ $url }}" class="{{ $page == $data->currentPage() ? 'active' : '' }}">{{ $page }}</a>
            @endforeach
            <a href="{{ $data->nextPageUrl() }}" class="next">Next</a>
        </div>
     </div       
</div>

<style>
    .search-form {
        margin-bottom: 20px;
    }

    .search-form input[type="text"] {
        padding: 8px;
        width: 200px;
        margin-right: 10px;
    }

    .search-form button {
        padding: 8px 12px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .table th {
        background-color: #f2f2f2;
    }
    .table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .table tr:hover {
        background-color: #ddd;
    }
    .table th, .table td {
        text-align: left;
    }
    .table th {
        background-color: #4CAF50;
        color: white;
    }
    .table td a {
        margin-right: 10px;
        text-decoration: none;
        color: #007BFF;
    }
    .table td a:hover {
        text-decoration: underline;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }
    h1 {
        color: #333;
        margin-bottom: 20px;
    }
    form {
        display: flex;
        flex-direction: column;
    }
    input[type="text"],
    input[type="email"],
    input[type="number"] {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: #218838;
    }
    a {
        display: inline-block;
        margin-top: 10px;
        text-decoration: none;
        color: #007BFF;
    }
    a:hover {
        text-decoration: underline;
    }
    h1 {
        margin-bottom: 20px;
    }
    div {
        width: 400px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .pagination a {
        margin: 0 5px;
        text-decoration: none;
        color: #007BFF;
        padding: 8px 12px;
        border-radius: 4px;
    }
    .pagination a:hover {
        background-color: #f0f0f0;
    }
    .pagination a.active {
        background-color: #007BFF;
        color: white;
    }
    .pagination a.prev, .pagination a.next {
        font-weight: bold;
    }
    .pagination a.prev:hover, .pagination a.next:hover {
        background-color: #0056b3;
    }
    .pagination a.active:hover {
        background-color: #0056b3;
    }
    .pagination a.prev, .pagination a.next {
        font-weight: bold;
    }
    .pagination a.prev:hover, .pagination a.next:hover {
        background-color: #0056b3;
    }   
    
</style>
