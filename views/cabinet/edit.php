<?php include ROOT . '/views/layouts/header.php'; ?>


<!-- Head Section -->
<section class="small-section bg-dark-lighter">
    <div class="relative container align-left">

        <div class="row">

            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Личный кабинет</h1>
                <div class="hs-line-4 font-alt">
                    Редактирование данных
                </div>
            </div>

            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="/">Главная</a>&nbsp;/&nbsp;<a href="/cabinet/">Личный кабинет</a>&nbsp;/&nbsp;<a href="#">Редактирование данных</a>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Head Section -->            


<!-- Section -->
<section class="page-section">
    <div class="container relative">

        <!-- Tab panes -->
        <div class="tab-content tpl-minimal-tabs-cont section-text">

            <!-- Login Form -->                            
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php if ($result): ?>
                        <div class="alert success">
                            <i class="fa fa-lg fa-check-circle-o"></i> Данные успешно отредактированы!
                        </div>
                    <?php else: ?>
                        <h2 class="section-title font-alt mb-70 mb-sm-40">
                            Введите новые данные
                        </h2>
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li>
                                        <div class="alert error"><i class="fa fa-lg  fa-times-circle"></i> <?php echo $error ?> </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <form method="post" action="#" id="form-5" role="form" class="form">
                            <div class="clearfix">

                                <!-- Username -->
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Имя" value="<?php echo $name; ?>" required>
                                </div>

                                <!-- Email -->
                                <div class="form-group">
                                    <input type="email" name="email" id="Email" class="input-md round form-control" placeholder="Email" value="<?php echo $email; ?>" required>
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Пароль" value="<?php echo $password; ?>" required>
                                </div>

                            </div>

                            <div class="clearfix">

                                <div class="cf-right-col">

                                    <!-- Send Button -->
                                    <div class="align-right pt-10">
                                        <input type="submit" name="submit" class="submit_btn btn btn-mod btn-medium btn-round" value="Сохранить"/>
                                    </div>

                                </div>

                            </div>

                        </form>
                    <?php endif; ?>
                </div>
            </div>
            <!-- End Login Form -->

        </div>

    </div>
</section>
<!-- End Section -->


<?php include ROOT . '/views/layouts/footer.php'; ?>