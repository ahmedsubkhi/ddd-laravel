<?php

namespace App\Domain\Repositories;

use App\Domain\Models\News;

class NewsRepository
{
	/**
	 * @var $model
	 */
	private $model;

	/**
	 * News Repository constructor.
	 *
	 * @param App\Domain\Models\News $model
	 */
	public function __construct(News $model)
	{
		$this->model = $model;
	}

	/**
	 * Get all news.
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function getAll()
	{
		return $this->model->all();
	}

	/**
	 * Get news by id.
	 *
	 * @param integer $id
	 *
	 * @return App\Domain\Models\News
	 */
	public function getById($id)
	{
		return $this->model->find($id);
	}

    /**
     * Show news filtered by status
     *
     * @return void
     */
    public function hasStatus($status)
    {
        return $this->model->where('status', $status)->get();
    }
    

	/**
	 * Create a new news.
	 *
	 * @param array $attributes
	 *
	 * @return App\Domain\Models\News
	 */
	public function create(array $attributes)
	{
		return $this->model->create($attributes);
	}

	/**
	 * Update a news.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return App\Domain\Models\News
	 */
	public function update($id, array $attributes)
	{
		return $this->model->find($id)->update($attributes);
	}

	/**
	 * Delete a news.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function softdelete($id)
	{
		return $this->model->find($id)->update(['status' => 'deleted']);
	}
}
