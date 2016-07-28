<?php
/**
 * Created by PhpStorm.
 * User: damian.warzecha
 * Date: 2016-07-28
 * Time: 12:57
 */

namespace Login\Model;


class User
{

    private $user_id;
    private $username;
    private $email;
    private $password;

    public function exchangeArray(array $data)
    {
        $this->setUserId(!empty($data['user_id']) ? $data['user_id'] : null);
        $this->setUsername(!empty($data['username']) ? $data['username'] : null);
        $this->setEmail(!empty($data['email']) ? $data['email'] : null);
        $this->setPassword(!empty($data['password']) ? $data['password'] : null);
    }


    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }



}