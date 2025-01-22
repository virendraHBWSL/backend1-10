<?php
namespace Mageplaza\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class HelloWorld extends Template
{
    protected $_message;

    // Constructor method to set up block data
    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
        $this->_message = "Hello, Magento 2!";
        parent::__construct($context, $data);
    }

    // Getter method for the message
    public function getMessage()
    {
        return $this->_message;
    }
}
//helloworld.php
