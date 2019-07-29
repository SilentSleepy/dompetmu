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
                    Uang Masuk - <strong>TAMBAH DATA</strong> - 
                </div>
                <div class="card-body">
                    <a href="/uang-masuk" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/uang-masuk/store">
 
                        {{ csrf_field() }}
 
                        {{-- <div class="form-group">
                            <label>Dompet</label>
                            <input type="text" name="master" class="form-control" placeholder="Dompet ..">
 
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
 
                        </div> --}}

                        <div class="form-group">
                                <label for="master">Dompet</label>
                                <select  id="master" class="form-control" name="master" required="required">
                                    {{-- <option value="aktif">aktif</option>
                                    <option value="tidak aktif">tidak aktif</option> --}}
                                    {{-- @foreach($uang_masuk as $row)
                                    <option value="{{ $row->id }}">{{ $data->master_id }} </option>
                                  @endforeach --}}
                                </select> 
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