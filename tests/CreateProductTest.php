<?php

use Faker\Factory;
use Illuminate\Http\Response;

class CreateProductTest extends TestCase
{
    private \Faker\Generator $faker;

    public function setUp(): void
    {
        parent::setUp();

        $this->faker = Factory::create();
    }

    /**
     * Tests Product creation.
     *
     * @return void
     */
    public function testCreateBill()
    {
        $this->withoutMiddleware();

        $data = [
            'name' => $this->faker->word,
            'sku' => $this->faker->word,
            'subcategory_id' => $this->faker->numberBetween(1,10),
            'active' => $this->faker->boolean,
            'price' => $this->faker->numberBetween(100,5000),
            'cost' => $this->faker->numberBetween(100,5000),
            'image' => $this->faker->imageUrl(),
            'tax' => [
                'id' => $this->faker->numberBetween(1,2),
                'name' => $this->faker->word,
                'amount' => $this->faker->numberBetween(1,100)
            ]
        ];

        $this->post('/api/products', $data);

        $this->assertResponseStatus(Response::HTTP_OK);
    }
}
