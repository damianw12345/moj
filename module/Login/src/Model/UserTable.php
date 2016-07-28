<?php
/**
 * Created by PhpStorm.
 * User: damian.warzecha
 * Date: 2016-07-28
 * Time: 13:08
 */

namespace Login\Model;


use Zend\Db\TableGateway\Exception\RuntimeException;
use Zend\Db\TableGateway\TableGatewayInterface;

class UserTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function getUser($username)
    {
        $username = (string) $username;
        $rowset = $this->tableGateway->select(['username' => $username]);
        $row = $rowset->curent();
        if (!$row)
        {
            throw new RuntimeException(
                sprintf('Nie można znaleść wiersza z tą nazwą użytkownika %d', $username)
            );
        }
        return $row;
    }

    public function saveUser(User $user)
    {
        $data = [
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
        ];

        if ($user->getUserId() === 0)
        {
            $this->tableGateway->insert($data);
            return;
        }

        if (! $this->getUser($user->getUsername()))
        {
            throw new RuntimeException(
                sprintf('Nie można zaktualizować %s, nie ma takiego użytkownika', $user->getUsername())
            );
        }
        $this->tableGateway->update($data, ['user_id' => $user->getUserId()]);
    }

    public function deleteUser($user_id)
    {
        $this->tableGateway->delete(['user_id' => $user_id]);
    }

}