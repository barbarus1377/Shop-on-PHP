<?php include ROOT . '/views/layouts/header.php'; ?>


<!-- Head Section -->
<section class="small-section bg-dark-lighter">
    <div class="relative container align-left">

        <div class="row">

            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Личный кабинет</h1>
            </div>

            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="/">Главная</a>&nbsp;/&nbsp;<a href="#">Личный кабинет</a>&nbsp;/&nbsp;
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Head Section -->            

<!-- Section -->
<section class="page-section">
    <div class="container relative">

        <h2 class="section-title font-alt mb-70 mb-sm-40">
            Здравствуйте, <?php echo $user['name']; ?> !
        </h2>
    </div>  


    <!-- Tab panes -->
    <div class="tab-content tpl-minimal-tabs-cont section-text">

        
            <!-- Login Form -->                            
            <div class="row">
                <div class="section-title">

                    <!-- Paragraph -->
                    <div class="text">
                        <p>
                        <div class="mb-10">
                            <a href="#" class="btn btn-mod btn-circle btn-large">История заказов</a>
                        </div>    
                        </p>
                        <p>
                        <div class="mb-10">
                            <a href="/cabinet/edit/" class="btn btn-mod btn-circle btn-large">Настройки аккаунта</a>
                        </div>    
                        </p>
                        <p>
                        <div class="mb-10">
                            <a href="/user/logout/" class="btn btn-mod btn-circle btn-large">Выход</a>
                        </div>    
                        </p>

                    </div>
                    <!-- End Paragraph -->

                </div>

                </form>

        </div>
        <!-- End Login Form -->

    </div>



</div>

</div>
</section>



<?php include ROOT . '/views/layouts/footer.php'; ?>