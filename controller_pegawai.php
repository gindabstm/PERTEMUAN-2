<?php

// Class pegawai (CRUD pegawai)
class pegawai{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

    
    // Method untuk mengambil semua data dari table
    function GetData_All (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data pegawai laki-laki dari table
    function GetData_All_L (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai where jns_kel='L'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data pegawai yang sudah menikah dari table
    function GetData_All_M (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai where status='M'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data pegawai yang sudah menikah dari table
    function GetData_All_B (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai where status='B'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data pegawai yang usianya diantara 20 sampai dengan 30 tahun dari table
    function GetData_All_U20_30 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai WHERE YEAR(CURDATE()) - YEAR(tgl_lahir) BETWEEN 20 AND 30");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data pegawai yang usianya diantara 30 sampai dengan 45 tahun dari table
    function GetData_All_U30_45 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai WHERE YEAR(CURDATE()) - YEAR(mulai_kerja) BETWEEN 30 AND 45");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data pegawai yang masa kerjanya diantara 1 sampai dengan 5 tahun dari table
    function GetData_All_M1_5 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai WHERE YEAR(CURDATE()) - YEAR(mulai_kerja) BETWEEN 1 AND 5");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data pegawai yang masa kerjanya diantara 6 sampai dengan 10 tahun dari table
    function GetData_All_M6_10 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai WHERE YEAR(CURDATE()) - YEAR(mulai_kerja) BETWEEN 6 AND 10");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil semua data pegawai yang masa kerjanya diantara 11 sampai dengan 25 tahun dari table
    function GetData_All_M11_25 (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pegawai WHERE YEAR(CURDATE()) - YEAR(mulai_kerja) BETWEEN 11 AND 25");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }
}
?>