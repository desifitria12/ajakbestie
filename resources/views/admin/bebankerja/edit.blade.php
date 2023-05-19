@extends('layouts.app', ['title' => __('Beban Kerja | '.$kode_jabatan)])

@section('content')
@include('admin.header', ['halaman' => __('Beban Kerja | '.$kode_jabatan)])

<div class="container-fluid mt--7">
  <div class="row justify-content-center">
    <div class="col-xl-12 order-xl-1 mb-3">
      {{-- Tugas Pokok Jabatan --}}
      <div class="card shadow mb-3">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <div class="mx-auto mt-4">
              <h3 class="text-center">{{ __('Beban Kerja '. $jabatan->datajabatan->nama_jabatan) }}</h3>
            </div>
          </div>
          <div class="row justify-content-center mt-3 mx-auto">

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
          <div class="table-responsive">
            <table class="table align-items-center table-flush table-bordered" id="customerList" style="width: 100%">
              <thead class="thead-light">
                <tr>
                  {{-- <th scope="col">No</th> --}}
                  <th scope="col-1" class="text-center">NO</th>
                  <th scope="col-2" class=" text-center">Uraian Tugas</th>
                  <th scope="col" class="text-center">Hasil Kerja</th>
                  <th scope="col" class="text-center">Jumlah Hasil</th>
                  <th scope="col" class="text-center">Penyelesaian (JAM)</th>
                </tr>
              </thead>
              <tbody>
                @php
                // dd($beban_kerja[0]['jumlah_hasil']);
                $i = 0 ;
                @endphp
                <form role="form" action="/analisis_beban_kerja/{{ $jabatan->kode_jabatan }}" method="POST">
                  @method('PUT')
                  @csrf

                  @if($beban_kerja->first() == NULL)
                  @foreach ($jabatan->data_tugas_pokok as $index)
                  <tr>
                    <th class="col-1 text-center">
                      <?php echo $i+1;
                       ?>
                    </th>
                    {{-- <th class="text-center">
                      {{ $index->id }}
                    </th> --}}
                    <th class="col-2">
                      <textarea cols=" 30" rows="3" class="form-control form-control" disabled>{{
                      $index->uraian_tugas }}</textarea>
                      {{-- <div class="col-12">
                        <pre class="col-12">{{ $index->uraian_tugas }}</pre>
                      </div> --}}

                    </th>
                    <th class="col-2 text-center">
                      {{ $index->hasil_kerja }}
                    </th>

                    <th class="col-1 text-center">
                      <input type="number" name="jumlah[]" id="jumlah{{ str($i+1) }}"
                        class="form-control form-control-{{ $errors->has('jumlah'.str($i+1)) ? ' is-invalid' : '' }}"
                        placeholder="{{ __('Jumlah Hasil') }}" value="{{ old('jumlah.'.str($i+1)) }}" min="0" required
                        autofocus onchange="getpegawai()">
                    </th>
                    <th class="col-1 text-center">
                      <input type="number" name="penyelesaian[]" id="penyelesaian{{ str($i+1) }}"
                        class="form-control form-control-{{ $errors->has('penyelesaian'.str($i+1)) ? ' is-invalid' : '' }}"
                        placeholder="{{ __('Penyelesaian (JAM)') }}" value="{{ old('penyelesaian.'.str($i+1)) }}"
                        min="0" required autofocus onchange="getpegawai()">
                    </th>
                  </tr>

                  <?php $i++;
                endforeach; ?>
                  @else
                  @foreach ($beban_kerja as $index)
                  <tr>
                    <th class="col-1 text-center">
                      <?php echo $i+1;
                      // dd($jabatan);
                       ?>
                    </th>
                    {{-- <th class="text-center">
                      {{ $index->id }}
                    </th> --}}
                    <th class="col-3 text-center">
                      <textarea cols="30" rows="3" class="form-control form-control"
                        disabled>{{$jabatan->data_tugas_pokok[$i]['uraian_tugas']}}</textarea>
                    </th>
                    <th class="col-2 text-center">
                      {{$jabatan->data_tugas_pokok[$i]['hasil_kerja']}}
                    </th>

                    <th class="col-1 text-center">
                      <input type="number" name="jumlah[]" id="jumlah{{ str($i+1) }}"
                        class="form-control text-center  form-control-{{ $errors->has('jumlah'.str($i+1)) ? ' is-invalid' : '' }}"
                        placeholder="{{ __('Jumlah Hasil') }}"
                        value="{{ old('jumlah.'.str($i+1),$index->jumlah_hasil) }}" required autofocus min="0"
                        onchange="getpegawai()">
                    </th>
                    <th class="col-1 text-center">
                      <input type="number" name="penyelesaian[]" id="penyelesaian{{ str($i+1) }}"
                        class="form-control text-center form-control-{{ $errors->has('penyelesaian'.str($i+1)) ? ' is-invalid' : '' }}"
                        placeholder="{{ __('Penyelesaian (JAM)') }}"
                        value="{{ old('penyelesaian.'.str($i+1),$index->penyelesaian) }}" required autofocus min="0"
                        onchange="getpegawai()">
                    </th>
                  </tr>

                  <?php $i++;
                endforeach; ?>
                  @while ($i != $jabatan->data_tugas_pokok->count())
                  <tr>
                    <th class="col-1 text-center">
                      <?php echo $i+1;
                       ?>
                    </th>
                    {{-- <th class="text-center">
                      {{ $index->id }}
                    </th> --}}
                    <th class="col-3 text-center">

                      <textarea cols="30" rows="3" class="form-control form-control"
                        readonly>{{$jabatan->data_tugas_pokok[$i]['uraian_tugas']}}</textarea>
                    </th>
                    <th class="col-2 text-center">
                      {{$jabatan->data_tugas_pokok[$i]['hasil_kerja']}}
                    </th>

                    <th class="col-1 text-center">
                      <input type="number" name="jumlah[]" id="jumlah{{ str($i+1) }}"
                        class="form-control text-center form-control-{{ $errors->has('jumlah'.str($i+1)) ? ' is-invalid' : '' }}"
                        placeholder="{{ __('Jumlah Hasil') }}" value="{{ old('jumlah.'.str($i+1)) }}" required autofocus
                        min="0" onchange="getpegawai()">
                    </th>
                    <th class="col-1 text-center">
                      <input type="number" name="penyelesaian[]" id="penyelesaian{{ str($i+1) }}"
                        class="form-control text-center form-control-{{ $errors->has('penyelesaian'.str($i+1)) ? ' is-invalid' : '' }}"
                        placeholder="{{ __('Penyelesaian (JAM)') }}" value="{{ old('penyelesaian.'.str($i+1)) }}"
                        required autofocus min="0" onchange="getpegawai()">
                    </th>
                  </tr>
                  <?php $i++;?>
                  @endwhile
                  @endif
                  @if ($jabatan->data_tugas_pokok->first() != NULL)
                  <tr>
                    <th class="col-1 text-center">

                    </th>

                    <th class="col-3 text-center">

                    </th>
                    <th class="col-1 text-center">
                      <div class="input-group mb-3">
                        <span class="input-group-text bg-primary text-white ">Bezetting</span>

                        <input type="number" name="pegawaiku" id="pegawaiku" class="form-control text-center  text-lg"
                          value="{{$jabatan->pegawai}}" placeholder="{{ __('Bezetting') }}" onchange="getpegawai()"
                          required>
                      </div>
                      <div class="input-group ">
                        <span class="input-group-text bg-warning text-dark ">Keterangan</span>

                        <input type="number" name="keterangan" id="keterangan" class="form-control text-center  text-lg"
                          placeholder="{{ __('Keterangan') }}" value="" disabled>
                      </div>
                    </th>

                    <th colspan="2" class="col-1 text-center">
                        <div class="input-group mb-3">
                        <span class="input-group-text bg-info text-dark ">Total</span>

                        <input type="number" name="total" id="total" class="form-control text-center kebutuhan text-lg"
                          placeholder="{{ __('Kebutuhan Pegawai') }}" value="" disabled>
                      </div>
                      <div class="input-group ">
                        <span class="input-group-text bg-info text-dark ">Pegawai</span>

                        <input type="number" name="pegawai" id="pegawai"
                          class="form-control text-center kebutuhan text-lg" placeholder="{{ __('Kebutuhan Pegawai') }}"
                          value="" disabled>
                      </div>
                    </th>

                  </tr>
                  @endif
              </tbody>
            </table>
            @if($jabatan->data_tugas_pokok->first() == NULL)
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
              Tidak Ada Data Tugas Pokok. Silahkan Hubungin admin untuk menambah data
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            @if($jabatan->data_tugas_pokok->first() != NULL)
            <div class=" justify-content-center text-center mt-3">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            @endif
            </form>
          </div>


        </div>
      </div>
    </div>
  </div>


  @include('layouts.footers.auth')

  @endsection

  @push('js')
  <script>
    function getketerangan(){
      var pegawaiindex = document.getElementsByName('pegawaiku');
      var pegawai = document.getElementsByName('pegawai');
      var keterangan = pegawai.value - pegawaiindex.value;
        document.getElementById("keterangan").value = keterangan;
    };
    function getpegawai(){
      var jumlah = document.getElementsByName('jumlah[]');
        var penyelesaian = document.getElementsByName('penyelesaian[]');
        var total = 0;
        for (var i = 0; i < jumlah.length; i++) {
            var a = jumlah[i].value;
            var b = penyelesaian[i].value;
            total += (a / 1250) * b;
          }
          // document.getElementsByName("kebutuhan").value = total;
          var totalfix = total.toFixed(3);
          var pegawai = Math.round(total);
          document.getElementById("total").value = totalfix;
          document.getElementById("pegawai").value = pegawai;
      var pegawaiku = document.getElementById('pegawaiku');
       var keterangan = pegawaiku.value-pegawai;
       console.log(pegawaiku.value);
       console.log(pegawai);
       console.log(keterangan);
       document.getElementById("keterangan").value = keterangan;
      // getketerangan();
    };
    $(document).ready(function(){
    window.onload = function(e) {
      getpegawai();
    };
  })
  </script>
  <script src="{{ asset('argon') }}/js/bootstrap.bundle.js"></script>
  @endpush