<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Model\UserTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /**
     * @var UserTable
     */
    protected $userTable;

    public function __construct($userTable)
    {
        $this->userTable = $userTable;
    }

    public function indexAction()
    {
        return new ViewModel();
    }

    public function zooAction() {
        return new ViewModel(['test' => $this->userTable->getByUsername('admin')['username']]);
    }
}
