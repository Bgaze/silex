<?php

use Silex\WebTestCase;

class controllersTest extends WebTestCase {

    public function testGetHomepage() {
        $client = $this->createClient();
        $client->followRedirects(true);
        $crawler = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertContains('Welcome', $crawler->filter('body')->text());
    }

    public function createApplication() {
        $app = require __DIR__ . '/../src/app.php';
        $app['session.test'] = true;
        return $this->app = $app;
    }

}
