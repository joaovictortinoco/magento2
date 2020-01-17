<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\CacheInvalidate\Model;

class SocketFactory
{
    /**
     * @return \Laminas\Http\Client\Adapter\Socket
     */
    public function create()
    {
        return new \Laminas\Http\Client\Adapter\Socket();
    }
}
