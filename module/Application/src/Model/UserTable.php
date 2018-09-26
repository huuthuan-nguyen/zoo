<?php
namespace Application\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Adapter\AdapterAwareInterface;
use Zend\Db\TableGateway\AbstractTableGateway;

class UserTable extends AbstractTableGateway implements AdapterAwareInterface {
    protected $table = 'user';

    public function setDbAdapter(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->initialize();
    }

    public function getByUsername($username) {
        $rowset = $this->select(['username' => $username]);
        return $rowset->current();
    }
}