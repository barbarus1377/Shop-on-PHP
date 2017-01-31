<?php

class Router
{
		private $routes;
		
		public function __construct ()
		{
                        $routesPath = ROOT.'/config/routes.php';
			$this->routes = include($routesPath);		
			
		}
	
		private function getURI()
		{
		
		if (!empty($_SERVER['REQUEST_URI']))
                    {                
			return trim($_SERVER['REQUEST_URI'], '/');
                    }
                }
		public function run() // принимает управление от Front Controller
		{
			// Получение строки запроса
				$uri = $this->getURI();           
                        // Проверка наличия запроса в routes.php
				foreach ($this->routes as $uriPattern => $path)
                                    {                 
                                    
                                   // Сравнение $uriPattern и $uri
					if (preg_match("~$uriPattern~", $uri))
                                        {      
                                            // Получение внутреннего пути из внешнего
                                                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                                                
                                            // Определение какой контроллер и action обрабатывают запрос
                                                $segments = explode('/', $internalRoute);
                                            // Склеивание названия контроллера
                                                $controllerName = ucfirst(array_shift($segments)).'Controller';
                                                $actionName = 'action'.ucfirst(array_shift($segments));
                                                $parameters = $segments;
                                            //Подключение файла класса-контроллера
						$controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
						if (file_exists($controllerFile)) 
						{
							include_once($controllerFile);
						}
                                            // Создание объекта, вызов метода
						$controllerObject = new $controllerName;
						$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
						
                                                
                                                if ($result !=null)
						{
							break;
						}    
                                        }        
                                    }
                }                       
}                   