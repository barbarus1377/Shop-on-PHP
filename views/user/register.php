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
                                <a href="/">Главная</a>&nbsp;/&nbsp;<a href="/cabinet/">Аккаунт</a>&nbsp;/&nbsp;<a href="#">Регистрация</a>
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
                            
                            <li>
                                <a href="/user/login/">Войти</a>
                            </li>
                            
                            <li class="active">
                                <a href="/user/register/">Регистрация</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- End Nav Tabs -->
                    
                    <!-- Tab panes -->
                    <div class="tab-content tpl-minimal-tabs-cont section-text">
                        
                        <div class="tab-pane fade in active" id="mini-one">
                            
                            <!-- Registry Form -->                            
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    
                                    <?php if ($result): ?>
                                         <div class="alert success">
                                            <i class="fa fa-lg fa-check-circle-o"></i> Вы успешно зарегистрированы!
					</div>
                                    <?php endif ?>
                                    <!-- Вывод ошибок -->
                                    <?php if (isset($errors) && is_array($errors)): ?>
                                        <ul>
                                            <?php foreach ($errors as $error): ?>
                                                <li>
                                                    <div class="alert error"><i class="fa fa-lg  fa-times-circle"></i> <?php echo $error?> </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                    
                                    <form method="post" action="#" id="form-5" role="form" class="form">
                                        <div class="clearfix">
                                            
                                            <!-- Username -->
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Имя" required>
                                            </div>
                                            
                                            <!-- Email -->
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" required>
                                            </div>
                                            
                                            <!-- Password -->
                                            <div class="form-group">
                                                <input type="password" name="password" id="password" class="input-md round form-control" placeholder="Пароль" required>
                                            </div>
                                              
                                        </div>
                                        
                                        <!-- Send Button -->
                                        <div class="pt-10">
                                            <input type="submit" name="submit" class="submit_btn btn btn-mod btn-medium btn-round btn-full" value="Регистрация"/>
                                        </div>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                            <!-- End Registry Form -->
                            
                        </div>
                                               
                    </div>
                    
                </div>
            </section>
            <!-- End Section -->
   

<?php include ROOT.'/views/layouts/footer.php';?>