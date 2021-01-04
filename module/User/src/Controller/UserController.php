<?php


namespace User\Controller;


use Laminas\Db\Adapter\Adapter;
use Laminas\Db\Adapter\Driver\ResultInterface;
use Laminas\Db\ResultSet\HydratingResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\Hydrator\ReflectionHydrator;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use User\Model\User;

class UserController extends AbstractActionController
{

    public function indexAction(): ViewModel
    {
        $dbAdapter = include __DIR__.'/../../dbAdapter/dbAdaper.config.php';

        $database = new TableGateway('album', $dbAdapter);
        $rowSet = $database->select();

        $data = [
            'artist' => 'awet yes',
            'title' => 'tesfay yes'
        ];

        //$database->update($data, ['artist' => 'hosi']);
        //$database->delete(['artist' => 'hosi']);
        //$database->insert($data);


        return new ViewModel([
            'tables' => $rowSet
        ]);
    }

}