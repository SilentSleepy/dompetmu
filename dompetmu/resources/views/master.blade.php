<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Master</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Master Dompet
                </div>
                <div class="card-body">
                    <a href="/master/tambah" class="btn btn-primary">Input Master Dompet Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Referensi</th>
                                <th>Deskripsi</th>
                                <th>Saldo</th>
                                <th>Status</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($master as $m)
                            <tr>
                                <td>{{ $m->nama }}</td>
                                <td>{{ $m->referensi }}</td>
                                <td>{{ $m->deskripsi }}</td>
                                <td>{{ $m->saldo }}</td>
                                <td>
                                        <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        {{ $m->status }}
                                                </button>
                                            </div></td>
                                <td>
                                    <a href="/master/edit/{{ $m->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/master/hapus/{{ $m->id }}" class="btn btn-danger">Hapus</a>
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