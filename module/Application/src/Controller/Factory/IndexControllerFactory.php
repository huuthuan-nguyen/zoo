<?php
namespace Application\Controller\Factory;

use Application\Controller\IndexController;
use Application\Model\UserTable;
use Interop\Container\ContainerInterface;
use Zend\Db\Adapter\Adapter;
use Zend\ServiceManager\Factory\FactoryInterface;

class IndexControllerFactory implements FactoryInterface {
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /**
         * @var UserTable
         */
        $userTable = $container->get(UserTable::class);
        $adapter = $container->get(Adapter::class);
        $userTable->setDbAdapter($adapter);
        return new IndexController($userTable);
    }
}