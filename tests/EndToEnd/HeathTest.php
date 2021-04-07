<?php

namespace App\Tests\EndToEnd;

use Symfony\Component\Panther\PantherTestCase;

class HeathTest extends PantherTestCase
{
    public function testSomething(): void
    {
        $client = static::createPantherClient();
        $crawler = $client->request('GET', '/');

        $this->assertSelectorTextContains('h1', 'Hello World');
    }
}
