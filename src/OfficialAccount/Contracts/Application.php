<?php

namespace EasyWeChat\OfficialAccount\Contracts;

use EasyWeChat\Kernel\ApiBuilder;
use EasyWeChat\Kernel\Config;
use EasyWeChat\Kernel\Encryptor;

interface Application
{
    public function getAccount(): Account;
    public function getEncryptor(): Encryptor;
    public function getServer(): Server;
    public function getRequest(): Request;
    public function getClient(): ApiBuilder;
    public function getConfig(): Config;
    public function getToken(): string;
}