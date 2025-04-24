<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <table>
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
