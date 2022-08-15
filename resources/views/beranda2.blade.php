{{-- Menggunakan layout utama--}}
@extends('layouts.html')

{{-- Apapun yg ada dalam section akan menggantikan yield yg dipanggil di main --}}
@section('html')
<div class="row justify-content-center">
    <div class="card bg-light" style="width: 45rem;">   
        <div class="col-lg mt-3 mb-4">
            <div class="card">
                <div class="card-header bg-danger text-light">
                  Yuk Aduin Disini!!
                </div>
            </div>
            <form>
                <div class="mb-3">
                  <label for="tanggal" class="form-label">Tanggal Kejadian</label>
                  <input type="date" class="form-control" id="tanggal" aria-describedby="tanggal" >
                </div>
                <div class="mb-3">
                  <label for="laporan" class="form-label">Isi Laporan</label>
                  <textarea type="text" class="form-control" id="laporan" placeholder="Ceritain Detail Laporannya Yaa"></textarea>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Lampiran Kejadian</label>
                    <input class="form-control" type="file" id="formFile" placeholder="Masukkan Foto Terkait Kejadian">
                  </div>
                
                <button type="submit" class="btn btn-primary">Lapor</button>
              </form>
        </div>
    </div>    
</div>

    
@endsection 