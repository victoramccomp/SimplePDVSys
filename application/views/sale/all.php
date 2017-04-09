<!--Open foreach (ugly)-->
<?php foreach($sales as $sale) { ?>

<div class="sale">
    <h2 class="sale-title">
        <a href="<?php echo site_url("pdv/view/{$sale['id_sale']}"); ?>">
            <?php echo $sale['title'];?>
        </a>
    </h2>
    <div class="sale-date">
        <?php echo date("Y:M:d", $sale['date']);?>
    </div>
    <div class="sale-content">
        <?php echo nl2br($sale['text']);?>
    </div>

</div>

<?php } ?>
<!--Close foreach (UGLY)-->