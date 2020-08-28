<?php
    class SinhVien {
        var $ten;
        var $chuyenNganh;
        var $diem;
        function __construct ($ten, $chuyenNganh, $diem){
            $this->ten=$ten;
            $this->chuyenNganh=$chuyenNganh;
            $this->diem=$diem;
        }

        function danhGia(){
            if($this->diem>=8){
                echo "Giỏi";
            }        
            elseif($this->diem>=6.5){
                echo "Khá";
            }
            elseif($this->diem>=5){
                echo "Trung Bình";
            }
            else {
                echo"Yếu";
            }
        }
    }
    $sv = new SinhVien("Trương Công Đạt", "Tin Học", 9);
    $sv->danhGia();