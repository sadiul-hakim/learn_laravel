<div>
    <h1>Courses List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Seat</th>
            <th>Price</th>
        </tr>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->seat }}</td>
                <td>{{ $course->price }}</td>
            </tr>
        @endforeach
    </table>
</div>
