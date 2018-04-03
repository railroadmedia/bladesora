<?php

namespace Tests;

use Carbon\Carbon;
use Exception;
use Faker\Generator;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Railroad\Bladesora\Providers\BladesoraServiceProvider;

abstract class TestCase extends BaseTestCase
{
    /**
     * @var Generator
     */
    protected $faker;

    protected function setUp()
    {
        parent::setUp();

        $this->faker = $this->app->make(Generator::class);

        Carbon::setTestNow(Carbon::now());
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app->register(BladesoraServiceProvider::class);
    }

    public function createApplication()
    {
        // TODO: Implement createApplication() method.
    }
}