<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_generate_gravatar_default_image_when_no_email_found()
    {
        $user = User::factory()->create([
                'name' => 'Jamol',
                'email' => 'random@random.com',
                ]);
            $gravatarUrl = $user->getAvatar();

            $this->assertEquals('https://www.gravatar.com/avatar/'.md5($user->email).'?s=200&d=https%3A%2F%2Fs3.amazonaws.com%2Flaracasts%2Fimages%2Fforum%2Favatars%2Fdefault-avatar-18.png',
 $gravatarUrl);

    }
}
