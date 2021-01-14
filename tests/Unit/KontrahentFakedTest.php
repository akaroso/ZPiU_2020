<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class KontrahentFakedTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


    public function testGetKontrahent()
    {
            $response = $this->get("/faked/kontrahent");
            $response->assertJsonStructure($response);
    }

    public function testGetKontrahentFrom()
    {
        $nip = 'autem';

        $response = $this->get("/faked/kontrahent/$nip");
    }

   

    public function assertJsonStructure($response)
    {
        $response->assertJsonStructure([
            '*' => [
                'ID',
                'name',
            ]
        ]);
    }




}
