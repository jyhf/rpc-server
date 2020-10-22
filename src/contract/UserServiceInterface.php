<?php

declare(strict_types=1);
/**
 * This file is part of jyhf-rpc-server.
 *
 * @link     http://www.zjjyhf.com
 * @contact  253618519@qq.com
 */

namespace Jyhf\RpcServer\Contract;

interface UserServiceInterface
{
    /**
     * Register user
     * @param string      $username
     * @param string      $password
     * @param string|null $parent
     *
     * @return bool
     */
    public function register(string $username, string $password, string $parent = null): bool;
}