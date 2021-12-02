@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Input Lowongan</div>

                    <div class="card-body">
                        <form action="{{ url('admin/save-lowongan') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
                                <select name="id_perusahaan" id="" class="form-control form-select">
                                    <option value="">Pilih Nama Perusahaan</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>

                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat Perusahaan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat_perusahaan"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Posisi</label>
                                <input type="text" class="form-control" id="exampleFormControlTextarea1"
                                    name="posisi">
                            </div>

                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
