<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarsFixture
 */
class CarsFixture extends TestFixture
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
                'Name' => 'Lorem ipsum dolor sit amet',
                'brand_id' => 1,
                'Make' => 'Lorem ipsum dolor sit amet',
                'Model' => 'Lorem ipsum dolor sit amet',
                'Color' => 'Lorem ipsum dolor sit amet',
                'Description' => 'Lorem ipsum dolor sit amet',
                'image' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created_at' => '2023-01-30 10:02:20',
                'modified_at' => '2023-01-30 10:02:20',
            ],
        ];
        parent::init();
    }
}
