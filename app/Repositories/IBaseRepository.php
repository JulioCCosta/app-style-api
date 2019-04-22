<?php
/**
 * Created by PhpStorm.
 * User: Julio Costa
 * Date: 06/04/2019
 * Time: 00:11
 */

namespace App\Repositories;


interface IBaseRepository
{
    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);
    /**
     * @param array $attributes
     * @return bool
     */
    public function update(array $attributes);
    /**
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     * @return mixed
     */
    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc');
    /**
     * @param $id
     * @return mixed
     */
    public function find($id);
    /**
     * @param $id
     * @return mixed
     */
    public function findOneOrFail($id);
    /**
     * @param array $data
     * @return mixed
     */
    public function findBy(array $data);
    /**
     * @param array $data
     * @return mixed
     */
    public function findOneBy(array $data);
    /**
     * @param array $data
     * @return mixed
     */
    public function findOneByOrFail(array $data);
    /**
     * @return bool
     */
    public function delete();
    /**
     * @param array $data
     * @param int $perPage
     */
   // public function paginateArrayResults(array $data, int $perPage = 50);

}
