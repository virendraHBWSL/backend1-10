<?php

namespace Mageplaza\HelloWorld\Api\Data;

interface CustomDataInterface
{
    /**
     * Get custom data
     *
     * @return string
     */
    public function getCustomData();

    /**
     * Set custom data
     *
     * @param string $customData
     * @return $this
     */
    public function setCustomData($customData);
}
