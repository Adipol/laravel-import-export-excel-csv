<?php

namespace App\Imports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class TransactionsImport implements ToModel, WithUpserts, WithBatchInserts, WithHeadingRow
{

    public function model(array $row)
    {
        return new Transaction([
            'ID_PEP'     => $row['id_pep'],
            'ID_ALL'    => $row['id_all'],
            'TIPO'    => $row['tipo'],
            'CODIGO'    => $row['codigo'],
            'NOMBRE1'    => $row['nombre1'],
            'NOMBRE2'    => $row['nombre2'],
            'APATERNO'    => $row['apaterno'],
            'AMATERNO'    => $row['amaterno'],
            'TIPODOCUMENTO'    => $row['tipodocumento'],
            'NRODOCUMENTO'    => $row['nrodocumento'],
            'LEXTENSION'    => $row['lextension'],
            'ABREVPAIS'    => $row['abrevpais'],
            'PAIS'    => $row['pais'],
            'DEPARTAMENTO'    => $row['departamento'],
            'PROVINCIA'    => $row['provincia'],
            'TIPOPEP'    => $row['tipopep'],
            'PAISCARGO'    => $row['paiscargo'],
            'CARGO'    => $row['cargo'],
            'ENTIDAD'    => $row['entidad'],
            'GESTION'    => $row['gestion'],
            'JUSTIFICACION'    => $row['justificacion'],
            'FECHAREPORTE'    => $row['fechareporte'],
            'CARGOALL'    => $row['cargoall'],
            'ENTIDADALL'    => $row['entidadall'],
            'JUSTIFICACIONALL'    => $row['justificacionall'],
            'TIPOALL'    => $row['tipoall'],
            'TIPOFAM'    => $row['tipofam'],
            'DETALLEALL'    => $row['detalleall'],
            'PROFESION'    => $row['profesion'],
            'ID_REGISTRO'    => $row['id_registro']
        ]);
    }

    public function batchSize(): int
    {
        return 200;
    }


    public function uniqueBy()
    {
        return 'ID_REGISTRO';
    }
}
