 <?php
    require_once "Person.php";
    require_once "Sinhvien.php";
    session_start();
    if(!isset($_SESSION["danhsachSV"])){
        $_SESSION["danhsachSV"]=[];
    }
    if(isset($_POST["them"])){
        $sv = new Sinhvien();
        $sv->nhapThongTinSV(
            $_POST["maSV"],
            $_POST["name"],
            $_POST["date"],
            $_POST["sex"],
            $_POST["add"],
            $_POST["lop"],
            $_POST["diemToan"],
            $_POST["diemLy"],
            $_POST["diemHoa"]);
        $sv->tinhDTB();
        $_SESSION["danhsachSV"][] = $sv;
    }
    $danhsachSV = $_SESSION["danhsachSV"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quản lý sinh viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
    <table class="form-table">
        <tr>
            <td colspan="2">
                <h2>NHẬP THÔNG TIN SINH VIÊN</h2>
            </td>
        </tr>
        <tr>
            <td><label>Mã sinh viên:</label></td>
            <td><input type="text" name="maSV"></td>
        </tr>
        <tr>
            <td><label>Họ và tên:</label></td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><label>Ngày sinh:</label></td>
            <td><input type="date" name="date"></td>
        </tr>
        <tr>
            <td><label>Giới tính:</label></td>
            <td>
                <select name="sex">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Lớp:</label></td>
            <td><input type="text" name="lop"></td>
        </tr>
        <tr>
            <td><label>Địa chỉ:</label></td>
            <td><input type="text" name="add"></td>
        </tr>
        <tr>
            <td><label>Điểm toán:</label></td>
            <td><input type="number" step="any" name="diemToan"></td>
        </tr>
        <tr>
            <td><label>Điểm lý:</label></td>
            <td><input type="number" step="any" name="diemLy"></td>
        </tr>
        <tr>
            <td><label>Điểm Hóa:</label></td>
            <td><input type="number" step="any" name="diemHoa"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="them" value="Thêm sinh viên">
            </td>
        </tr>
    </table>
</form>
    <?php
    if(!empty($danhsachSV)){
        echo "<table border='1' class='result-table'>";
        echo "<tr>";
        echo "<th>STT</th>";
        echo "<th>Mã SV</th>";
        echo "<th>Họ và tên</th>";
        echo "<th>Giới tính</th>";
        echo "<th>Lớp</th>";
        echo "<th>Địa chỉ</th>";
        echo "<th>Điểm Toán</th>";
        echo "<th>Điểm Lý</th>";
        echo "<th>Điểm Hóa</th>";
        echo "<th>Điểm trung bình</th>";
        echo "</tr>";

        $i = 1;

        foreach ($danhsachSV as $sv) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$sv->maSV</td>";
            echo "<td>$sv->name</td>";
            echo "<td>$sv->sex</td>";
            echo "<td>$sv->lop</td>";
            echo "<td>$sv->add</td>";
            echo "<td>$sv->diemToan</td>";
            echo "<td>$sv->diemLy</td>";
            echo "<td>$sv->diemHoa</td>";
            echo "<td>" . number_format($sv->DTB, 2) . "</td>";
            echo "</tr>";
            $i++;
        }
        echo "</table>";
    }
    ?>
</body>
</html>