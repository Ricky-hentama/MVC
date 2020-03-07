<?php

class teacher_model
{
    private $guru = [
        [
            'Nama' => 'Ricky Hentama',
            'Mapel' => 'Electrical Wirring',
            'Umur' => 22
        ],
        [
            'Nama' => 'Hasan Reynhard Sinaga',
            'Mapel' => 'Web Programming',
            'Umur' => 69
        ],
        [
            'Nama' => 'Arjanu Setyawan',
            'Mapel' => 'Pend. Agama',
            'Umur' => 26
        ],
        [
            'Nama' => 'Faizal Susanto',
            'Mapel' => 'Pend. Seksual',
            'Umur' => 28
        ]
    ];

    public function getAllGuru()
    {
        return $this->guru;
    }
}
