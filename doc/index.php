<?php  
require_once './navbar.php';
if(isset($_GET['act'])){
    $act =$_GET['act'];
    switch($_GET['act']){
        case 'main':
            require_once './mainControll.php';
        case 'pos':
            require_once './phan-mem-ban-hang.php';
        case 'ql_nhanvien':
            require_once './table-data-table.php';
        case 'ql_khachhang':
            require_once './Customer_control.php';
        case 'product':
            require_once './table-data-product.php';
        case 'order':
            require_once './table-data-oder.php';
            
    }
}

?>