<?php include ROOT.'/views/layouts/header.php';?>
            
            
            <!-- Head Section -->
            <section class="small-section bg-dark-lighter">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Аккаунт</h1>
                            <div class="hs-line-4 font-alt">
                                Выполните вход, или зарегистрируйтесь
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="/">Главная</a>&nbsp;/&nbsp;<a href="/cabinet/">Аккаунт</a>&nbsp;/&nbsp;<a href="#">Вход</a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->            


            <!-- Section -->
            <section class="page-section">
                <div class="container relative">
                    
                    <!-- Nav Tabs -->
                    <div class="align-center mb-40 mb-xxs-30">
                        <ul class="nav nav-tabs tpl-minimal-tabs">
                            
                            <li class="active">
                                <a href="/user/login/">Войти</a>
                            </li>
                            
                            <li>
                                <a href="/user/register/">Регистрация</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- End Nav Tabs -->
                    
                    <!-- Tab panes -->
                    <div class="tab-content tpl-minimal-tabs-cont section-text">
                        
                        <div class="tab-pane fade in active" id="mini-one">
                            
                            <!-- Login Form -->                            
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    
                                     <!-- Вывод ошибок -->
                                    <?php if (isset($errors) && is_array($errors)): ?>
                                        <ul>
                                            <?php foreach ($errors as $error): ?>
                                                <li><?php echo $error; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                    
                                    <form method="post" action="#" id="form-5" role="form" class="form">
                                        <div class="clearfix">
                                            
                                            <!-- Username -->
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" required>
                                            </div>
                                            
                                            <!-- Password -->
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Пароль" required>
                                            </div>
                                                
                                        </div>
                                        
                                        <div class="clearfix">
                                            
                                            <div class="cf-left-col">
                                                
                                                <!-- Inform Tip -->                                        
                                                <div class="form-tip pt-20">
                                                    <a href="">Забыли пароль?</a>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="cf-right-col">
                                                
                                                <!-- Send Button -->
                                                <div class="align-right pt-10">
                                                    <input type="submit" name="submit" class="submit_btn btn btn-mod btn-medium btn-round" value="Войти"/>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                            <!-- End Login Form -->
                            
                        </div>
                        
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
   

<?php include ROOT.'/views/layouts/footer.php';?>