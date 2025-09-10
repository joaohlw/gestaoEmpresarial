@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
<h2 class="fw-bold text-indigo mb-4">Lista de Produtos</h2>
<div class="row g-4">
  <div class="col-md-4">
    <x-card-produto id="1" nome="Silksong" imagem="https://upload.wikimedia.org/wikipedia/pt/8/86/Hollow_Knight_Silksong_cover.jpeg" />
  </div>
  <div class="col-md-4">
    <x-card-produto id="2" nome="GTA VI" imagem="https://i.pinimg.com/736x/ad/be/df/adbedf035a26b9c20741c45194776c41.jpg" />
  </div>
  <div class="col-md-4">
    <x-card-produto id="3" nome="Ghost of yotei" imagem="https://m.media-amazon.com/images/M/MV5BODA2YzRkODktNTIwYi00ZDk1LThlMTAtYzE4MGEyODM4NzZlXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" />
  </div>
</div>
@endsection


