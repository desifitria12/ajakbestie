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
            @foreach (biodataByJabatan($dinas_id) as $data)
                <tr>
                    <th>{{ $data['jabatan']->kode_jabatan }}</th>
                    <th>{{ $data['jabatan']->datajabatan->nama_jabatan }}</th>
                    <th>{{ $data['jabatan']->datajabatan->nama_unit }}</th>
                    <th class="text-center">{{ kelasjabatan2($data['total']) }}</th>
                    <th class="text-center">{{  $data['biodata']->nama}}</th>
                    <th class="text-center">{{  $data['biodata']->nip}}</th>
                    {{-- <th>{{ $data['jabatan']->standarkompetensi->pangkat }}</th> --}}
                </tr>
            @endforeach
          </tbody>
    </table>
</body>
</html>