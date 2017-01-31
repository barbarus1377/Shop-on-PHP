<?php

class CatalogController
{

	public function actionIndex ($page = 1)
	{
            $categories = array();
            $categories = Category::getCategoryList();
            
            // Обработка формы
            if (isset($_POST['submit'])) {
                $sort = $_POST['sort'];
                $sort = Product::sorting($sort);
            }
            
            $latestProducts = array();
            $latestProducts = Product::getLatestProducts(9, $page);
            
            
            $total = Product::getTotalProducts();
            
            $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
            
                       
            require_once (ROOT . '/views/catalog/index.php');
	
            return true;
	}
        
        /**
     * Action для страницы "Категория товаров"
     */
        public function actionCategory($categoryId, $page = 1)
        {
            $categories = array();
            $categories = Category::getCategoryList();
            
            $categoryProducts = array();
            $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
            
            $total = Product::getTotalProductsInCategory($categoryId);
                      
            $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

             
            
            require_once(ROOT . '/views/catalog/category.php');
            return true;
        }
	
        public function actionSearch()
        {
            $categories = array();
            $categories = Category::getCategoryList();
            
            $latestProducts = array();
            $latestProducts = Product::getLatestProducts(9, $page);
            
            $total = Product::getTotalProducts();
            
            $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
            
            $searchProducts = array();
            $searchProducts = Product::search($words);
                       
            require_once (ROOT . '/views/catalog/search.php');
	
            return true;
        }

}