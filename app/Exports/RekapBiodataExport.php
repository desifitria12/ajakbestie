<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\HakAksesModel;
use App\Models\HubunganJabatan;
use App\Models\BiodataJabatanModel;
use App\Models\Dinas;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithDefaultStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Borders;


class RekapBiodataExport implements FromView, ShouldAutoSize, WithStyles, WithDefaultStyles
{
   

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            '1'    => [
                'font' => [

                    'alignment' => Alignment::HORIZONTAL_CENTER,
                    'size' => 14

                ]
            ],

        ];
    }

    public function defaultStyles(Style $defaultStyle)
    {
        // Configure the default styles
        // return $defaultStyle->getFill()->setFillType(Fill::FILL_SOLID);

        // Or return the styles array
        return [
            'font' => [
                'name' => 'Calibri',
                'size' => 11,

            ],
        ];
    }

    public function view(): View
    {
        if (auth()->user()->role == 'user') {
            $user = HakAksesModel::where('user_id', auth()->user()->id)->first();
            $jabatan = HubunganJabatan::with('datajabatan',  'data_korelasi' ,'data_biodata', 'data_kompetensi.data_kompetensi', 'standarkompetensi')
                ->filter(request(['search']))
                ->paginate(20)
                ->where('dinas_id', $user->dinas_id)
                ->withQueryString();
            $biodata = BiodataJabatanModel::get();
            } else {
            
            $jabatan = hubunganjabatan::with('datajabatan', 'data_korelasi' ,'data_biodata' , 'data_kompetensi.data_kompetensi', 'standarkompetensi')
                ->filter(request(['search']))
                ->paginate(20)
                ->withQueryString();
            $biodata = BiodataJabatanModel::get();
            }


        
        
        return view('admin.laporan.excel1', [        
            'jabatan' => $jabatan, 
            
            'biodata' => $biodata,
        ]);
    }
    
}

