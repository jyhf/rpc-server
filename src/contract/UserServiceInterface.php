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
     *
     * @param string      $username
     * @param string      $password
     * @param string|null $parent
     *
     * @return bool
     */
    public function register(string $username, string $password, string $parent = null): bool;

    /**
     * Get mall user info by token
     *
     * @param string $token
     *
     * @return array
     */
    public function getMallUserByToken(string $token): array;

    /**
     * Get User Parent account
     *
     * @param string $account
     *
     * @return string|null
     */
    public function getUserParentAccount(string $account): ?string;

    /**
     * Login
     * @param string $username
     * @param string $password
     * @param string $platform
     *
     * @return string|null
     */
    public function login(string $username, string $password, string $platform): ?string;

    /**
     * Get User info by token
     *
     * @param string      $token
     * @param string|null $platform
     *
     * @return array
     */
    public function getUserByToken(string $token, ?string $platform = null): array;
}