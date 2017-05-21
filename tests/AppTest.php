<?php namespace Miskowskij\Test;

use \GuzzleHttp\Client;

class AppTest extends \PHPUnit_Framework_TestCase {

    private $client;
    private $domain;

    public function setUp()
    {
        parent::setUp();

        $this->client = new Client();
        $this->domain = 'http://localhost:8000/ops/aws-lamp-app/src/App.php';
    }

    public function testIndex()
    {
        $relativePath = '/';
        $response = $this->client->request('GET', $this->domain . $relativePath);

        $statusCode = $response->getStatusCode();
        $this->assertEquals($statusCode, 200);

        $body = $response->getBody();
        $this->assertEquals($body, 'welcome to root');
    }

    public function testFoo()
    {
        $relativePath = '/foo';
        $response = $this->client->request('GET', $this->domain . $relativePath);

        $statusCode = $response->getStatusCode();
        $this->assertEquals($statusCode, 200);

        $body = $response->getBody();
        $this->assertEquals($body, 'welcome to foo');
    }

    public function testBar()
    {
        $relativePath = '/bar';
        $response = $this->client->request('GET', $this->domain . $relativePath);

        $statusCode = $response->getStatusCode();
        $this->assertEquals($statusCode, 200);

        $body = $response->getBody();
        $this->assertEquals($body, 'welcome to bar');
    }

}
