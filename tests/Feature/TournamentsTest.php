<?php

namespace Tests\Feature;

use App\Models\Tournament;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Inertia\Testing\AssertableInertia as Assert;;

class TournamentsTest extends TestCase
{
    use RefreshDatabase;
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_starting_page_contains_no_tournaments(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertInertia(fn (Assert $page) => $page
            ->component('Tournaments')
            ->has('tournaments', 0)
        );
    }

    public function test_starting_page_contains_tournaments(): void
    {
        Tournament::factory(1)->create();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertInertia(fn (Assert $page) => $page
            ->component('Tournaments')
            ->has('tournaments', 1)
        );
    }

    public function test_root_route_alias_returns_same_view() {
        $responseRoot = $this->get('/');
        $responseAlias = $this->get('/tournamens');

        $responseRoot->assertInertia(fn (Assert $page) => $page
            ->component('Tournaments')
        );

        $responseAlias->assertInertia(fn (Assert $page) => $page
            ->component('Tournaments')
        );
    }
    
}
