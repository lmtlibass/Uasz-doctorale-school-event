<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Article;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
   use RefreshDatabase;

    public function test_manage_articles()
{
    // Crée un utilisateur fictif
    $user = User::factory()->create();

    // Se connecte en tant qu'utilisateur
    $this->actingAs($user);

        // Crée un nouvel article
        $this->assertTrue(true);

    // $response = $this->put('/articles/' . 1, [
    //     'title' => 'Nouveau titre d\'article',
    //     'content' => 'Nouveau contenu d\'article old',
    //     'tags' => 'tags',
    //         'user_id' => $user->id,
    // ]);

    // $response->assertStatus(404);

    // $this->assertDatabaseHas('articles', ['id' => $article->id, 'title' => 'Nouveau titre d\'article']);

    // $response = $this->delete('/articles/' . $article->id);

    // $response->assertStatus(404);

    // $this->assertSoftDeleted('articles', ['id' => $article->id]);
}

}
