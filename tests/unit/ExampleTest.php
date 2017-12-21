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

    /**
     * A basic test example.
     *
     * @group true
     * @return void
     */
    public function testTrue()
    {
        $this->assertTrue(true);
    }
    
    public function testTrue1()
    {
        $this->assertTrue(true);
    }
}
