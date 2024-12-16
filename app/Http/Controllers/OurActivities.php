<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurActivities extends Controller
{
    public function index()
    {
        $data['articles'] = DB::select('select * from articles');

        return
            view('templates.header') .
            view('ourActivitiesPage', $data) .
            view('templates.footer');
    }

    public function indexArticles($id)
    {
        $data['article'] = DB::selectOne('select * from articles where ID_ARTICLE = "' . $id . '"');

        $article_db = DB::select('select ID_ARTICLE from articles');

        $articleIds = [];

        foreach ($article_db as $key => $item) {
            $articleIds[$key] = $item->ID_ARTICLE;
        }

        $currentIndex = array_search($id, $articleIds);

        $previousIndex = ($currentIndex - 1 + count($articleIds)) % count($articleIds);
        $previousId = $articleIds[$previousIndex];

        $nextIndex = ($currentIndex + 1) % count($articleIds);
        $nextId = $articleIds[$nextIndex];

        $data['previous'] = DB::selectOne('select * from articles where ID_ARTICLE = "'.$previousId.'"');
        $data['next'] = DB::selectOne('select * from articles where ID_ARTICLE = "'.$nextId.'"');

        return
            view('templates.header') .
            view('articlePage', $data) .
            view('templates.footer');
    }
}
