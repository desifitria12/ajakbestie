@extends('layouts.app', ['title' => __('Rekap Biodata Jabatan')])

@section('content')
@include('admin.header', ['halaman' => __('Rekap Biodata Jabatan')])
<div class="container-fluid mt--7">
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Daftar Nama Jabatan, Kelas Jabatan dan Pemangku Jabatan</h3>
              <h3 class="mb-0">{{ __('Di Lingkungan '. $namaopd) }} </h3>
            </div>
            <div class="col-4 text-right">
              <a href="/cetak-laporan-biodata" class="btn btn-md btn-default p-2 "><i class="fa fa-file-excel"></i>
                Download</a>
            </div>
            {{-- <div class="col-4 text-right">
              <a href="#" class="btn btn-sm btn-primary p-2 btnTambah" data-bs-toggle="modal"
                data-bs-target="#tambahModal">Tambah</a>
            </div> --}}
          </div>
          <div class="row justify-content-center mt-3">
            <div class="col-6 text-center">
              @if (session()->has('Success'))
              <div class="alert alert-info my-2" role="alert">
                <strong>{{ session('Success') }}</strong>
              </div>
              @endif
              @if (session()->has('Errors'))
              <div class="alert alert-danger my-2" role="alert">
                <strong>{{ session('Errors') }}</strong>
              </div>
              @endif
              @if ($errors->any())
              <div class="alert alert-danger my-2" role="alert">

                @foreach ($errors->all() as $error)

                <strong>{{ $error }}</strong><br>

                @endforeach

              </div>
              @endif
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table align-items-center table-flush table-hover table-bordered" id="customerList"
              style="width: 100%">
              <thead class="table-default parent">
                <tr>
                    <th rowspan="2" align="center">KODE JABATAN</th>
                    <th rowspan="2" align="center">NAMA JABATAN</th>
                    <th rowspan="2" align="center">UNIT ORGANISASI</th>
                    <th rowspan="2" align="center">KELAS JABATAN</th>
                    <th class="text-center" colspan="3">PEMANGKU JABATAN</th>
                    <th rowspan="2" align="center">Ket</th>
                </tr>
                <tr>
                    <th class="text-center">NAMA</th>
                    <th class="text-center">NIP</th>
                    <th class="text-center">Pangkat/Gol</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($jabatan as $index)
                @foreach($biodata as $databio)
                @php
                $total = 0;
                $tp_total = 0;
                @endphp
                
                @foreach ($index->data_faktor as $data)
                @php
                $total += $data->data_faktor->nilai;
                @endphp
                @endforeach

               
                {{-- {{ dd($tp_total) }} --}}
                @if(($databio->kode_jabatan == $index->kode_jabatan) && ($index->dinas_id == $dinas_id))
                <tr>
                  <th>{{ $index->kode_jabatan }}</th>
                  <th>{{ $index->datajabatan->nama_jabatan }}</th>
                  <th>{{ $index->datajabatan->nama_unit }}</th>
                  
                  <th class="text-center">{{ kelasjabatan2($total) }}</th>
                  
                  <th class="text-center">{{  $databio->nama}}</th>
                  <th class="text-center">{{  $databio->nip}}</th>
                  <th class="text-center">{{  $index->standarkompetensi->pangkat}}</th>

                </tr>
                @endif
                @endforeach
                @endforeach
              </tbody>
             
            </table>
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modal-default"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                  <div class="modal-header">

                    <h3 class="modal-title">Hapus Data Jabatan ?</h3>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                      
                    </button>
                  </div>
                  <form action="" name="deleteForm" id="deleteForm" method="POST">
                    @method('delete')
                    @csrf
                    <input type="hidden" name="id" id="id" class="deleteID">

                    <div class="modal-body">
                      <p>Yakin ingin menghapus <strong id="valuedinas"></strong> ?<br>Semua data seperti
                        data jabatan, inputan dan semua yang berhubungan akan dihapus.</p>
                    </div>
                    <div class=" modal-footer justify-content-center">
                      <button type="submit" class="btn btn-danger btn-delete">Hapus</button>
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center">
            {{ $jabatan->onEachSide(0)->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- @include('admin.manajerial.edit') --}}
  @include('admin.analisis_jabatan.tambahChild')
  @include('admin.analisis_jabatan.tambah')

  @include('layouts.footers.auth')

  @endsection

 