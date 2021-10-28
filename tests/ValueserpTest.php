<?php

namespace WDevs\LaravelValueserp\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Http\Client\RequestException;
use Orchestra\Testbench\TestCase;
use WDevs\LaravelValueserp\LaravelValueserp;
use WDevs\LaravelValueserp\Providers\LaravelValueserpServiceProvider;

class ValueserpTest extends TestCase
{

    /**
     * Define environment setup.
     *
     * @param Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('valueserp.api_key', env('VALUESERP_API_KEY'));
    }


    protected function getPackageProviders($app)
    {
        return [LaravelValueserpServiceProvider::class];
    }


    /**
     * @test
     */
    function it_should_be_able_to_call_the_search_endpoint()
    {
        $api = new LaravelValueserp();

        try {
            $response = $api->search()->searchFor('bitcoin');

            $this->assertTrue(isset($response['organic_results']));

        } catch (RequestException $e) {
            $this->assertEquals(true, false);
        }
    }
}
