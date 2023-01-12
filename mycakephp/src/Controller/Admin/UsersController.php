<?php
declare(strict_types=1);


namespace App\Controller\Admin;

use Cake\Controller\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */


class UsersController extends Controller
{
    public function show()
    {
        echo "hello";
        die();
    }

}