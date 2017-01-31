<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- Head Section -->
<section class="small-section bg-gray-lighter">
    <div class="relative container align-left">

        <div class="row">

            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-0">Оформление заказа</h1>
            </div>

            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="/">Главная</a>&nbsp;/&nbsp;<a href="/catalog/">Каталог</a>&nbsp;/&nbsp;<a href="/cart/">Корзина</a>&nbsp;/&nbsp;<span>Оформить заказ</span>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Head Section -->
<section class="page-section">
    <div class="container relative">

        <div class="row">
            <div class="col-md-4 col-md-offset-4">




                <?php if ($result): ?>
                    <div class="alert success">
                        <i class="fa fa-lg fa-exclamation-triangle"></i>Заказ оформлен. Мы Вам перезвоним.
                    </div>
                <?php else: ?>

                    <h2 class="title text-center">Оформить заказ</h2>
                    <div class="tab-pane fade in active">
                        <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, руб.</p><br/>

                        <div class="row">

                            <?php if (!$result): ?>                        
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li>
                                                <div class="alert error"><i class="fa fa-lg  fa-times-circle"></i> <?php echo $error ?> </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>


                                <form action="#" method="post">
                                    <div class="clearfix">
                                        <div class="form-group">
                                            <p>Ваша имя</p>
                                            <input type="text" name="userName" placeholder="Имя" class="input-md round form-control" value="<?php echo $userName; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <p>Номер телефона</p>
                                            <input type="text" name="userPhone" placeholder="Телефон" class="input-md round form-control" value="<?php echo $userPhone; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <p>Комментарий к заказу</p>
                                            <input type="text" name="userComment" placeholder="Сообщение" class="input-md round form-control" value="<?php echo $userComment; ?>"/>
                                        </div>
                                        <br/>
                                        <br/>
                                        <input type="submit" name="submit" class="submit_btn btn btn-mod btn-medium btn-round btn-full" value="Оформить" />

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                <?php endif; ?>

            <?php endif; ?>

        </div>

    </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>