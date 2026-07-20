<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Birth Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataSiswa as $siswa)
                <tr>
                    <td>{{ $siswa->id }}</td>
                    <td>{{ $siswa->name }}</td>
                    <td>{{ $siswa->email }}</td>
                    <td>{{ $siswa->address }}</td>
                    <td>{{ $siswa->birth_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

