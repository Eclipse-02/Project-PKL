<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Master\RegisterPackage;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithProperties;

class RegisterPackageExport implements FromQuery, WithCustomStartCell, WithColumnWidths, WithHeadings, WithEvents, WithMapping
{
    use Exportable;

    private $start_date, $end_date;
    private $i = 1;

    public function __construct(string $start_date, string $end_date)
    {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    // public function properties(): array
    // {
    //     return [
    //         'creator'        => 'Test',
    //         'lastModifiedBy' => 'Test',
    //         'title'          => 'Invoices Export',
    //         'description'    => 'Latest Invoices',
    //         'subject'        => 'Invoices',
    //         'keywords'       => 'invoices,export,spreadsheet',
    //         'category'       => 'Invoices',
    //         'manager'        => 'Patrick Brouwers',
    //         'company'        => 'Maatwebsite',
    //     ];
    // }

    public function startCell(): string
    {
        return 'A2';
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5.5,
            'B' => 30,  
            'C' => 12,  
            'D' => 12,  
            'E' => 24,  
            'F' => 24,  
            'G' => 32,  
            'H' => 25,  
            'I' => 25,  
            'J' => 70,  
            'K' => 15,  
            'L' => 15,  
            'M' => 15,  
            'N' => 15,  
            'O' => 18,  
            'P' => 26,  
            'Q' => 20,  
            'R' => 26,  
            'S' => 25,  
            'T' => 38,  
            'U' => 20,  
            'V' => 18,  
            'W' => 40,  
            'X' => 19,  
            'Y' => 18,  
            'Z' => 20,  
            'AA' => 28,  
            'AB' => 16,  
            'AC' => 24,  
            'AD' => 16,  
            'AE' => 24,  
            'AF' => 16,  
            'AG' => 24,  
            'AH' => 16,  
            'AI' => 24,  
            'AJ' => 18,  
            'AK' => 20,  
            'AL' => 16,  
            'AM' => 20,  
            'AN' => 18,  
            'AO' => 18,  
            'AP' => 20,  
            'AQ' => 16,  
            'AR' => 16,  
            'AS' => 24,  
            'AT' => 26,  
            'AU' => 26,
            'AV' => 74,  
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $sheet = $event->sheet;

                $header = [
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                    ],
                    'borders' => [
                        'allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, 'color' => ['argb' => 'FFFF00']]
                    ]
                ];

                $body = [
                    'borders' => [
                        'allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, 'color' => ['argb' => '000000']]
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => 'D8E4BC']
                    ],
                ];

