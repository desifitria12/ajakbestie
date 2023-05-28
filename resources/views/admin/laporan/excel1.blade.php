<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td colspan="7" align="center">
                    <h4>Daftar Nama Jabatan, Kelas Jabatan dan Pemangku Jabatan</h4>
                    
                </td>
                <td colspan="7" align="center">
                    <h4>Di Lingkungan</h4>
                    
                </td>
            </tr>
        </thead>
    </table>
    <table>
        <thead>
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
            @if(($databio->kode_jabatan == $index->kode_jabatan) )
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
</body>

</html>