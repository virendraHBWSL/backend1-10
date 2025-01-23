<?php

namespace Mageplaza\HelloWorld\Plugin;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Api\ExtensionAttributesFactory;

class ProductRepositoryPlugin
{
    /**
     * @var ExtensionAttributesFactory
     */
    protected $extensionAttributesFactory;

    /**
     * Constructor
     *
     * @param ExtensionAttributesFactory $extensionAttributesFactory
     */
    public function __construct(
        ExtensionAttributesFactory $extensionAttributesFactory
    ) {
        $this->extensionAttributesFactory = $extensionAttributesFactory;
    }

    /**
     * Add custom data to product extension attributes
     *
     * @param ProductRepositoryInterface $subject
     * @param ProductInterface $entity
     * @return ProductInterface
     */
    public function afterGet(
        ProductRepositoryInterface $subject,
        ProductInterface $entity
    ) {
        $extensionAttributes = $entity->getExtensionAttributes();
        if ($extensionAttributes === null) {
            $extensionAttributes = $this->extensionAttributesFactory->create(
                \Magento\Catalog\Api\Data\ProductInterface::class
            );
        }

        // Set custom data
        $extensionAttributes->setCustomData('Example Custom Data');
        $entity->setExtensionAttributes($extensionAttributes);

        return $entity;
    }
}
