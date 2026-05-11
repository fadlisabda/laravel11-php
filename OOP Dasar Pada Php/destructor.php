<?php
class hapus
{
    public function __destruct()
    {
        echo 'data berhasil dihapus!';
    }
}

$h = new hapus;
//bisa jalankan destructor dengan :  
//unset($h);
