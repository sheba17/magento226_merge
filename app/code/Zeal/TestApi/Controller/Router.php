<?php

namespace Zeal\TestApi\Controller;
class Router implements \Magento\Framework\App\RouterInterface
{
   protected $actionFactory;
   protected $_response;
   public function __construct(
       \Magento\Framework\App\ActionFactory $actionFactory,
       \Magento\Framework\App\ResponseInterface $response
   ) {
       $this->actionFactory = $actionFactory;
       $this->_response = $response;
   }
   public function match(\Magento\Framework\App\RequestInterface $request)
   {
    	echo '<pre>';
		echo 'Test';
		die();    
	$info = $request->getPathInfo();
		echo $info;
		die();
	    if (preg_match("%^/(var1/var2)(.*?)$%", $info, $m)) {
	        $request->setPathInfo(str_replace('var1/var2', '', $info));
	        return $this->actionFactory->create('Magento\Framework\App\Action\Forward',
	            ['request' => $request]);
	    }
	    return null;
   }
}