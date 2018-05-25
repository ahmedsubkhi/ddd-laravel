<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Repositories\NewsTopicRepository;

class NewsTopicController extends Controller
{
    private $topic;

    /**
     * TopicController constructor function
     *
     * @param $topic
     */
    public function __construct(NewsTopicRepository $topic)
    {
        $this->topic = $topic;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topic = $this->topic->getAll();
        return $topic;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->topic->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic = $this->topic->getById($id);
        return $topic->topic;
    }

    public function show_news($id)
    {
        $topic = $this->topic->getById($id);
        return $topic->news;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $topic = $this->topic;
        $topic->update($id, $request->all());

        return $topic;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = $this->topic;
        $res = $topic->delete($id);

        if($res){
			return 'Delete success';
		} else {
			return 'Delete failed';
		}
    }
}
