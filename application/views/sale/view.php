<div class="sale">
    <h2 class="sale-title">
        <a href="<?php echo site_url("sale/view/{$sale['id_sale']}"); ?>">
            <?php echo $post['title'];?>
        </a>
    </h2>
    <div class="sale-date">
        <?php echo date("Y:M:d", $sale['date']);?>
    </div>
    <div class="sale-content">
        <?php echo nl2br($sale['text']);?>
    </div>
    <br>
    <a href="<?php echo site_url("sale/delete/{$sale['id_sale']}"); ?>">
        <button>Delete</button>
    </a>
</div>