<?php
    require 'views/components/header.php';
?>
<main class="item_content" >
    <section class="item_1" >
            <img class="imgIcon" src="<?=$item[0]['product_img']?>" >
    </section>
    <section class="item_2" >
            <?=$item[0]['dicription']?><hr>
            <p><?=$item[0]['price']?> рублей.</p>
            <div class="button">
                <a href="#" id="open_pop_up">Купить</a>
            </div>
    </section>

</main>

<!-- <form action="" method="post">
    <div class="pop_up" id="pop_up">
        <div class="pop_up_container">
            <div class="pop_up_body" id="pop_up_body" >
                <p>Оставить заявку</p>
                <form action="">
                    <input name="name" type="text" placeholder="Введитие имя" >
                    <input name="surname" type="text" placeholder="Введитие фамилию" >
                    <input name="phoneNumber" type="text" placeholder="Введитие ваш телефон">
                    <input type="submit" class="button" value="Оформить заявку" />
                </form>
                <div class="pop_up_close" id="pop_up_close" >&#10006</div>
            </div>
        </div>
    </div>
</form> -->

<script src="/scripts/modal.js"></script>
<?php
    require 'views/components/footer.php';
?>