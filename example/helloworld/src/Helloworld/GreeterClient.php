<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole.
 * @link     https://openswoole.com
 * @contact  hello@openswoole.com
 */
# source: helloworld.proto

namespace Helloworld;

class GreeterClient extends \OpenSwoole\GRPC\BaseStub
{
    /**
     * @throws \OpenSwooleGRPC\Exception\InvokeException
     */
    public function SayHello(HelloRequest $request, $metadata = []): HelloReply
    {
        return $this->_simpleRequest('/helloworld.Greeter/SayHello',
            $request,
            ['\Helloworld\HelloReply', 'decode'],
            $metadata);
    }
}
