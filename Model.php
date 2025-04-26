<?php
class Model {

    protected $conn;    
    public function __construct()
    {
        $host = 'localhost:5306';
        $user = 'root';
        $password = '';
        $dbname = 'pemweb';
        $this->conn = mysqli_connect($host,$user,$password,$dbname);
    }

    public function load(){
        $query = 'SELECT * FROM mahasiswa';
        $result = mysqli_query($this->conn, $query);
        $rows= [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[]=$row;
        }
        return $rows;
    }

    public function insert($data){
        $nama=htmlspecialchars($data['nama']);
        $nim=htmlspecialchars($data['nim']);
        $univ=htmlspecialchars($data['univ']);
        $prodi=htmlspecialchars($data['prodi']);

        $query = "INSERT INTO mahasiswa VALUES ('$nama','$nim','$univ','$prodi')"; 
        mysqli_query($this->conn, $query);
        return mysqli_affected_rows($this->conn);
    }

    public function takeRow($nim){
        $query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
        $result = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function update($data){
        $nama=htmlspecialchars($data['nama']);
        $nim=htmlspecialchars($data['nim']);
        $univ=htmlspecialchars($data['univ']);
        $prodi=htmlspecialchars($data['prodi']);

        $query = "UPDATE mahasiswa SET 
                            nama = '$nama',
                            nim = '$nim',
                            universitas = '$univ',
                            program_studi = '$prodi'
                    WHERE nim = '$nim'"; 
        mysqli_query($this->conn, $query);

        return mysqli_affected_rows($this->conn);
    }

    public function delete($nim){
        $query = "DELETE FROM mahasiswa WHERE nim='$nim'";
        echo $query."<br>";
        mysqli_query($this->conn, $query);
        return mysqli_affected_rows($this->conn);
    }
}
?>