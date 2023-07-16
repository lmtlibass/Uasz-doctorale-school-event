<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Appelle;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AppelleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_admin_pulich_appelle(): void
    {
        $user = User::factory()->create();

        $response = $this->post('/responsable/appelle/create', [
            'title' => 'Nouvel appel à communication',
            'description' => 'Description de l\'appel à communication',
            'image' => 'image.png',
            'pj' => 'fichier.pdf',
            'user_id' => $user->id,
        ]);

        $response->assertStatus(405);
    }

    public function test_envoie_proposition_communication() :  void
    {
        $user = User::factory()->create();
        

        $response = $this->post('/responsable/appelle/create', [
            'title' => 'Nouvel appel à communication',
            'description' => 'Description de l\'appel à communication',
            'image' => 'image.png',
            'pj' => 'fichier.pdf',
            'status' => null,
            'appelle_id' => 1,
            'user_id' => $user->id,
        ]);

        $response->assertStatus(405);
    }
}
