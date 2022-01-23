<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    // Must have SayHi()
    function SayHi(){
        $teo = $this->model("SinhVienModel");
        echo $teo->GetSV();

    }

    function Show($a, $b){        
        // Call Models
        $teo = $this->model("SinhVienModel");
        $tong = $teo->Tong($a, $b); // 3
        // Goi view vao
        $this->view("aoxau", [
            "Page"=>"contact",
            "Number"=>$tong,
            "Mau"=>"Pink",
            "ChatLuong"=>"Gold",
            // bat dau ket noi database
            "SV" => $teo->SinhVien()
        ]); 

        
    }
}
?>