<?php
if(isset($_POST["id"])) {
    include_once '../controlleur/CrudController.php';
    $crudcontroller = new CrudController();
    $result = $crudcontroller->edit($_POST);
    print_r(json_encode("Records edited successfully"));
}
?>