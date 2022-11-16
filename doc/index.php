<?php  
require '../config/database.php';
condb();
require '../config/controller/product.php';
getAll_pro();
if(isset($_GET['act'])){
    $act =$_GET['act'];
    switch($_GET['act']){
        case 'main':
            require_once './mainControll.php';
        // case 'pos':
        //     require_once './phan-mem-ban-hang.php';
        case 'ql_nhanvien':
            // require_once './navbar.php';
            require_once './table-data-table.php';
        case 'ql_khachhang':
            require_once './navbar.php';
            require_once './Customer_control.php';
        case 'product':
            $kq = getAll_pro();
            require_once './navbar.php';
            require_once './table-data-product.php';
            break;
        case 'order':
            require_once './navbar.php';
            require_once './table-data-oder.php';
        case 'pos':
            require_once './phan-mem-ban-hang.php';
        case 'report':
            require_once './quan-ly-bao-cao.php';
            
    }
}else{
   require_once './navbar.php';
   require_once './table-data-table.php';
}

?>