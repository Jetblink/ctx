<?php

namespace Tests\Tree6bee\Ctx;

use Tree6bee\Ctx\Rpc\Http\EasyCurl;

class CtxTest extends \PHPUnit_Framework_TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        //初始化用于测试的ctx单例对象
        $this->ctx = \Tree6bee\Ctx\Ctx::getInstance(__DIR__ . '/ctx-demo');
    }

    public function testCtx()
    {
        $ret = $this->ctx->Ctx->setMessage('Ctx.');
        $this->assertEquals(true, $ret);

        //factory
        $ctx = ctx(__DIR__ . '/ctx-demo');
        $ret = $ctx->Ctx->getMessage('Ctx.');
        $this->assertEquals('hello Ctx.', $ret);
    }
}
