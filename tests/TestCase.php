<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\Traits\CanSignIn;

abstract class TestCase extends BaseTestCase
{
    use CanSignIn;
    use CreatesApplication;
    use RefreshDatabase;
}
