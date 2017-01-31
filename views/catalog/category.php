<?php include ROOT.'/views/layouts/header.php';?>
            
            
            <!-- Head Section -->
            <section class="small-section bg-gray-lighter">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">
                                <?php foreach ($categories as $categoryItem): ?>
                                    <?php if ($categoryId == $categoryItem['id']) echo $categoryItem['name'];?>
                                        <?php endforeach; ?></h1>
                            <div class="hs-line-4 font-alt black">
                                Выберете интересующий вас товар
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="/">Главная</a>&nbsp;/&nbsp;<a href="/catalog/">Каталог</a>&nbsp;/&nbsp;<span>
                                    <?php foreach ($categories as $categoryItem): ?>
                                    <?php if ($categoryId == $categoryItem['id']) echo $categoryItem['name'];?>
                                        <?php endforeach; ?></span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            
            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <div class="row">
                       <!-- Sidebar -->
                        <div class="col-sm-4 col-md-3 sidebar">
                            
                            <!-- Widget -->
                            <div class="widget">
                                
                                <h5 class="widget-title font-alt">Категории</h5>
                                
                                <div class="widget-body">
                                    <ul class="clearlist widget-menu">
                                        <?php foreach ($categories as $categoryItem): ?>
                                            <li>
                                                <a href="/category/<?php echo $categoryItem['id'];?>" title="">
                                                    <?php echo $categoryItem['name'];?>
                                                </a>
                                                <small>
                                                - <?php echo $categoryItem['count'] ?>
                                                </small>
                                            </li>
                                        <?php endforeach; ?>   
                                    </ul>
                                </div>
                                
                            </div>
                            <!-- End Widget -->
                            
                        </div>
                        <!-- End Sidebar -->   
                        <!-- Content -->
                        <div class="col-sm-8">
                            
                            <!-- Shop options -->
                            <div class="clearfix mb-40">
                                
                                <div class="left section-text mt-10">
                                    Показано <?php if ($total > 6): ?> 
                                        <?php echo 6?>
                                        <?php elseif ($total <= 6):?>
                                        <?php echo $total?>
                                        <?php endif;?>
                                    из <?php echo $total ?> результатов
                                </div>
                               
                                
                            </div>
                            <!-- End Shop options -->
                            
                            <div class="row multi-columns-row">
                        
                                <!-- Shop Item -->
                                <?php foreach ($categoryProducts as $product):?>
                                <div class="col-md-4 col-lg-4 mb-60 mb-xs-40">
                                    <div class="post-prev-img">
                                        
                                        <a href="/product/<?php echo $product['id'];?>"><img src="<?php echo Product::getImage($product['id']); ?>" alt="" /></a>
                                        <?php if ($product['is_sale']):?>
                                        <div class="intro-label">
                                            <span class="label label-danger bg-red">Супер-цена</span>
                                        </div>
                                        <?php endif;?>
                                    </div>
                                    
                                    <div class="post-prev-title font-alt align-center">
                                        <a href="/product/<?php echo $product['id'];?>"><?php echo $product['name'];?></a>
                                    </div>

                                    <div class="post-prev-text align-center">
                                        <strong><?php echo $product['price'];?> руб.</strong>
                                    </div>
                                    
                                    <div class="post-prev-more align-center">
                                        <a href="/cart/add/<?php echo $product['id'];?>" class="btn btn-mod btn-gray btn-round add-to-cart" data-id="<?php echo $product['id'];?>"><i class="fa fa-shopping-cart"></i> Добавить в корзину</a>
                                    </div>
                                    
                                </div>
                                <?php endforeach ?>
                                <!-- End Shop Item -->
                            </div>
                            
                            <!-- Pagination -->
                                
                            <?php echo $pagination->get(); ?>    
                            
                            <!-- End Pagination -->
                            
                        </div>
                        <!-- End Content -->
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
            
 <?php include ROOT.'/views/layouts/footer.php';?>           


