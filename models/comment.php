<?php

namespace Model;

use \SimpleValidator\Validator;
use \SimpleValidator\Validators;

class Comment extends Base
{
    const TABLE = 'comments';

    public function getAll($task_id)
    {
        return $this->db
            ->table(self::TABLE)
            ->columns(
                self::TABLE.'.id',
                self::TABLE.'.date',
                self::TABLE.'.comment',
                \Model\User::TABLE.'.username'
            )
            ->join(\Model\User::TABLE, 'id', 'user_id')
            ->orderBy(self::TABLE.'.date', 'ASC')
            ->eq(self::TABLE.'.task_id', $task_id)
            ->findAll();
    }

    public function create(array $values)
    {
        $values['date'] = time();

        return (bool) $this->db->table(self::TABLE)->save($values);
    }

    public function validateCreation(array $values)
    {
        $v = new Validator($values, array(
            new Validators\Required('task_id', t('This value is required')),
            new Validators\Integer('task_id', t('This value must be an integer')),
            new Validators\Required('user_id', t('This value is required')),
            new Validators\Integer('user_id', t('This value must be an integer')),
            new Validators\Required('comment', t('Comment is required'))
        ));

        return array(
            $v->execute(),
            $v->getErrors()
        );
    }
}
