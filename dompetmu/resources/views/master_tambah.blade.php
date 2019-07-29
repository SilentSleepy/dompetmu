<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tambah</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Master Dompet - <strong>TAMBAH DATA</strong> - 
                </div>
                <div class="card-body">
                    <a href="/master" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/master/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama ..">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Referensi</label>
                            <textarea name="referensi" class="form-control" placeholder="referensi .."></textarea>
 
                             @if($errors->has('referensi'))
                                <div class="text-danger">
                                    {{ $errors->first('referensi')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" placeholder="deskripsi .."></textarea>
     
                                 @if($errors->has('deskripsi'))
                                    <div class="text-danger">
                                        {{ $errors->first('deskripsi')}}
                                    </div>
                                @endif
     
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>