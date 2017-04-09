<!--Open foreach (ugly)-->
<?php foreach($sales as $sale) { ?>

<div class="sale">
    <h2 class="sale-title">
        <a href="<?php echo site_url("pdv/view/{$sale['id_sale']}"); ?>">
            <?php echo $sale['description'];?>
        </a>
    </h2>
    <div class="sale-owner">
        <?php 
            if ($sale['owner'] == 1)
                echo "R$ " . $sale['price'] . " [Victor]";
            else
                echo "R$ " . $sale['price'] . " [Dino]";
        ?>
    </div>
    <br>
    <div class="sale-date">
        <?php echo date("Y:M:d", $sale['date']);?>
    </div>
</div>

<?php } ?>
<!--Close foreach (UGLY)-->