@extends('layouts.app', ['title' => __('Biodata Jabatan Jabatan | '.$kode_jabatan)])

@section('content')
@include('admin.header', ['halaman' => __('Biodata Jabatan | '.$kode_jabatan)])

<div class="container-fluid mt--7">
  <div class="row justify-content-center">
    <div class="col-xl-12 order-xl-1 mb-3">
     
      <div class="card shadow mb-3">
        <div class="card-header bg-white border-0"> 
          <div class="row align-items-center">
            <div class="mx-auto mt-4">
              <h3 class="text-center">{{ __('Biodata Pegawai Jabatan '. $jabatan->datajabatan->nama_jabatan) }}</h3>
            </div>
          </div>
        </div>
        
        <div class="card-body">
          @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          @if ($errors->any())
          <div class="alert alert-danger my-2 text-center" role="alert">
            @foreach ($errors->all() as $error)
            <strong>{{ $error }}</strong><br>
            @endforeach
          </div>
          @endif
          @if (session('Errors'))
          <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            {{ session('Errors') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
        
          <form role="form" action ="{{ route('biodata_jabatan.update',[$jabatan->kode_jabatan]) }}" method="POST">
            @method('PUT')
            @csrf
            @php
            $i = 0;
            @endphp                           
            
            @if($biodata->first() == NULL)
            <div class="container-fluid mt--1">
              <div class="row justify-content-center">
                <div class="col-xl-8 order-xl-1 mb-2">
                  <div class="card shadow mb-2">
                    <div class="card-header bg-black border-0"> 
                      <div class="row align-items-center">
                        <div class="mx-auto mt-2" >             
                          <div class="form-group row ">
                            <label for="nip" class="col-md-3 col-form-label">{{ __('Nomor Induk Pegawai') }}</label>
                              <div class="col-md-9">
                                <input type="text" name="nip[]" id="nip{{ str($i+1) }}"
                                class="form-control form-control-{{ $errors->has('nip') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('Masukkan Nomor Induk Pegawaii') }}" value="{{ old('nip'.str($i+1)) }}" 
                                min = "0" required autofocus>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label for="nama" class="col-md-3 col-form-label">{{ __('Nama Pegawai') }}</label>
                            <div class="col-md-9 " >
                              <input type="text" name="nama[]" id="nama{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('nama') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Masukkan Nama Pegawai') }}" value="{{ old('nama'.str($i+1)) }}" 
                              min = "0" required autofocus>
                            </div>
                          </div>
                          

                          <div class="form-group row">
                            <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-3">
                              <input type="text" name="tempat_lahir[]" id="tempat_lahir{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Tempat Lahir') }}" value="{{ old('tempat_lahir'.str($i+1)) }}" 
                              min = "0" required autofocus>
                            </div>
                            
                            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                              <input type="date" name="tanggal_lahir[]" id="tanggal_lahir{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('tanggal_lahir') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Bulan') }}" value="{{ old('tanggal_lahir'.str($i+1)) }}" 
                              min = "0" required autofocus>                
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="masa_kerja_jabatan_tahun" class="col-sm-3 col-form-label">Masa Kerja Jabatan</label>
                            <div class="col-sm-2">
                              <input type="text" name="masa_kerja_jabatan_tahun[]" id="masa_kerja_jabatan_tahun{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('masa_kerja_jabatan_tahun') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Tahun') }}" value="{{ old('masa_kerja_jabatan_tahun'.str($i+1)) }}" 
                              min = "0" required autofocus>
                            </div>
                            
                            <label for="masa_kerja_jabatan_tahun" class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-2">
                              <input type="text" name="masa_kerja_jabatan_bulan[]" id="masa_kerja_jabatan_bulan{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('masa_kerja_jabatan_bulan') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Bulan') }}" value="{{ old('masa_kerja_jabatan_bulan'.str($i+1)) }}" 
                              min = "0" required autofocus>                
                            </div>
                            <label for="masa_kerja_jabatan_bulan" class="col-sm-2 col-form-label">Bulan</label>
                          </div>

                          <div class="form-group row">
                            <label for="masa_kerja_keseluruhan_tahun" class="col-sm-3 col-form-label">Masa Kerja Keseluruhan</label>
                            <div class="col-sm-2">
                              <input type="text" name="masa_kerja_keseluruhan_tahun[]" id="masa_kerja_keseluruhan_tahun{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('masa_kerja_keseluruhan_tahun') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Tahun') }}" value="{{ old('masa_kerja_keseluruhan_tahun.'.str($i+1)) }}"
                              min = "0" required autofocus>                         
                            </div>
                            <label for="masa_kerja_keseluruhan_tahun" class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-2">
                              <input type="text" name="masa_kerja_keseluruhan_bulan[]" id="masa_kerja_keseluruhan_bulan{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('masa_kerja_keseluruhan_bulan') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Bulan') }}" value="{{ old('masa_kerja_keseluruhan_bulan.'.str($i+1)) }}"
                              min = "0" required autofocus>                                        
                            </div>
                            <label for="masa_kerja_keseluruhan_bulan" class="col-sm-2 col-form-label">Bulan</label>
                          </div>
                      
                          <div class="form-group row">
                              <label for="riwayat" class="col-sm-3 col-form-label">Riwayat</label>
                              <div class="col-sm-9">
                                <input type="text" name="riwayat[]" id="riwayat{{ str($i+1) }}"
                                class="form-control form-control-{{ $errors->has('riwayat') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('Riwayat') }}" value="{{ old('riwayat.'.str($i+1)) }}"
                                min = "0" required autofocus>                   
                                </div>
                          </div>  

                          <div class="form-group row">
                            <label for="tahun_diangkat" class="col-sm-3 col-form-label">Tahun Diangkat</label>
                            <div class="col-sm-2">
                              <input type="text" name="tahun_diangkat" id="tahun_diangkat{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('tahun_diangkat') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Tahun') }}" value="{{ old('tahun_diangkat.'.str($i+1)) }}" 
                              min = "0" required autofocus>            
                            </div>
                          <label for="tahun_pensiun" class="col-sm-3 col-form-label">Tahun Pensiun</label>
                            <div class="col-sm-2">
                              <input type="text" name="tahun_pensiun[]" id="tahun_pensiun{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('tahun_pensiun') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Tahun') }}" value="{{ old('tahun_pensiun.'.str($i+1)) }}" 
                              min = "0" required autofocus>     
                            </div>
                          </div> 
                          
                          <div class="form-group row">
                            <label for="pangkat" class="col-sm-3 col-form-label">Pangkat/Gol.Ruang</label>
                            <div class="col-sm-4 ">
                              <select name="pangkat[]" id="pangkat{{ str($i+1) }}" class="form-control form-control-{{ $errors->has('pangkat') ? ' is-invalid' : '' }}" required autofocus>
                                <option value="">-- Pilih Pangkat --</option>
                                <option value="Juru" {{ old('pangkat.'.str($i+1)) == 'Juru' ? 'selected' : '' }}>Juru</option>
                                <option value="Juru Muda TK.I" {{ old('pangkat.'.str($i+1)) == 'Juru Muda TK.I' ? 'selected' : '' }}>Juru Muda TK.I</option>
                                <option value="Juru Muda" {{ old('pangkat.'.str($i+1)) == 'Juru Muda' ? 'selected' : '' }}>Juru Muda</option>
                                <option value="Pengatur" {{ old('pangkat.'.str($i+1)) == 'Pengatur' ? 'selected' : '' }}>Pengatur</option>
                                <option value="Pengatur Muda TK.I" {{ old('pangkat.'.str($i+1)) == 'Pengatur Muda TK.I' ? 'selected' : '' }}>Pengatur Muda TK.I</option>
                                <option value="Pengatur Muda" {{ old('pangkat.'.str($i+1)) == 'Pengatur Muda' ? 'selected' : '' }}>Pengatur Muda</option>
                                <option value="Pembina Utama Madya" {{ old('pangkat.'.str($i+1)) == 'Pembina Utama Madya' ? 'selected' : '' }}>Pembina Utama Madya</option>
                                <option value="Pembina Utama Muda" {{ old('pangkat.'.str($i+1)) == 'Pembina Utama Muda' ? 'selected' : '' }}>Pembina Utama Muda</option>
                                <option value="Pembina TK.I" {{ old('pangkat.'.str($i+1)) == 'Pembina TK.I' ? 'selected' : '' }}>Pembina TK.I</option>
                                <option value="Pembina" {{ old('pangkat.'.str($i+1)) == 'Pembina' ? 'selected' : '' }}>Pembina</option>
                              </select>             
                            </div>

                           
                            <div class="col-sm-4" >
                              <select name="golongan[]" id="golongan{{ str($i+1) }}" class="form-control form-control-{{ $errors->has('golongan') ? ' is-invalid' : '' }}" required autofocus>
                                <option value="">-- Pilih Golongan --</option>
                                <option value="I.c" {{ old('golongan.'.str($i+1)) == 'I.c' ? 'selected' : '' }}>I.c</option>
                                <option value="I.b" {{ old('golongan.'.str($i+1)) == 'I.b' ? 'selected' : '' }}>I.b</option>
                                <option value="I.a" {{ old('golongan.'.str($i+1)) == 'I.a' ? 'selected' : '' }}>I.a</option>
                                <option value="II.c" {{ old('golongan.'.str($i+1)) == 'II.c' ? 'selected' : '' }}>II.c</option>
                                <option value="II.b" {{ old('golongan.'.str($i+1)) == 'II.b' ? 'selected' : '' }}>II.b</option>
                                <option value="III.d" {{ old('golongan.'.str($i+1)) == 'III.d' ? 'selected' : '' }}>III.d</option>
                                <option value="III.c" {{ old('golongan.'.str($i+1)) == 'III.c' ? 'selected' : '' }}>III.c</option>
                                <option value="III.b" {{ old('golongan.'.str($i+1)) == 'III.b' ? 'selected' : '' }}>III.b</option>
                                <option value="III.a" {{ old('golongan.'.str($i+1)) == 'III.a' ? 'selected' : '' }}>III.a</option>
                                <option value="IV.c" {{ old('golongan.'.str($i+1)) == 'IV.c' ? 'selected' : '' }}>IV.c</option>
                                <option value="IV.b" {{ old('golongan.'.str($i+1)) == 'IV.b' ? 'selected' : '' }}>IV.b</option>
                                <option value="IV.a" {{ old('golongan.'.str($i+1)) == 'IV.a' ? 'selected' : '' }}>IV.a</option>
                              </select>          
                            </div>
                          </div>   
                            
                           
                          <div class="form-group row">
                            <label for="jenjang_pendidikan" class="col-sm-3 col-form-label">Jenjang Pendidikan</label>
                            <div class="col-sm-9">
                              <select name="jenjang_pendidikan[]" id="jenjang_pendidikan{{ str($i+1) }}" class="form-control form-control-{{ $errors->has('jenjang_pendidikan') ? ' is-invalid' : '' }}" required autofocus>
                                <option value="">-- Pilih Jenjang Pendidikan --</option>
                                <option value="SD" {{ old('jenjang_pendidikan.'.str($i+1)) == 'SD' ? 'selected' : '' }}>SD</option>
                                <option value="SMP" {{ old('jenjang_pendidikan.'.str($i+1)) == 'SMP' ? 'selected' : '' }}>SMP</option>
                                <option value="SMA" {{ old('jenjang_pendidikan.'.str($i+1)) == 'SMA' ? 'selected' : '' }}>SMA</option>
                                <option value="D1" {{ old('jenjang_pendidikan.'.str($i+1)) == 'D1' ? 'selected' : '' }}>D1</option>
                                <option value="D2" {{ old('jenjang_pendidikan.'.str($i+1)) == 'D2' ? 'selected' : '' }}>D2</option>
                                <option value="D3" {{ old('jenjang_pendidikan.'.str($i+1)) == 'D3' ? 'selected' : '' }}>D3</option>
                                <option value="S1" {{ old('jenjang_pendidikan.'.str($i+1)) == 'S1' ? 'selected' : '' }}>S1</option>
                                <option value="S2" {{ old('jenjang_pendidikan.'.str($i+1)) == 'S2' ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ old('jenjang_pendidikan.'.str($i+1)) == 'S3' ? 'selected' : '' }}>S3</option>
                              </select>                  
                            </div>
                          </div> 
                    

                          <div class="form-group row">
                            <label for="jurusan" class="col-md-3 col-form-label">{{ __('Jurusan') }}</label>
                            <div class="col-md-9 " >
                              <input type="text" name="jurusan[]" id="jurusan{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('jurusan') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Jurusan') }}" value="{{ old('jurusan.'.str($i+1)) }}"
                              min = "0" required autofocus>
                            </div>
                          </div> 

                        </div> 
                      </div> 
                    </div> 
                  </div> 
                </div> 
              </div> 
           
          
            

            <?php $i++;?>

            @else

            @foreach ($biodata as $index)              
            <div class="container-fluid mt--1">
              <div class="row justify-content-center">
                <div class="col-xl-8 order-xl-1 mb-2">
                  <div class="card shadow mb-2">
                    <div class="card-header bg-black border-0"> 
                      <div class="row align-items-center">
                        <div class="mx-auto mt-2" >                               
                          <div class="form-group row ">
                            <label for="nip" class="col-md-3 col-form-label">{{ __('Nomor Induk Pegawai') }}</label>
                              <div class="col-md-9">
                                <input type="text" name="nip[]" id="nip{{ str($i+1) }}"
                                class="form-control form-control-{{ $errors->has('nip') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('Masukkan Nomor Induk Pegawaii') }}" 
                                value="{{ old('nip.'.str($i+1),$index->nip) }}"
                                min = "0" required autofocus>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label for="nama" class="col-md-3 col-form-label">{{ __('Nama Pegawai') }}</label>
                            <div class="col-md-9 " >
                              <input type="text" name="nama[]" id="nama{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('nama') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Masukkan Nama Pegawai') }}" 
                              value="{{ old('nama.'.str($i+1),$index->nama) }}"
                              min = "0" required autofocus>
                            </div>
                          </div>
                          

                          <div class="form-group row">
                            <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-3">
                              <input type="text" name="tempat_lahir[]" id="tempat_lahir{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Tahun') }}" 
                              value="{{ old('tempat_lahir.'.str($i+1),$index->tempat_lahir) }}"
                              min = "0" required autofocus>
                            </div>
                            
                            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-3">
                              <input type="date" name="tanggal_lahir[]" id="tanggal_lahir{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('tanggal_lahir') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Bulan') }}" 
                              value="{{ old('tanggal_lahir.'.str($i+1),$index->tanggal_lahir) }}"
                              min = "0" required autofocus>                
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="masa_kerja_jabatan_tahun" class="col-sm-3 col-form-label">Masa Kerja Jabatan</label>
                            <div class="col-sm-2">
                              <input type="text" name="masa_kerja_jabatan_tahun[]" id="masa_kerja_jabatan_tahun{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('masa_kerja_jabatan_tahun') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Tahun') }}" 
                              value="{{ old('masa_kerja_jabatan_tahun.'.str($i+1),$index->masa_kerja_jabatan_tahun) }}"
                              min = "0" required autofocus>
                            </div>
                            
                            <label for="masa_kerja_jabatan_tahun" class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-2">
                              <input type="text" name="masa_kerja_jabatan_bulan[]" id="masa_kerja_jabatan_bulan{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('masa_kerja_jabatan_bulan') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Bulan') }}" 
                              value="{{ old('masa_kerja_jabatan_bulan.'.str($i+1),$index->masa_kerja_jabatan_bulan) }}"
                              min = "0" required autofocus>                
                            </div>
                            <label for="masa_kerja_jabatan_bulan" class="col-sm-2 col-form-label">Bulan</label>
                          </div>

                          <div class="form-group row">
                            <label for="masa_kerja_keseluruhan_tahun" class="col-sm-3 col-form-label">Masa Kerja Keseluruhan</label>
                            <div class="col-sm-2">
                              <input type="text" name="masa_kerja_keseluruhan_tahun[]" id="masa_kerja_keseluruhan_tahun{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('masa_kerja_keseluruhan_tahun') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Tahun') }}" 
                              value="{{ old('masa_kerja_keseluruhan_tahun.'.str($i+1),$index->masa_kerja_keseluruhan_tahun) }}"
                              min = "0" required autofocus>                         
                            </div>
                            <label for="masa_kerja_keseluruhan_tahun" class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-2">
                              <input type="text" name="masa_kerja_keseluruhan_bulan[]" id="masa_kerja_keseluruhan_bulan{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('masa_kerja_keseluruhan_bulan') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Bulan') }}" 
                              value="{{ old('masa_kerja_keseluruhan_bulan.'.str($i+1),$index->masa_kerja_keseluruhan_bulan) }}"
                              min = "0" required autofocus>                                        
                            </div>
                            <label for="masa_kerja_keseluruhan_bulan" class="col-sm-2 col-form-label">Bulan</label>
                          </div>
                      
                          <div class="form-group row">
                              <label for="riwayat" class="col-sm-3 col-form-label">Riwayat</label>
                              <div class="col-sm-9">
                                <input type="text" name="riwayat[]" id="riwayat{{ str($i+1) }}"
                                class="form-control form-control-{{ $errors->has('riwayat') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('Riwayat') }}" 
                                value="{{ old('riwayat.'.str($i+1),$index->riwayat) }}"
                                min = "0" required autofocus>                   
                              </div>
                          </div>  

                          <div class="form-group row">
                            <label for="tahun_diangkat" class="col-sm-3 col-form-label">Tahun Diangkat</label>
                            <div class="col-sm-2">
                              <input type="text" name="tahun_diangkat" id="tahun_diangkat{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('tahun_diangkat') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Tahun') }}" 
                              value="{{ old('tahun_diangkat.'.str($i+1),$index->tahun_diangkat) }}"
                              min = "0" required autofocus>            
                            </div>
                          <label for="tahun_pensiun" class="col-sm-3 col-form-label">Tahun Pensiun</label>
                            <div class="col-sm-2">
                              <input type="text" name="tahun_pensiun[]" id="tahun_pensiun{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('tahun_pensiun') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Tahun') }}" 
                              value="{{ old('tahun_pensiun.'.str($i+1),$index->tahun_pensiun) }}"
                              min = "0" required autofocus>     
                            </div>
                          </div> 
                          
                          <div class="form-group row">
                            <label for="pangkat" class="col-sm-3 col-form-label">Pangkat/Gol.Ruang</label>
                            <div class="col-sm-4 ">
                              <select name="pangkat[]" id="pangkat{{ str($i+1) }}" class="form-control form-control-{{ $errors->has('pangkat') ? ' is-invalid' : '' }}" required autofocus>
                                <option value="">-- Pilih Pangkat --</option>
                                <option value="Juru" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Juru') ? 'selected' : '' }}>Juru</option>
                                <option value="Juru Muda TK.I" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Juru Muda TK.I') ? 'selected' : '' }}>Juru Muda TK.I</option>
                                <option value="Juru Muda" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Juru Muda') ? 'selected' : '' }}>Juru Muda</option>
                                <option value="Pengatur" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Pengatur') ? 'selected' : '' }}>Pengatur</option>
                                <option value="Pengatur Muda TK.I" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Pengatur Muda TK.I') ? 'selected' : '' }}>Pengatur Muda TK.I</option>
                                <option value="Pengatur Muda" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Pengatur Muda') ? 'selected' : '' }}>Pengatur Muda</option>
                                <option value="Penata" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Penata') ? 'selected' : '' }}>Penata</option>
                                <option value="Penata Muda TK.I" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Penata Muda TK.I') ? 'selected' : '' }}>Penata Muda TK.I</option>
                                <option value="Penata Muda" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Penata Muda') ? 'selected' : '' }}>Penata Muda</option>
                                <option value="Pembina Utama Madya" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Pembina Utama Madya') ? 'selected' : '' }}>Pembina Utama Madya</option>
                                <option value="Pembina Utama Muda" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Pembina Utama Muda') ? 'selected' : '' }}>Pembina Utama Muda</option>
                                <option value="Pembina TK.I" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Pembina TK.I') ? 'selected' : '' }}>Pembina TK.I</option>
                                <option value="Pembina" {{ (old('pangkat.'.str($i+1),$index->pangkat) == 'Pembina') ? 'selected' : '' }}>Pembina</option>
                              </select>                 
                            </div>
                            
                            <div class="col-sm-4" >
                              <select name="golongan[]" id="golongan{{ str($i+1) }}" class="form-control form-control-{{ $errors->has('golongan') ? ' is-invalid' : '' }}" required autofocus>
                                <option value="">-- Pilih Golongan --</option>
                                <option value="I.c" {{ (old('golongan.'.str($i+1),$index->golongan) == 'I.c') ? 'selected' : '' }}>I.c</option>
                                <option value="I.b" {{ (old('golongan.'.str($i+1),$index->golongan) == 'I.b') ? 'selected' : '' }}>I.b</option>
                                <option value="I.a" {{ (old('golongan.'.str($i+1),$index->golongan) == 'I.a') ? 'selected' : '' }}>I.a</option>
                                <option value="II.c" {{ (old('golongan.'.str($i+1),$index->golongan) == 'II.c') ? 'selected' : '' }}>II.c</option>
                                <option value="II.b" {{ (old('golongan.'.str($i+1),$index->golongan) == 'II.b') ? 'selected' : '' }}>II.b</option>
                                <option value="II.a" {{ (old('golongan.'.str($i+1),$index->golongan) == 'II.a') ? 'selected' : '' }}>II.a</option>
                                <option value="III.d" {{ (old('golongan.'.str($i+1),$index->golongan) == 'III.d') ? 'selected' : '' }}>III.d</option>
                                <option value="III.c" {{ (old('golongan.'.str($i+1),$index->golongan) == 'III.c') ? 'selected' : '' }}>III.c</option>
                                <option value="III.b" {{ (old('golongan.'.str($i+1),$index->golongan) == 'III.b') ? 'selected' : '' }}>III.b</option>
                                <option value="III.a" {{ (old('golongan.'.str($i+1),$index->golongan) == 'III.a') ? 'selected' : '' }}>III.a</option>
                                <option value="IV.c" {{ (old('golongan.'.str($i+1),$index->golongan) == 'Iv.c') ? 'selected' : '' }}>IV.c</option>
                                <option value="IV.b" {{ (old('golongan.'.str($i+1),$index->golongan) == 'Iv.b') ? 'selected' : '' }}>Iv.b</option>
                                <option value="IV.a" {{ (old('golongan.'.str($i+1),$index->golongan) == 'Iv.a') ? 'selected' : '' }}>Iv.a</option>
                              </select>         
                            </div>
                          </div>   
                            
                          <div class="form-group row">
                            <label for="jenjang_pendidikan" class="col-sm-3 col-form-label">Jenjang Pendidikan</label>
                            <div class="col-sm-9">
                              <select name="jenjang_pendidikan[]" id="jenjang_pendidikan{{ str($i+1) }}" class="form-control form-control-{{ $errors->has('jenjang_pendidikan') ? ' is-invalid' : '' }}" required autofocus>
                                <option value="">-- Pilih Jenjang Pendidikan --</option>
                                <option value="SD" {{ (old('jenjang_pendidikan.'.str($i+1),$index->jenjang_pendidikan) == 'SD') ? 'selected' : '' }}>SD</option>
                                <option value="SMP" {{ (old('jenjang_pendidikan.'.str($i+1),$index->jenjang_pendidikan) == 'SMP') ? 'selected' : '' }}>SMP</option>
                                <option value="SMA" {{ (old('jenjang_pendidikan.'.str($i+1),$index->jenjang_pendidikan) == 'SMA') ? 'selected' : '' }}>SMA</option>
                                <option value="D1" {{ (old('jenjang_pendidikan.'.str($i+1),$index->jenjang_pendidikan) == 'D1') ? 'selected' : '' }}>D1</option>
                                <option value="D2" {{ (old('jenjang_pendidikan.'.str($i+1),$index->jenjang_pendidikan) == 'D2') ? 'selected' : '' }}>D2</option>
                                <option value="D3" {{ (old('jenjang_pendidikan.'.str($i+1),$index->jenjang_pendidikan) == 'D3') ? 'selected' : '' }}>D3</option>
                                <option value="S1" {{ (old('jenjang_pendidikan.'.str($i+1),$index->jenjang_pendidikan) == 'S1') ? 'selected' : '' }}>S1</option>
                                <option value="S2" {{ (old('jenjang_pendidikan.'.str($i+1),$index->jenjang_pendidikan) == 'S2') ? 'selected' : '' }}>S2</option>
                                <option value="S3" {{ (old('jenjang_pendidikan.'.str($i+1),$index->jenjang_pendidikan) == 'S3') ? 'selected' : '' }}>S3</option>
                              </select>                  
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="jurusan" class="col-md-3 col-form-label">{{ __('Jurusan') }}</label>
                            <div class="col-md-9 " >
                              <input type="text" name="jurusan[]" id="jurusan{{ str($i+1) }}"
                              class="form-control form-control-{{ $errors->has('jurusan') ? ' is-invalid' : '' }}"
                              placeholder="{{ __('Jurusan') }}" 
                              value="{{ old('jurusan.'.str($i+1),$index->jurusan) }}"
                              min = "0" required autofocus>
                            </div>
                          </div> 
                          
                        </div>
                      </div> 
                    </div>    
                  </div>
                </div>
              </div>

              <?php $i++;?>
              @endforeach
              @endif                 
                        
                      

            <div class=" justify-content-center text-center mt-3">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>                    
          </form>
        </div> 
        
      </div>
    </div>
  </div>
</div>


@include('layouts.footers.auth')

@endsection

@push('js')

<script src="{{ asset('argon') }}/js/bootstrap.bundle.js"></script>
@endpush