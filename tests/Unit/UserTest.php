<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testCreateUser()
    {
        $data = [
            'name' => "Rahul",
            'age' => 11,
            'address' => "India"
        ];
        $response = $this->json('POST', '/api/users', $data);

        $response->assertJson([
            'status' => 201,
            'message' => "Created",

            'data' => $data
        ]);
    }

    public function testGettingAllUsers()
    {
        $response = $this->json('GET', '/api/users');

        $response->assertJson([
            'status' => 200,
            'message' => 'List Of Users'
        ]);

        $response->assertJsonStructure([

            'data' => [
                '*' => [
                    'id',
                    'name',
                    'age',
                    'address',
                    'points',
                    'created_at',
                    'updated_at'
                ]
            ]
        ]);
    }

    public function testDeleteUser()
    {
        $response = $this->json('GET', '/api/users');
        $response->assertStatus(200);

        // $user = $response->getData()->data[0];

        $delete = $this->json('DELETE', '/api/users/' . 33);
        $delete->assertJson([
            'status' => 200,
            'message' => 'deleted'
        ]);
    }
}
