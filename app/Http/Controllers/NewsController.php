<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Repositories\NewsRepository;

class NewsController extends Controller
{
    private $news;

    /**
     * NewsController constructor function
     *
     * @param $news
     */
    public function __construct(NewsRepository $news)
    {
        $this->news = $news;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = $this->news->getAll();
        return $news;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->news->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = $this->news->getById($id);
        return $news;
    }

    public function show_topic($id)
    {
        $news = $this->news->getById($id);
        return $news->topic;
    }

    public function filter($status)
    {
        $news = $this->news->hasStatus($status);
        return $news;
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
        $news = $this->news;
		$res = $news->update($id, $request->all());
		if($res){
			return 'Update success';
		} else {
			return 'Update failed';
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = $this->news;
        $res = $news->delete($id);

		if($res){
			return 'Delete success';
		} else {
			return 'Delete failed';
		}
    }
}
