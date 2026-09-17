<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>  
<body>
    <?php
    class person{
        public $name;
        public $date;
        public $sex;
        public $add;
        public function nhapThongTin($name, $date, $sex, $add){
            $this->name = $name;
            $this->date = $date;
            $this->sex = $sex;
            $this->add = $add;
        }
    }
    ?>
</body>  
</html>