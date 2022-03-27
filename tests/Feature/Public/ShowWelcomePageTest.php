<?php

namespace Tests\Feature\Public;

use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class ShowWelcomePageTest extends TestCase
{
    /**
     * Setup test.
     *
     * @return  void
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Go to welcome page.
     *
     * @param  array  $parameters
     * @return \Illuminate\Testing\TestResponse
     */
    protected function visitWelcomePage(array $parameters = []): TestResponse
    {
        return $this->get('/');
    }

    /** @test */
    public function it_can_show_welcome_page()
    {
        $this->visitWelcomePage()
            ->assertOk();
    }
}
