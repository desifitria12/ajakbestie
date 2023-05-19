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
                    <h4>REKAPITULASI KEBUTUHAN PEJABAT/PEGAWAI DI LINGKUNGAN PEMERINTAH
                        PROVINSI BENGKULU</h4>
                </td>
            </tr>
        </thead>
    </table>
    <table>
        <thead>
            <tr>
                <th align="center">KODE JABATAN</th>
                <th align="center">JABATAN</th>
                <th align="center">JENJANG JABATAN</th>
                <th align="center">KELAS JABATAN</th>
                <th align="center">BAZETING</th>
                <th align="center">FORMASI / ABK</th>
                <th align="center">KET. +/-</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jabatan as $index)
            @php
            $total = 0;
            $tp_total = 0;
            @endphp
            @foreach ($index->data_faktor as $data)
            @php
            $total += $data->data_faktor->nilai;
            @endphp
            @endforeach

            @foreach ($index->data_beban_kerja as $beban)

            @php
            $tp_total += ($beban->penyelesaian / 1250) * $beban->jumlah_hasil;
            @endphp
            @endforeach

            {{-- {{ dd($tp_total) }} --}}
            <tr>
                <th>{{ $index->kode_jabatan }}</th>
                <th>{{ $index->datajabatan->nama_jabatan }}</th>
                <th align="center">@php if($index->standarkompetensi != NULL){
                    echo str_replace("Jabatan ", '', $index->standarkompetensi->kelompok_jabatan);
                    }; @endphp </th>
                <th align="center">{{ kelasjabatan2($total) }}</th>
                <th align="center">{{ $index->pegawai }}</th>
                <th align="center">{{ round($tp_total, 0, PHP_ROUND_HALF_EVEN) }}</th>
                <th align="center">{{ round($index->pegawai - $tp_total, 0, PHP_ROUND_HALF_EVEN) }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>