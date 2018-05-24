<?php

namespace App\Domain\Repositories;

use App\Domain\Models\Topic;

class TopicRepository
{
	/**
	 * @var $model
	 */
	private $model;

	/**
	 * Topic Repository constructor.
	 *
	 * @param App\Domain\Models\Topic $model
	 */
	public function __construct(Topic $model)
	{
		$this->model = $model;
	}

	/**
	 * Get all topics.
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function getAll()
	{
		return $this->model->all();
	}

	/**
	 * Get topic by id.
	 *
	 * @param integer $id
	 *
	 * @return App\Domain\Models\Topic
	 */
	public function getById($id)
	{
		return $this->model->find($id);
	}


	/**
	 * Create a new topic.
	 *
	 * @param array $attributes
	 *
	 * @return App\Domain\Models\Topic
	 */
	public function create(array $attributes)
	{
		return $this->model->create($attributes);
	}

	/**
	 * Update a topic.
	 *
	 * @param integer $id
	 * @param array $attributes
	 *
	 * @return App\Domain\Models\Topic
	 */
	public function update($id, array $attributes)
	{
		return $this->model->find($id)->update($attributes);
	}

	/**
	 * Delete a topic.
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
