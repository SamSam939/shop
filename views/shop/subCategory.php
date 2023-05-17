<?php
    require 'views/components/header.php';
?>

<section class="page_content" >
    <div class="fur_item">
        <?php foreach($shopSubCategory as $fur_item): ?>
            <div class="shops-item" >
                <a href="/item/<?=$fur_item['product_id']?>" >
                    <img class="imgIcon" src="<?=$fur_item['product_img']?>" >
                    <p>
                        <?php echo $fur_item ['product_name']?>
                        <?php echo $fur_item ['price']?> рублей
                    </p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
    require 'views/components/footer.php';
?>