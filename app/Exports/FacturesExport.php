<?php

namespace App\Exports;

use App\Exports;
use App\Models\Facture;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use NumberFormatter;

class FacturesExport implements FromQuery,WithHeadings,WithMapping,WithColumnFormatting,ShouldAutoSize
{
    protected $query;
    public function headings(): array{
        return [
            'Code Facture',
            'Client Id',
            'Prix Hors-taxes',
            'Tva',
            'Status',
            'Echéance',
            'Prix Totale',
            'Date de Creation',
        ];
    }
    public function setQuery($query)
    {
        $this->query = $query;
    }
    public function query()
    {
        return $this->query;
        
    }

    public function map($factures) : array {
        
        return
        [
            $factures->code_facture,
            $factures->client_id,
            $factures->prix_hors_taxes,
            $factures->tva,
            $factures->status,
            $factures->echéance,
            $factures->prix_total,
            $factures->created_at,
        ];
    }

    public function columnFormats(): array{
        return [
            'C' =>  '#,##0.00 [$MAD]',
            'D' =>  '#,##0.00 [$MAD]',
            'G' =>  '#,##0.00 [$MAD]',
        ];
    }
    
}
