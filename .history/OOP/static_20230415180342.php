<?php
//phuong thuc tinh,thuoc tinh tinh co the dc goi truc tiep ma khong can tao ra mot the hien cua lop
class domain
{
    protected static function getWebsiteName()
    {
        return "W3Schools.com";
    }
}
class domainW3 extends domain
{
    public $websiteName;
    public function __construct()
    {
        $this->websiteName = parent::getWebsiteName();
    }
}
$domainW3 = new domainW3;
echo $domainW3->websiteName;
