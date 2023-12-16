<?php

namespace Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandler;

use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\CodeJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\JsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\MessageJsonResponseHandlerAttributeContract;
use Shahmal1yev\EasyPay\Yigim\Contracts\JsonResponseHandlerAttribute\UrlJsonResponseHandlerAttributeContract;

interface InitializationJsonResponseHandlerContract extends JsonResponseHandlerAttributeContract, MessageJsonResponseHandlerAttributeContract, CodeJsonResponseHandlerAttributeContract, UrlJsonResponseHandlerAttributeContract
{
    public const array REQUIRED_FIELDS = [
        'url',
        'code',
        'message'
    ];
}