<?php
class SinhVienModel extends DB{
    public function GetSV(){
        return "Huynh Le Huu Phuc";
    }

    public function Tong($n, $m){
        return $n + $m;
    }

    public function SinhVien() {
        $sqr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $sqr);
    }
    

}
?>