<?php
if (! empty($result)) {
    foreach ($result as $k => $v) {
        ?>
<div class="box-container">
    <div class="title">
        <?php echo $result[$k]["nom_qcm"]; ?>
    </div>
    <div class="action">
        <button class="btn-action bn-edit"
            id="<?php echo $result[$k]["id"]; ?>">Répondre</button>
    </div>
</div>
<?php
    }
}
?>