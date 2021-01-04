<?php


namespace User\Controller;


use Laminas\Db\TableGateway\TableGateway;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class UserController extends AbstractActionController
{
    public function indexAction(): ViewModel
    {
        $dbAdapter = include __DIR__.'/../../dbAdapter/dbAdaper.php';

        $database = new TableGateway('album', $dbAdapter);
        $data = [
            'artist' => 'awet',
            'title' => 'working'
        ];
        $database->insert($data);
        return new ViewModel();
    }

}