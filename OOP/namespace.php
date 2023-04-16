<?php
//Không gian tên là vòng loại giải quyết hai vấn đề khác nhau:
//Chúng cho phép tổ chức tốt hơn bằng cách nhóm các lớp làm việc cùng nhau để thực hiện một nhiệm vụ
//Chúng cho phép sử dụng cùng một tên cho nhiều lớp
namespace Html;

class Table
{
    public $title = "";
    public $numRows = 0;
    public function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    $table->message();
    ?>

</body>

</html>