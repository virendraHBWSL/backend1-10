<?php
namespace Mageplaza\HelloWorld\Model\Resolver;

use Magento\Framework\GraphQl\Query\ResolverInterface;

class CustomData implements ResolverInterface
{
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, array $value = null, array $args = null)
    {
        // Fetch and return custom data
        return [
            'id' => 1,
            'name' => 'Custom Data',
            // Add more data as needed
        ];
    }
}