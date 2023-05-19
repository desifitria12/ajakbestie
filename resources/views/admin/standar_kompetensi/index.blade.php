@extends('layouts.app', ['title' => __('Kelola Standar Kompetensi Jabatan')])

@section('content')
@include('admin.header', ['halaman' => __('Kelola Standar Kompetensi Jabatan')])
<div class="container-fluid mt--7">
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Daftar Standar Kompetensi Jabatan</h3>
            </div>
            {{-- <div class="col-4 text-right">
              <a href="/tambah-jabatan" class="btn btn-sm btn-primary p-2 btnTambah">Tambah Jabatan</a>
            </div> --}}

          </div>
          <div class="row justify-content-center mt-3">
            <div class="col-6 text-center">
              @if (session()->has('success'))
              <div class="alert alert-info my-2" role="alert">
                <strong>{{ session('success') }}</strong>
              </div>
              @endif
              {{-- @if ($errors->any())
              <div class="alert alert-danger my-2" role="alert">

                @foreach ($errors->all() as $error)

                <strong>{{ $error }}</strong><br>

                @endforeach

              </div>
              @endif --}}

              {{-- @error('id')
              <div class="alert alert-danger my-2" role="alert">
                <strong>{{ $message }}</strong>
              </div>
              @enderror --}}
            </div>
          </div>
        </div>

        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="customerList" style="width: 100%">
              <thead class="thead-light">
                <tr>
                  {{-- <th scope="col">No</th> --}}
                  <th class="text-center">NO</th>
                  <th class="text-center" scope="col">Nama Jabatan</th>
                  <th class="text-center" scope="col">Banyak Data Faktor</th>
                  <th class="text-center" scope="col">Keterangan</th>
                  <th class="text-right pr-6">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                $currentpage = request('page')?request('page'):1;
                $i = 1 + (25 * ( $currentpage- 1))
                @endphp
                @foreach ($jabatan as $index)
                @php $jumlahnilai=0;
                $banyakfaktor = 0;
                @endphp
                {{-- {{ dd($index->faktor) }} --}}
                @foreach ($index->kompetensi as $kompetensi)
                @php $jumlahnilai += $kompetensi->data_kompetensi->first()->nilai;
                $banyakfaktor++;
                @endphp
                @endforeach
                {{-- {{ ($index->faktor[3]->data_faktor);}} --}}
                <tr>
                  <th scope="col">
                    <?php echo $i++; ?>
                  </th>
                  <th class="text-left">
                    {{ $index->nama_jabatan }}
                  </th>
                  <th class="text-center">
                    @if ($banyakfaktor > 0)
                    {{ $banyakfaktor }} Data Kompetensi
                    @else
                    <a class="text-danger">Tidak Ada Data</a>
                    @endif
                  </th>
                  @if ($banyakfaktor == 9)
                  <th class="text-center text-success">Data Lengkap</th>
                  @elseif(($banyakfaktor < 9)&& ($banyakfaktor>0)) <th class="text-center text-warning">Data Kurang</th>
                    @else
                    <th class="text-center text-danger">Tidak Ada Data</th>
                    @endif
                    <th>
                      <div class=" text-right">
                        <a href="/standar-kompetensi/{{ $index->id }}/edit" class="btn btn-info btn-sm btnEdit"
                          data-id="{{ $index->id }}" data-nama_dinas="{{ $index->nama_jabatan }}" data-jenis_faktor="
                          @php if($index->kompetensi->first()!= NULL){
                          echo $index->kompetensi->first();
                        }else{
                          echo NULL;
                        
                        }@endphp" {{-- data-bs-toggle="modal" data-bs-target="#editModal" --}}><i
                            class="fa fa-edit"></i>
                          Edit</a>
                        <a href="#" class="btn btn-danger btn-sm btnDelete" data-id="{{ $index->id }}"
                          data-nama_dinas="{{ $index->nama_jabatan }}" data-bs-toggle="modal"
                          data-bs-target="#deleteModal"><i class="fa fa-trash"></i> Delete</a>
                      </div>
                    </th>
                    <th>

                    </th>
                </tr>

                @endforeach


                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modal-default"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-" role="document">
                    <div class="modal-content">
                      <div class="modal-header">

                        <h3 class="modal-title">Hapus Semua Data Standar Kompetensi Jabatan?</h3>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <form action="" name="deleteForm" id="deleteForm" method="POST">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="id" id="id" class="deleteID">

                        <div class="modal-body">
                          <p>Yakin ingin menghapus standar kompetensi <strong id="valuedinas"></strong> ?<br>Semua data
                            standar kompetensi jabatan tidak dapat dikembalikan!</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                          <button type="submit" class="btn btn-danger btn-delete">Hapus</button>
                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </tbody>
            </table>
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

  @include('admin.standar_kompetensi.edit')
  {{-- @include('admin.opd.tambah') --}}

  @include('layouts.footers.auth')

  @endsection

  @push('js')
  <script>
    $(document).ready(function(){
      $('select').selectpicker();
    $(document).on('click', '.btnDelete', function() {
            var id = $(this).data('id')
            var nama_dinas = $(this).data('nama_dinas')
            var APP_URL = {!! json_encode(url('/standar-kompetensi')) !!}
            document.getElementById("deleteForm").action = APP_URL+'/'+id;
            // document.getElementById("deleteForm").action = '/dinas/'+id;
            $('.deleteID').val(id);
            $('#valuedinas').text(nama_dinas);
          });
  //   $(document).on('click', '.btnEdit', function() {
  //     var id = $(this).data('id')
  //     var nama_dinas = $(this).data('nama_dinas')
  //     // document.getElementById("editForm").action = '/dinas/'+id;
  //     var APP_URL = {!! json_encode(url('/dinas')) !!}
  //     document.getElementById("editForm").action = APP_URL+'/'+id;
  //     $('.edit-id').val(id)
  //     $('.edit-name').val(nama_dinas);
  //   })
    
  //   $(document).on('click', '.btn6faktor', function() {
  //     hide(document.getElementById('#isifaktor6'));
  //     $(".isifaktor6").hide();
  //     // $(".isifaktor6").show();
  //     // $(".isifaktor9").hide();
  //   })$(document).on('click', '.btn9faktor', function() {
  //     $(".isifaktor6").hide();
  //     $(".isifaktor9").show();
  //   })
  })
  </script>
  <script src="{{ asset('argon') }}/js/bootstrap.bundle.js"></script>
  @endpush