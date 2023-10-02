<?php

namespace App\Repositories;

use SOSTheBlack\Repository\Eloquent\BaseRepository;
use SOSTheBlack\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\UserRepository;
use App\Models\User;
use SOSTheBlack\Repository\Exceptions\RepositoryException;

/**
 * Class UserRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return User::class;
    }

    /**
     * Boot up the repository, pushing criteria
     *
     * @return void
     */
    public function boot(): void
    {
        try {
            $this->pushCriteria(app(RequestCriteria::class));
        } catch (RepositoryException $repositoryException) {
        }
    }

}
