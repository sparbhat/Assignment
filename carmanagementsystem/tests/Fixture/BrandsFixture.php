<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BrandsFixture
 */
class BrandsFixture extends TestFixture
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
                'name' => 1,
                'description' => 1,
                'status' => 1,
                'created_at' => 1,
                'modified_at' => 1,
            ],
        ];
        parent::init();
    }
}
