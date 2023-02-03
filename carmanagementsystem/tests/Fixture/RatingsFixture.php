<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RatingsFixture
 */
class RatingsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'car_id' => 1,
                'rating' => 1,
                'Review' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created_at' => '2023-01-30 10:02:28',
                'modified_at' => '2023-01-30 10:02:28',
            ],
        ];
        parent::init();
    }
}
