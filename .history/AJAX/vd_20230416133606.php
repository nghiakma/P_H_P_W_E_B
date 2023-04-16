<?php
$html = ' 
      <head> 
         <title>Học lập trình tại Hoclaptrinh</title>
      </head> 

      <body> 
         <h2>Chi tiết khóa học</h2> 

         <table border="0"> 
            <tbody> 
               <tr> 
                  <td>Android</td> 
                  <td>Nguyen Hoang Manh</td> 
                  <td>BKcompany</td> 
               </tr> 

               <tr> 
                  <td>PHP</td> 
                  <td>Tran Hoang Nam</td> 
                  <td>BKcompany</td> 
               </tr> 

               <tr> 
                  <td>HTML</td> 
                  <td>Tran Minh Chinh</td> 
                  <td>BKcompany</td> 
               </tr> 

               <tr> 
                  <td>CSS</td> 
                  <td>Le Duc Viet</td> 
                  <td>BKcompany</td> 
               </tr> 

               <tr> 
                  <td>C++</td> 
                  <td>Tran Duc Hung</td> 
                  <td>BKcompany</td> 
               </tr> 

               <tr> 
                  <td>Python</td> 
                  <td>Phan Hoang Nam</td> 
                  <td>BKcompany</td> 
               </tr> 

               <tr> 
                  <td>C#</td> 
                  <td>Dinh Tien Manh</td> 
                  <td>BKcompany</td> 
               </tr> 
            </tbody> 
         </table> 
      </body> 
   </html> 
   ';
/*** Tạo một đối tượng DOM mới ***/
$dom = new domDocument;

/*** Tải html vào trong đối tượng ***/
$dom->loadHTML($html);

/*** loại bỏ khoảng trắng ***/
$dom->preserveWhiteSpace = false;

/*** lấy bảng theo tên thẻ ***/
$tables = $dom->getElementsByTagName('table');

/*** lấy tất cả các hàng từ bảng ***/
$rows = $tables->getElementsByTagName('tr');

/*** lặp qua các hàng trong bảng ***/
foreach ($rows as $row) {
    /*** lấy cột theo tên thẻ ***/
    $cols = $row->getElementsByTagName('td');

    /*** Hiển thị giá trị ***/
    echo 'Khóa học: ' . $cols->item(0)->nodeValue . '<br />';
    echo 'Giảng viên: ' . $cols->item(1)->nodeValue . '<br />';
    echo 'Công ty: ' . $cols->item(2)->nodeValue;
    echo '<hr />';
}
