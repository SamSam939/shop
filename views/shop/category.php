<?php
    require 'views/components/header.php';
?>

<section class="page_content" >
    <div class="fur_item">
        <?php foreach($shopCategory as $fur_item): ?>
            <div class="shops-item" >
                <a href="/shop/<?=$category?>/<?=$fur_item['furniture_name']?>" >
                    <img class="imgIcon" src="<?=$fur_item['furniture_img']?>" >
                    <?php echo $fur_item ['discription']?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
    require 'views/components/footer.php';
?>