                $eo1 = [
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => '000000'],
                        'size' => 12,
                        'name' => 'Bahnschrift'
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => '9BBB59']
                    ],
                ];

                $pu1 = [
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => '000000'],
                        'size' => 12,
                        'name' => 'Bahnschrift'
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => '00B0F0']
                    ],
                ];

                $vz1 = [
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => '000000'],
                        'size' => 12,
                        'name' => 'Bahnschrift'
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => 'DA9694']
                    ],
                ];

                $aaai1 = [
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => '000000'],
                        'size' => 12,
                        'name' => 'Bahnschrift'
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => 'FFC000']
                    ],
                ];

                $ajau1 = [
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => '000000'],
                        'size' => 12,
                        'name' => 'Bahnschrift'
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => '9BBB59']
                    ],
                ];

                $a12 = [
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => 'FFFF00'],
                        'size' => 12,
                        'name' => 'Bahnschrift'
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => '000000']
                    ],
                ];

                $bo2 = [
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => '000000'],
                        'size' => 12,
                        'name' => 'Bahnschrift'
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => '76933C']
                    ],
                ];

                $pu2 = [
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => '000000'],
                        'size' => 12,
                        'name' => 'Bahnschrift'
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => 'B7DEE8']
                    ],
                ];

                $vz2 = [
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => '000000'],
                        'size' => 12,
                        'name' => 'Bahnschrift'
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => 'F79646']
                    ],
                ];

                $aaai2 = [
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => '000000'],
                        'size' => 12,
                        'name' => 'Bahnschrift'
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => 'FFFF00']
                    ],
                ];

                $ajau2 = [
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => '000000'],
                        'size' => 12,
                        'name' => 'Bahnschrift'
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => '00B050']
                    ],
                ];

                $center = [
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ];

                $right = [
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
                    ],
                ];

                // default styles
                $sheet->getDelegate()->getStyle('A1:AV2')->applyFromArray($header);
                $sheet->getDelegate()->getStyle('A3:AU200')->applyFromArray($body);

                // cells styles in row 1
                $sheet->getDelegate()->getStyle('A1')->applyFromArray($a12);
                $sheet->getDelegate()->getStyle('E1')->applyFromArray($eo1);
                $sheet->getDelegate()->getStyle('P1')->applyFromArray($pu1);
                $sheet->getDelegate()->getStyle('V1')->applyFromArray($vz1);
                $sheet->getDelegate()->getStyle('AA1')->applyFromArray($aaai1);
                $sheet->getDelegate()->getStyle('AJ1')->applyFromArray($ajau1);
                $sheet->getDelegate()->getStyle('AV1')->applyFromArray($ajau2);

                // cells styles in row 2
                $sheet->getDelegate()->getStyle('A2')->applyFromArray($a12);
                $sheet->getDelegate()->getStyle('B2:O2')->applyFromArray($bo2);
                $sheet->getDelegate()->getStyle('P2:U2')->applyFromArray($pu2);
                $sheet->getDelegate()->getStyle('V2:Z2')->applyFromArray($vz2);
                $sheet->getDelegate()->getStyle('AA2:AI2')->applyFromArray($aaai2);
                $sheet->getDelegate()->getStyle('AJ2:AU2')->applyFromArray($ajau2);

                // merge cells in row 1
                $sheet->getDelegate()
                        ->mergeCells('A1:D1')
                        ->mergeCells('E1:O1')
                        ->mergeCells('P1:U1')
                        ->mergeCells('V1:Z1')
                        ->mergeCells('AA1:AI1')
                        ->mergeCells('AJ1:AU1')
                        ->mergeCells('AV1:AV2');

                // set cells value in row 1
                $sheet->getDelegate()
                        ->setCellValue('A1', 'MAIN')
                        ->setCellValue('E1', 'KTP')
                        ->setCellValue('P1', 'KK')
                        ->setCellValue('V1', 'PASSPORT')
                        ->setCellValue('AA1', 'VACCINE CARDS')
                        ->setCellValue('AJ1', 'KELENGKAPAN DATA')
                        ->setCellValue('AV1', 'CATATAN');

                // align certain cells
                $sheet->getDelegate()->getStyle('A3:A200')->applyFromArray($center);
                $sheet->getDelegate()->getStyle('B3:B200')->applyFromArray($center);
                $sheet->getDelegate()->getStyle('I3:I200')->applyFromArray($center);
                $sheet->getDelegate()->getStyle('X3:X200')->applyFromArray($right);
                $sheet->getDelegate()->getStyle('Y3:Y200')->applyFromArray($right);
                $sheet->getDelegate()->getStyle('AC3:AC200')->applyFromArray($right);
                $sheet->getDelegate()->getStyle('AE3:AE200')->applyFromArray($right);
                $sheet->getDelegate()->getStyle('AG3:AG200')->applyFromArray($right);
                $sheet->getDelegate()->getStyle('AI3:AI200')->applyFromArray($right);
            },
        ];
    }

    public function headings(): array
    {
        return ["NO", "GENDER", "TITLE", "JENIS ID", "NO KTP", "", "NAMA KTP", "PLACE OF BIRTH", "DATE OF BIRTH", "ALAMAT", "PROPINSI", "DATI 2", "KEC", "KEL", "STATUS NIKAH", "KEWARGANEGARAAN", "PENDIDIKAN", "PEKERJAAN", "NAMA AYAH DI KK", "RELATIONSHIP", "MAHRAM", "NO PASSPORT", "NAMA PD PASSPORT", "ISSUED DATE", "EXP DATE", "ISSUED PLACE", "NAMA PD kartu VACCINE", "VACCINE 1", "DATE OF VACCINE 1", "VACCINE 2", "DATE OF VACCINE 2", "VACCINE 3", "DATE OF VACCINE 3", "VACCINE 4", "DATE OF VACCINE 4", "NO TELP", "EMAIL", "FOTO FULL", "FOTO SETENGAH", "FISIK PASPOR", "BUKU KUNING", "JAMAAH DARI", "COPY KTP", "COPY KK", "COPY PASSPOR", "COPY AKTA N", "COPY AKTA LAHIR"];
    }

    public function query()
    {
        return RegisterPackage::join('coys', 'appl_trn_reg.coy_id', '=', 'coys.coy_id')
        ->join('provinsis', 'appl_trn_reg.prov_code', '=', 'provinsis.prov_code')
        ->join('kotas', 'appl_trn_reg.kota_code', '=', 'kotas.kota_code')
        ->join('kecamatans', 'appl_trn_reg.kec_code', '=', 'kecamatans.kec_code')
        ->join('kelurahans', 'appl_trn_reg.kel_code', '=', 'kelurahans.kel_code')
        ->join('countries', 'appl_trn_reg.con_code', '=', 'countries.con_code')
        ->join('jobs', 'appl_trn_reg.job_code', '=', 'jobs.job_code')
        ->join('edus', 'appl_trn_reg.edu_code', '=', 'edus.edu_code')
        ->join('relations', 'appl_trn_reg.rel_code', '=', 'relations.rel_code')
        ->join('suppliers', 'appl_trn_reg.supl_code', '=', 'suppliers.supl_code')
        ->join('vaccines as vc_01', 'appl_trn_reg.vc_code_01', '=', 'vc_01.vc_code')
        ->join('vaccines as vc_02', 'appl_trn_reg.vc_code_02', '=', 'vc_02.vc_code')
        ->join('vaccines as vc_03', 'appl_trn_reg.vc_code_03', '=', 'vc_03.vc_code')
        ->join('vaccines as vc_04', 'appl_trn_reg.vc_code_04', '=', 'vc_04.vc_code')
        ->select('appl_trn_reg.appl_gender', 'appl_trn_reg.appl_title', 'appl_trn_reg.appl_id_type', 'appl_trn_reg.appl_id_no', 'appl_trn_reg.appl_name', 'appl_trn_reg.appl_gender', 'appl_trn_reg.appl_birth_place', 'appl_trn_reg.appl_birth_date', 'appl_trn_reg.appl_addr', 'appl_trn_reg.appl_gender', 'provinsis.provinsi', 'kotas.kota', 'kecamatans.kecamatan', 'kelurahans.kelurahan', 'appl_trn_reg.appl_status', 'countries.con_name', 'edus.edu_name', 'jobs.job_name', 'appl_trn_reg.appl_fth_name', 'appl_trn_reg.appl_mahram', 'appl_trn_reg.appl_pass_no', 'appl_trn_reg.appl_pass_name', 'appl_trn_reg.appl_pass_iss_date', 'appl_trn_reg.appl_pass_exp_date', 'appl_trn_reg.appl_pass_iss_place', 'appl_trn_reg.appl_vac_name_id', 'vc_01.vc_name as vc_name_01', 'vc_02.vc_name as vc_name_02', 'vc_03.vc_name as vc_name_03', 'vc_04.vc_name as vc_name_04', 'appl_trn_reg.appl_vac_id_date_01', 'appl_trn_reg.appl_vac_id_date_02', 'appl_trn_reg.appl_vac_id_date_03', 'appl_trn_reg.appl_vac_id_date_04', 'appl_trn_reg.appl_tlp', 'appl_trn_reg.appl_email', 'appl_trn_reg.appl_is_img_full', 'appl_trn_reg.appl_is_img_half', 'appl_trn_reg.appl_is_pass', 'appl_trn_reg.appl_is_yb', 'suppliers.supl_name', 'appl_trn_reg.appl_is_copy_id', 'appl_trn_reg.appl_is_copy_kk', 'appl_trn_reg.appl_is_copy_pass', 'appl_trn_reg.appl_is_copy_akta_n', 'appl_trn_reg.appl_is_copy_akta_l',)
        ->whereBetween('appl_trn_reg.appl_date', ["$this->start_date", $this->end_date]);
    }

    public function map($row): array
    {
        // appl_gender
        if ($row->appl_gender == 1) {
            $gender = 'LAKI LAKI';
        } else {
            $gender = 'PEREMPUAN';
        }

        // appl_id_type
        if ($row->appl_id_type == 1) {
            $id_type = 'KTP';
        } else {
            $id_type = 'SIM';
        }

        // appl_id_no
        $id_no = implode("-", str_split($row->appl_id_no, 4));

        // appl_status
        if ($row->appl_status == 1) {
            $status = 'NIKAH';
        } else if ($row->appl_status == 1) {
            $status = 'BELUM NIKAH';
        } else {
            $status = 'CERAI';
        }

        // convert all dates
        $birth_date =  Carbon::createFromFormat('Y-m-d', $row->appl_birth_date)->format('j F Y'); // appl_birth_date
        $pass_iss_date =  Carbon::createFromFormat('Y-m-d', $row->appl_pass_iss_date)->format('j F Y'); // appl_pass_iss_date
        $pass_exp_date =  Carbon::createFromFormat('Y-m-d', $row->appl_pass_exp_date)->format('j F Y'); // appl_pass_exp_date
        $vac_id_date_01 =  Carbon::createFromFormat('Y-m-d', $row->appl_vac_id_date_01)->format('j F Y'); // appl_vac_id_date_01
        $vac_id_date_02 =  Carbon::createFromFormat('Y-m-d', $row->appl_vac_id_date_02)->format('j F Y'); // appl_vac_id_date_02
        $vac_id_date_03 =  Carbon::createFromFormat('Y-m-d', $row->appl_vac_id_date_03)->format('j F Y'); // appl_vac_id_date_03
        $vac_id_date_04 =  Carbon::createFromFormat('Y-m-d', $row->appl_vac_id_date_04)->format('j F Y'); // appl_vac_id_date_04

        return [
            $this->i++,
            $gender,
            $row->appl_title,
            $id_type,
            $id_no,
            '',
            $row->appl_name,
            $row->appl_birth_place,
            $birth_date,
            $row->appl_addr,
            $row->provinsi,
            $row->kota,
            $row->kecamatan,
            $row->kelurahan,
            $status,
            $row->con_name,
            $row->edu_name,
            $row->job_name,
            $row->appl_fth_name,
            "AYAH",
            $row->appl_mahram,
            $row->appl_pass_no,
            $row->appl_pass_name,
            $pass_iss_date,
            $pass_exp_date,
            $row->appl_pass_iss_place,
            $row->appl_vac_name_id,
            $row->vc_name_01,
            $vac_id_date_01,
            $row->vc_name_02,
            $vac_id_date_02,
            $row->vc_name_03,
            $vac_id_date_03,
            $row->vc_name_04,
            $vac_id_date_04,
            $row->appl_tlp,
            $row->appl_email,
            $row->appl_is_img_full,
            $row->appl_is_img_half,
            $row->appl_is_pass,
            $row->appl_is_yb,
            $row->supl_name,
            $row->appl_is_copy_id,
            $row->appl_is_copy_kk,
            $row->appl_is_copy_pass,
            $row->appl_is_copy_akta_n,
            $row->appl_is_copy_akta_l,
        ];
    }
}
