<?php
require_once "Person.php";

class Sinhvien extends Person{
    public $maSV;
    public $lop;
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    public $DTB;

    public function nhapThongTinSV($maSV,$name, $date, $sex, $add, $lop, $diemToan, $diemLy , $diemHoa){
        $this->nhapThongTin($name, $date, $sex, $add);
        $this->maSV = $maSV;
        $this->lop = $lop;
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;
    }

    public function tinhDTB(){
        $this->DTB = ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
        return $this->DTB;
    }
    public function inThongTinSV(){
        echo "Mã sinh viên: " . $this->maSV . ".<br>";
        echo "Họ và tên: " . $this->name . ".<br>";
        echo "Ngày sinh: " . $this->date . ".<br>";
        echo "Giới tính: " . $this->sex . ".<br>";
        echo "Địa chỉ: " . $this->add . ".<br>";
        echo "Lớp: " . $this->lop . ".<br>";
        echo "Điểm toán: " . $this->diemToan . ".<br>";
        echo "Điểm Lý: " . $this->diemLy . ".<br>";
        echo "Điểm Hóa: " . $this->diemHoa . ".<br>";
        echo "Điểm trung bình: " . $this->DTB . ".<br>";
    }
}
?>