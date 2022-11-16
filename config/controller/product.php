<?php
function getAll_pro(){
    $conn = condb();
    $stmt = $conn->prepare("SELECT ID, prd_name, prd_img, quaility, prd_status, prd_sell_price, id_prd_group FROM cms_product");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt -> fetchAll();
    return $kq;
}
?>