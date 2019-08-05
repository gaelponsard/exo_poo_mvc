<?php
if (isset($_POST["add"])) {
    include_once '../controlleur/CrudController.php';
    $crudcontroller = new CrudController();
    $result = $crudcontroller->add($_POST);
    header("Location: ../vue/index.php");
}
?>