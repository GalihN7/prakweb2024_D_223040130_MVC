<?php

class Mahasiswa_model {

    private $dbh;
    private $stmt;

    public function __contrucct() {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    // private $mhs = [ 
    //     [
    //         "nama" => "Galih Nurhuda",
    //         "nrp" => "223040130",
    //         "email"=> "galihnurhuda@gmail.com",
    //         "jurusan"=> "Teknik Informatika"
    //     ],
    //     [
    //         "nama"=> "Darel Rabianto",
    //         "nrp"=> "223040131",
    //         "email"=> "dr@gmail.com",
    //         "jurusan"=> "Teknik Informatika"
    //     ],
    //     [
    //         "nama"=> "Hanhan Pratista",
    //         "nrp"=> "223040132",
    //         "email"=> "hr@gmail.com",
    //         "jurusan"=> "Teknik Informatika"
    //     ]
    //     ];

        public function getAllMahasiswa() 
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}