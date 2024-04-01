<?php

namespace App\Imports;

use App\Models\Funcionario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class FuncionariosImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            new Funcionario([
                'nro' => $row['nro'],
                'ci' => $row['ci'],
                'apellidos' => $row['apellidos'],
                'nombres' => $row['nombres'],
                'edificio' => $row['edificio'],
                'responsable' => $row['responsable'],
            ]);
        }
    }
}
