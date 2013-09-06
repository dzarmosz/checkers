<?php

Namespace Erunner\Checkers\Tests\Client;

use Erunner\Checkers\Client\Client;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testClient()
    {
        $client = new Client("Chuck", "Norris", "432543123", "New York");

        $this->assertSame("Chuck Norris New York 432543123", $client->__toString());
    }

    /**
     * @dataProvider provider
     */
    public function testClientProvider($expected, $firstName, $lastName, $phoneNumber, $city)
    {
        $client = new Client($firstName, $lastName, $phoneNumber, $city);

        $this->assertSame($expected, $client->__toString());
    }

    public function provider()
    {
        return array(
            array("Chuck Norris New York 432543123", "Chuck", "Norris", "432543123", "New York"),
            array("Jan Nowak New York 432543123", "Jan", "Nowak", "432543123", "New York"),
            array("   ", null, null, null, null),
        );
    }
}
