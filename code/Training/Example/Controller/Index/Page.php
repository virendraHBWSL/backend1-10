<?php
namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
class Page implements ActionInterface{
    private $pageFactory;
    public function __construct(PageFactory $pageFactory){
      $this->pageFactory=$pageFactory;   
    }
    public function execute(){
        $page= $this->pageFactory->create();
        $page->getConfig()->getTitle()->set("Hello virendra,we are inside Page.php");
        return $page;
    }
}


