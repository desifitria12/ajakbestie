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