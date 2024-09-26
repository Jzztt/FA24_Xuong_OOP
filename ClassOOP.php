<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Car
    {
        // Thuộc tính name
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        // Phương thức getName
        public function getName()
        {
            return $this->name;
        }
    }
    // Tạo 1 đối tượng : new class
    // đối tượng được khởi tạo sẽ nhận được toàn bộ thuộc tính và phương thức của class

    $BMW = new Car("BMW");
    $toyota = new Car("toyota");

    echo $BMW->name;
    echo $BMW->getName();


    // bài tập: tạo ra 1 đối tượng student có thuộc tính name, mssv
    // và phương thức getInfor(name+mssv)

    class Student
    {
        public $name;
        public $mssv;
        public function __construct($FullName, $studentCode)
        {
            $this->name = $FullName;
            $this->mssv = $studentCode;
        }
        public function getInfor()
        {
            return $this->name . '<br>' . $this->mssv;
        }
    }

    $Hien = new Student("Hien", "GCH17569");
    echo $Hien->getInfor();

    // bài tập: tạo ra 1 đối tượng từ class CCCD có thuộc tính name, số CCCD, Ngày sinh, giới tính, quốc gia
    // và phương thức getInfor lấy toàn bộ thông tin của dối tượng.

    class CCCD
    {
        public $name;
        public $CCCD;
        public $NgaySinh;
        public $GioiTinh;
        public $QuocGia;
        public function setter($name, $CCCD, $NgaySinh, $GioiTinh, $QuocGia)
        {
            $this->name = $name;
            $this->CCCD = $CCCD;
            $this->NgaySinh = $NgaySinh;
            $this->GioiTinh = $GioiTinh;
            $this->QuocGia = $QuocGia;
        }
        public function getter()
        {
            return $this->name . '<br>' . $this->CCCD . '<br>' . $this->NgaySinh . '<br>' . $this->GioiTinh . '<br>' . $this->QuocGia;
        }
    }

    $Kien = new CCCD();
    $Kien->setter('Nguyen Van Kien', '212321321', '10/10/2000', 'Nam', 'Viet Nam');
    var_dump($Kien);
    echo $Kien->getter();



    ?>


</body>

</html>