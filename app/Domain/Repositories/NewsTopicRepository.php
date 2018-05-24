<?php

namespace App\Domain\Repositories;

use App\Domain\Models\NewsTopic;

class NewsTopicRepository
{
	/**
	 * @var $model
	 */
	private $model;

	/**
	 * NewsTopic Repository constructor.
	 *
	 * @param App\Domain\Models\NewsTopic $model
	 */
	public function __construct(NewsTopic $model)
	{
		$this->model = $model;
	}

	/**
	 * Get all news topic.
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function getAll()
	{
		return $this->model->all();
	}

	/**
	 * Get news topic by id.
	 *
	 * @param integer $id
	 *
	 * @return App\Domain\Models\NewsTopic
	 */
	public function getById($id)
	{
		return $this->model->find($id);
	}

	/**
	 * Create a new news topic.
	 *
	 * @param array $attributes
	 *
	 * @return App\Domain\Models\NewsTopic
	 */
	public function create(array $attributes)
	{
		return $this->model->create($attributes);
	}

	/**
	 * Update a news topic.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return App\Domain\Models\NewsTopic
	 */
	public function update($id, array $attributes)
	{
		return $this->model->find($id)->update($attributes);
	}

	/**
	 * Delete a news topic.
	 *
	 * @param integer $id
	 *
	 * @return boolean
	 */
	public function delete($id)
	{
		return $this->model->find($id)->delete();
	}
}
