<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Uang Masuk</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Uang Masuk
                </div>
                <div class="card-body">
                    <a href="/uang-masuk/tambah" class="btn btn-primary">Input Uang Masuk Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Dompet</th>
                                <th>Kategori</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($uang_masuk as $um)
                                <tr>
                                    <td>{{ $um->master_id }}</td>
                                    <td>{{ $um->kategori_id }}</td>

                                <td>
                                    <a href="/uang-masuk/edit/{{ $um->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/uang-masuk/hapus/{{ $um->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>