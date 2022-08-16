{{-- Menggunakan layout utama--}}
@extends('layouts.main')


{{-- Apapun yg ada dalam section akan menggantikan yield yg dipanggil di main --}}
@section('container')

<style>
body{ background :#F4F9FF ; }</style>

<div class="container" style="position: absolute;
width: 531px;
height: 29px;
left: 456px;
top: 685px;
font-family: 'Poppins';
font-style: normal;
font-weight: 500;
font-size: 30px;
line-height: 29px;
text-align: center;
color: #000000;
">
        <b>Alur ketika melakukan pengaduan : </b>
</div>

<br><br><br><br><br><br>
<div class="row">
    <div class="col">
        <div class="card" width="30rem" style="background-color: #D9ECFF">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
    </div>

    <div class="col">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
    </div>

    <div class="col">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
    </div>

    <div class="col">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
    </div>
</div>
    
@endsection 

