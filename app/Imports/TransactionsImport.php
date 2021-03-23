<?php

namespace App\Imports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithUpserts;

class TransactionsImport implements ToModel, WithBatchInserts, WithUpserts
{

    public function model(array $row)
    {
        return new Transaction([
            'ID_PEP'     => $row[0],
            'ID_ALL'    => $row[1],
            'TIPO'    => $row[2],
            'CODIGO'    => $row[3],
            'NOMBRE1'    => $row[4],
            'NOMBRE2'    => $row[5],
            'APATERNO'    => $row[6],
            'AMATERNO'    => $row[7],
            'TIPODOCUMENTO'    => $row[8],
            'NRODOCUMENTO'    => $row[9],
            'LEXTENSION'    => $row[10],
            'ABREVPAIS'    => $row[11],
            'PAIS'    => $row[12],
            'DEPARTAMENTO'    => $row[13],
            'PROVINCIA'    => $row[14],
            'TIPOPEP'    => $row[15],
            'PAISCARGO'    => $row[16],
            'CARGO'    => $row[17],
            'ENTIDAD'    => $row[18],
            'GESTION'    => $row[19],
            'JUSTIFICACION'    => $row[20],
            'FECHAREPORTE'    => $row[21],
            'CARGOALL'    => $row[22],
            'ENTIDADALL'    => $row[23],
            'JUSTIFICACIONALL'    => $row[24],
            'TIPOALL'    => $row[25],
            'TIPOFAM'    => $row[26],
            'DETALLEALL'    => $row[27],
            'PROFESION'    => $row[28],
            'ID_REGISTRO'    => $row[29]
        ]);
    }
    public function batchSize(): int
    {
        return 10000;
    }

    public function uniqueBy()
    {
        return 'ID_REGISTRO';
    }
}
