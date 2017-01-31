<?php include ROOT.'/views/layouts/header.php';?>
           
            <!-- Head Section -->
            <section class="small-section bg-gray-lighter">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">
                                <?php echo $product['name'];?></h1>
                            
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="/">Главная</a>&nbsp;/&nbsp;<a href="/catalog/">Каталог</a>&nbsp;/&nbsp;<span>
                                    <?php echo $product['name'];?></span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                   <!-- Product Content -->
                    <div class="row mb-60 mb-xs-30">

                        <!-- Product Images -->
                        <div class="col-md-4 mb-md-30">

                            <div class="post-prev-img">
                                <a href="<?php echo Product::getImage($product['id']); ?>" class="lightbox-gallery-3 mfp-image"><img src="<?php echo Product::getImage($product['id']); ?>" alt="" /></a>
                                <?php if ($product['is_sale']): ?>
                                    <div class="intro-label">
                                        <span class="label label-danger bg-red">Супер-цена</span>
                                    </div>
                                <?php endif; ?>
                            </div>


                        </div>
                        <!-- End Product Images -->

                        <!-- Product Description -->
                        <div class="col-sm-8 col-md-5 mb-xs-40">

                            <h3 class="mt-0"><?php echo $product['name'];?></h3>

                            <hr class="mt-0 mb-30"/>

                            <div class="row">
                                <div class="col-xs-6 lead mt-0 mb-20">

                                    <strong><?php echo $product['price'];?> руб.</strong>

                                </div>
                               
                            </div>

                            <hr class="mt-0 mb-30"/>

                            <div class="section-text mb-30">
                            <?php echo $product['short_discription'];?>
                            </div>

                            <hr class="mt-0 mb-30"/>

                            <div class="mb-30">
                                <form method="post" action="#" class="form">
                                    <a href="/cart/add/<?php echo $product['id'];?>" class="btn btn-mod btn-large btn-round" data-id="<?php echo $product['id'];?>">Добавить в корзину</a>
                                </form>
                            </div>

                            <hr class="mt-0 mb-30"/>

                        </div>
                        <!-- End Product Description -->

                        <!-- Features -->
                        <div class="col-sm-4 col-md-3 mb-xs-40">

                            <!-- Features Item -->
                            <div class="alt-service-wrap">
                                <div class="alt-service-item">
                                    <div class="alt-service-icon">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </div>
                                    <h3 class="alt-services-title font-alt">Быстрая доставка</h3>
                                    Vivamus neque orci, ultricies blandit ultricies vel, semper..
                                </div>
                            </div>
                            <!-- End Features Item -->

                            <!-- Features Item -->
                            <div class="alt-service-wrap">
                                <div class="alt-service-item">
                                    <div class="alt-service-icon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <h3 class="alt-services-title font-alt">14 дней на проверку</h3>
                                    Vivamus neque orci, ultricies blandit ultricies vel, semper..
                                </div>
                            </div>
                            <!-- End Features Item -->

                            <!-- Features Item -->
                            <div class="alt-service-wrap">
                                <div class="alt-service-item">
                                    <div class="alt-service-icon">
                                        <i class="fa fa-gift"></i>
                                    </div>
                                    <h3 class="alt-services-title font-alt">100% оригинал</h3>
                                    Vivamus neque orci, ultricies blandit ultricies vel, semper..
                                </div>
                            </div>
                            <!-- End Features Item -->



                        </div>
                        <!-- End Features -->

                    </div>
                    <!-- End Product Content -->


                    
                    
                </div>
            </section>
            <!-- End Related Products -->
            
             <?php include ROOT.'/views/layouts/footer.php';?> 