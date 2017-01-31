<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- Head Section -->
<section class="small-section bg-gray-lighter">
    <div class="relative container align-left">

        <div class="row">

            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-0">Корзина</h1>
            </div>

            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="/">Главная</a>&nbsp;/&nbsp;<a href="/catalog/">Каталог</a>&nbsp;/&nbsp;<span>Корзина</span>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Head Section -->


<!-- Section -->
<section class="page-section">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php if ($productsInCart): ?>
                    <table class="table table-striped shopping-cart-table">
                        <tr>
                            <th class="hidden-xs">
                                Фото
                            </th>
                            <th>
                                Наименование
                            </th>
                            <th>
                                Кол-во
                            </th>
                            <th>
                                Цена
                            </th>
                            <th>

                            </th>
                        </tr>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td class="hidden-xs">
                                    <a href="<?php echo Product::getImage($product['id']); ?> " class="lightbox-gallery-3 mfp-image" ><img src="<?php echo Product::getImage($product['id']); ?>" width="20%" height="20%" alt=""/></a>
                                </td>
                                <td>
                                    <a href="/product/<?php echo $product['id']; ?>">
                                        <?php echo $product['name']; ?>
                                    </a>
                                </td>
                                <td>
                                    <?php echo $productsInCart[$product['id']]; ?>
                                </td>
                                <td>
                                    <?php echo $product['price']; ?>
                                </td>
                                <td>
                                    <a href="/cart/delete/<?php echo $product['id']; ?>">
                                        <i class="fa fa-times"></i>
                                    </a> 
                                    <span class="hidden-xs">Удалить</span></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </table>

                    <hr />

                    <div class="row">
                        <div class="col-sm-6"> </div>
                        <div class="col-sm-6 text align-right pt-10">

                            <div class="lead mt-0 mb-30">
                                Сумма заказа: <strong><?php echo $totalPrice; ?> Руб.</strong>
                            </div>

                            <div>
                                <a href="/cart/checkout/" class="btn btn-mod btn-round btn-large">Оформить заказ</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="alert notice">
                <i class="fa fa-lg fa-exclamation-triangle"></i>Корзина пуста
            </div>

            <a class="btn btn-mod btn-round btn-large" href="/catalog/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
        <?php endif; ?>
    </div>
</section>
<!-- End Section -->



<?php include ROOT . '/views/layouts/footer.php'; ?>