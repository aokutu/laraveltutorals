<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

<h1>Students List</h1>

<table border="1" cellpadding="10">

    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>

    @foreach($students as $student)

    <tr>
        <td>{{ strtoupper($student->name) }}</td>
        <td>{{ $student->email }}</td>
    </tr>

    @endforeach

</table>

</body>
</html>