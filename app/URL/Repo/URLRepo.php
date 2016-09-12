<?php

namespace App\URL\Repo;

use App\URL\Model\URL;

class URLRepo extends AbstractRepo
{
     public function all()
    {
        return URl::all();
    }

    public function createShortenURL($url, $hash)
    {
        $data = [
            'url'=>$url,
            'hash'=>$hash
        ];
        $db = URL::create($data);
        return $db;
    }

    public function findById($id)
    {
        return URL::findorfail($id);
    }

    public function findByHash($hash)
    {
        return URL::where('hash','=',$hash)->first();

    }
    public function findByURL($url)
    {
        return URL::where('url','=',$url)->first();
    }
}
