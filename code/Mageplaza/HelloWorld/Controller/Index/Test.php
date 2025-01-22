<?php
namespace Mageplaza\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Test implements HttpGetActionInterface
{
    public function execute()
    {
        // Output "Hello World" directly
        echo "Hello World";
        exit; // Terminate the script after output
    }
}
