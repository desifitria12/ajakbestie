@extends('layouts.app', ['title' => __('Peta Jabatan | '. $namaopd)])

@section('content')
@include('admin.header', ['halaman' => __('Peta Jabatan | '. $namaopd)])

<div class="container-fluid mt--7">
  <div class="row justify-content-center">
    <div class="col-xl-12 order-xl-1 mb-3">

      <div class="card shadow mb-3">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <div class="mx-auto mt-4">
              <h3 class="text-center">{{('Peta Jabatan '. $namaopd) }}</h3>
            </div>
          </div>
        </div>

        @if (!empty($jabatan_hierarchy))

        <ul class="tree">
          @foreach($jabatan_hierarchy as $nama_jabatan => $children)
          <li>
            <span>{{ $nama_jabatan }}</span>
            @if(count($children) > 0)
            <ul>
              @include('admin.laporan.detail1peta_child', ['children' => $children])
            </ul>
            @endif
          </li>
          @endforeach
        </ul>
        @else
        <div class="alert alert-secondary mx-4" role="alert">
          Belum ada data jabatan yang terdaftar. silahkan mengisi data jabatan terlebih dahulu pada <a
            href="/analisis_jabatan">menu entry data Analisis Jabatan</a>
        </div>
        @endif

      </div>
    </div>
  </div>


  @include('layouts.footers.auth')

  @endsection

  @push('js')

  <script src="{{ asset('argon') }}/js/bootstrap.bundle.js"></script>
  @endpush