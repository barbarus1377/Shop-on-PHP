<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- Head Section -->
<section class="small-section bg-dark-lighter">
    <div class="relative container align-left">

        <div class="row">

            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Связаться с нами</h1>
            </div>

            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="/">Главная</a>&nbsp;/&nbsp;<a href="#">Связаться с нами</a>&nbsp;/&nbsp;
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Head Section -->   
            
            
            <!-- Contact Section -->
            <section class="page-section" id="contact">
                <div class="container relative">
                    
                            
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Задайте Ваш вопрос.
                    </h2>
                    
                    <div class="row mb-60 mb-xs-40">
                        
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                
                                <!-- Phone -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Телефон
                                        </div>
                                        <div class="ci-text">
                                            +7 999 610 1000
                                        </div>
                                    </div>
                                </div>
                                <!-- End Phone -->
                                
                                <!-- Address -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Адрес
                                        </div>
                                        <div class="ci-text">
                                            г. Волгоград, проезд Дорожников д. 37В
                                        </div>
                                    </div>
                                </div>
                                <!-- End Address -->
                                
                                <!-- Email -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Email
                                        </div>
                                        <div class="ci-text">
                                            <a href="mailto:volgstore@mail.ru">volgstore@mail.ru</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Email -->
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Contact Form -->                            
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <?php if ($result): ?>
                            <div class="alert success">
                            <i class="fa fa-lg fa-check-circle-o"></i> Сообщение отправлено! Мы ответим Вам на указанный email.
                        </div>
                            <?php else: ?>
                            <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                 <li>
                                        <div class="alert error"><i class="fa fa-lg  fa-times-circle"></i> <?php echo $error ?> </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                            
                            <form class="form contact-form" method = "post">
                                <div class="clearfix">
                                    
                                    <div class="cf-left-col">
                                        
                                        <!-- Name -->
                                        <div class="form-group">
                                            <input type="text" name="name" class="input-md round form-control" placeholder="Имя" value="<?php echo $userName; ?>"/>
                                        </div>
                                        
                                        <!-- Email -->
                                        <div class="form-group">
                                           <input type="email" name="userEmail" class="input-md round form-control" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="cf-right-col">
                                        
                                        <!-- Message -->
                                        <div class="form-group">                                            
                                            <textarea type="text" name="userText" class="input-md round form-control" style="height: 84px;" placeholder="Сообщение"><?php echo $userText; ?></textarea>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="clearfix">
                                    
                                    <div class="cf-left-col">
                                        
                                        <!-- Inform Tip -->                                        
                                        <div class="form-tip pt-20">
                                            <i class="fa fa-info-circle"></i> Все поля обязательны!
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="cf-right-col">
                                        
                                        <!-- Send Button -->
                                        <div class="align-right pt-10">
                                            <input type="submit" name="submit" class="submit_btn btn btn-mod btn-medium btn-round" value = "Отправить" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                          <?php endif; ?>  
                        </div>
                    </div>
                    <!-- End Contact Form -->
                    
                </div>
            </section>
            <!-- End Contact Section -->
            
<?php include ROOT . '/views/layouts/footer.php'; ?>