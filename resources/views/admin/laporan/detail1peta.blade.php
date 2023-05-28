@extends('layouts.app', ['title' => __('Peta Jabatan | '. $namaopd)])

@section('content')
@include('admin.header', ['halaman' => __('Peta Jabatan | '. $namaopd)])

<div class="container-fluid mt--7">
  <div class="row justify-content-center">
    <div class="col-xl-12 order-xl-1 mb-3">
      
      <div class="card shadow mb-3">
        <div class="card-header bg-white border-0"> 
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6 offset-md-3 text-center">
                <h3>{{('Peta Jabatan '. $namaopd) }}</h3>
              </div>
              <div class="col-md-3 text-right">
                <a href="/cetak-peta" class="btn btn-md btn-default p-2"><i class="fa fa-file-pdf"></i> Download</a>
              </div>
            </div>
          </div>
        </div>
        <style>
          .table-container {
            max-width: 500px; /* Atur lebar maksimum kontainer tabel */
            margin: 0 auto; /* Pusatkan kontainer tabel secara horizontal */
          }
        </style>
        
        <div class="card-body">
          <div class="card-header bg-white border-0">
            <div class="container">
                <div class="table-responsive">
                  <div class="table-container">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th class="resizeable">Nama Jabatan</th>
                          <th class="resizeable">Bazeting</th>
                          <th class="resizeable">Formasi/ABK</th>
                          <th class="resizeable">Ket. +/-</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
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
     
      <div class="card shadow mb-3">
        <div class="card-header bg-white border-0"> 
          <div class="row align-items-center">
            <div class="mx-auto mt-4">
              <h3 class="text-center">{{('Peta Jabatan '. $namaopd) }}</h3>
            </div>
          </div>
        </div>
        
        {{-- <div class="d-flex">
          <div>{{ $parentJabatan['parent_jabatan'] }}</div>
          <div class="ml-5">
            @foreach ($parentJabatan['child_data'] as $child)
                <div>{{ $child }}</div>
            @endforeach
          </div>
        </div> --}}
        
    </div>
  </div>
</div>

@include('layouts.footers.auth')

@endsection

@push('js')

<script src="{{ asset('argon') }}/js/bootstrap.bundle.js"></script>
@endpush