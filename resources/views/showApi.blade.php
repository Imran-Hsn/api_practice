<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>E-mail</td>
    </tr>
    @foreach ($students as $student)
    <!-- <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
    </tr> -->

    <tr>
        <td>{{ $student['id']}}</td>
        <td>{{ $student['name'] }}</td>
        <td>{{ $student['email'] }}</td>
    </tr>
        @endforeach
</table>






<style>
    table, td, tr {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
        text-align: center;
    }
</style>