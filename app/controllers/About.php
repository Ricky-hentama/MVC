<?php

class About
{
    public function index($nama = 'Ricky', $pekerjaan = 'Guru')
    {
        echo "Hallo ,saya nama saya adalah $nama, saya adalah seorang $pekerjaan ";
    }

    public function page()
    {
        echo 'About/page';
    }
}
