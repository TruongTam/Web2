<?php 
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $database  = "web";

    // $conn = mysqli_connect($servername, $username, $password,$database) or die("lỗi");

    // mysqli_set_charset($conn, 'UTF8');   
    class Database
    {
        private $hostname = 'localhost';
        private $username ='root';
        private $pass ='';
        private $dbname ='web';
        private $conn = NULL;
        private $result = NULL;
        public function connect()
        {
            $this->conn = new mysqli( $this->hostname,$this->username, $this->pass, $this->dbname);
            if(!$this->conn)
            {
                echo "kết nối thất bại"; 
                exit();
            }
            else
            {
                
                mysqli_set_charset($this->conn,'UTF8');
            }
            return $this->conn;
        }
        public function excute($sql)
        {
            $this->result = $this->conn->query($sql);
            return $this->result;
        }
        public function getdata()
        {
            if($this->result)
            {
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data=0;
            }
            return $data;

        }
        public function check()
        {
            if($this->result) return true;
            else return false;
        }
        public function getall()
        {
            if(!$this->result)
            {
                $data = 0;

            }
            else{
                while($datas = $this->getdata())
                {
                    $data[]=$datas;

                } 
            }
            return $data;
        }
        public function dangky($taikhoan,$matkhau,$ten,$sdt,$ngaysinh,$diachi)
        {
            $sql = "INSERT INTO account(id,taikhoan,password,MAKH,QUYEN,ten,sdt,ngaysinh,diachi) VALUES(null,'$taikhoan','$matkhau','$taikhoan+2020','0','$ten','$sdt','$ngaysinh','$diachi')";
            $this->excute($sql);
        }
    }

?>