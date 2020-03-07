<?php

class user_model extends Controller
{
    private $nama = 'Ricky';
    public function getUser()
    {
        return $this->nama;
    }
};
