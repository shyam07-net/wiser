<?php

namespace App\Exports;

use App\Models\Employeeleaves;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Foundation\Auth\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;


class EmpLeavesExport implements
    FromCollection,
    Responsable,
    ShouldAutoSize,
    WithMapping,
    WithHeadings,
    WithEvents
   

{
    use Exportable;
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {

        return Employeeleaves::all();
    }
    public function map($employeeleaves): array
    {
        return [
            $employeeleaves->id,
            $employeeleaves->users->name,
            $employeeleaves->Leave_type,
            $employeeleaves->leavefrom,
            $employeeleaves->leaveto,
            $employeeleaves->No_of_days,
            $employeeleaves->Pending_leaves,
            $employeeleaves->Reason,
            $employeeleaves->Status
        ];
    }
    public function headings(): array
    {
        return [
            'S No.',
            'Name',
            'Leave Type',
            'Leave from',
            'Leave To',
            'No. of Days',
            'Pending Leaves',
            'Reason',
            'Status'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:I1')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ],
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                            'color' => ['argb' => '000000'],
                        ],
                    ]

                ]);
            }

        ];
    }

    
}
