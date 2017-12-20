<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @group failing
     * @return void
     */
    public function testBasicTest()
    {
        $user = new User();
        $user->setNameUser('dai');
        $this->assertEquals($user->getNameUser(), 'dai');
    }
}
