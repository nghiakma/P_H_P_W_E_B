<?php
//AJAX cap nhan cac phan cua trang web ma khong can tai lai toan bo trang
/*
XMLHttpRequest(trao doi du lieu khong dong bo voi may chu)
Js/Dom(de hien thi/ tuong tac voi thong tin)
CSS(de dinh kieu du lieu)
XML(thuong dc su dung lam dinh dang de truyen du lieu)
*/
//mang cac phan tu
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
//Biến $q trong đoạn mã này được sử dụng để lưu trữ tham số q được truyền vào từ URL. 
//Tham số q là một chuỗi được gửi từ phía người dùng
//$_REQUEST là một mảng toàn cục trong PHP chứa ba mảng tương ứng $_GET, $_POST và $_COOKIE.
// Nó có thể được sử dụng để truy cập các tham số HTTP POST hoặc GET hoặc giá trị cookie được gửi đến một trang web.
//get the q parameter from URL
$q = $_REQUEST['q'];
//tao chuoi hint de luu goi y
$hint = "";
//tra cuu tat ca cac goi y tu mang
if ($q != "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $name) {
        //stristr() là một hàm trong PHP được sử dụng để tìm kiếm một chuỗi trong chuỗi khác mà không phân biệt chữ hoa và chữ thường. 
        //Hàm substr() được sử dụng để lấy một phần của chuỗi $name bắt đầu từ vị trí đầu tiên với độ dài là độ dài của chuỗi $q.

        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
