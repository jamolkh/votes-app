<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function list_of_ideas_shows_on_main_page()
    {
        $categoryOne = Category::factory()->create(['name'=> 'Category 1']);
        $categoryTwo = Category::factory()->create(['name'=> 'Category 2']);


        $ideaOne = Idea::factory()->create([
            'title' => 'My First Idea',
            'category_id' => $categoryOne->id,
            'description' => 'Description of my first idea'
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'My Second Idea',
            'category_id' => $categoryTwo->id,
            'description' => 'Description of my second idea'
        ]);

        $response = $this->get(route('idea.index'));
        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($categoryOne->name);
        $response->assertSee($ideaOne->description);
        $response->assertSee($ideaTwo->title);
        $response->assertSee($categoryTwo->name);
        $response->assertSee($ideaTwo->description);

    }
        /** @test */

    public function list_of_idea_shows_on_the_show_page()
    {
        $categoryOne = Category::factory()->create(['name'=> 'Category 1']);

        $idea = Idea::factory()->create([
            'title' => 'My First Idea',
            'category_id' => $categoryOne->id,
            'description' => 'Description of my first idea'
        ]);

        $response = $this->get(route('idea.show', $idea));
        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($categoryOne->name);
        $response->assertSee($idea->description);
    }
    /** @test */
    public function ideas_pagination_works()
    {
        $categoryOne = Category::factory()->create(['name'=> 'Category 1']);
        Idea::factory(Idea::PAGINATION_COUNT + 1)->create(['category_id' => $categoryOne->id]);
        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My First Idea';
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = 'My 11th Idea';
        $ideaEleven->save();

        $response = $this->get(route('idea.index'));
        $response->assertSee($ideaOne->title);
        $response->assertSee($categoryOne->name);

        $response = $this->get('/?page=2');
        $response->assertDontSee($ideaOne->title);
        $response->assertSee($ideaEleven->title);


    }
    /** @test */
    public function idea_same_names_work()
    {
        $categoryOne = Category::factory()->create(['name'=> 'Category 1']);
        $ideaOne = Idea::factory()->create([
            'category_id' => $categoryOne->id,
            'title' => 'My First Idea',
            'description' => 'Description for my first Idea',
        ]);
        $ideaTwo = Idea::factory()->create([
            'category_id' => $categoryOne->id,
            'title' => 'My First Idea',
            'description' => 'Another Description for my first Idea',
        ]);
        $this->assertEquals('my-first-idea', $ideaOne->slug);
        $this->assertEquals('my-first-idea-2', $ideaTwo->slug);

    }
}
