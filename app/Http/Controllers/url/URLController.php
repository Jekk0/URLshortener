<?php

namespace App\Http\Controllers\URL;

use App\Http\Requests\URLRequest;
use App\Http\Controllers\Controller;
use App\URL\Repo\URLRepo;
use Illuminate\Support\Facades\Response;

class URLController extends Controller
{
    private $urlRepo;
    /*
     * Init repository
     */
    public function __construct(URLRepo $urlRepo)
    {
        $this->urlRepo = $urlRepo;
    }

    /*
     * Main page view
     */
    public function index()
    {
        return view('url.index');   // Return view
    }

    /*
     * About site page
     */
    public function about()
    {
        return view('url.about');   // Return view
    }

    /*
     * Check & Create shorten URL
     */
    public function store(URLRequest $request)
    {
        $domain = config('siteconf.domain');                    // URL site in config directory
        $urlInDB = $this->urlRepo->findByURL($request->url);    // Find URL in database

        if($urlInDB){                                           // If URL in DB then
            return response()->json($domain.$urlInDB->hash);    // Return this HASH
        };
        /*
         * Check hash in DB
         */
        $userURL = md5($request->url);                          // Hash from user URL
        $hash = str_limit($userURL, 6, $end = '');              // Hash limit of 6 character
        $hashInDB = $this->urlRepo->findByHash($hash);          //  hash in the DB
        while ($hashInDB = $this->urlRepo->findByHash($hash)) { // True?
            $hash = md5($userURL + time());                     // Change the hash
        }
        
        $createdURL = $this->urlRepo->createShortenURL($request->url, $hash);  //Create new record

        $crURL = $this->urlRepo->findById($createdURL->id);             //Find this record in DB

        $result =$domain.$crURL->hash;                          //result (example: www.abcd.com/h3f56w)
        return response()->json($result);                       // Return JSON for Ajax in the View
    }

    /*
     * Redirect away by hash
     */
    public function RedirectAway($hash_url)
    {
        $urlData = $this->urlRepo->findByHash($hash_url);   // Find URL by hash
        if(empty($urlData)) {                               // if not found
            return view('errors.err_hash');                 // return view ERROR
        }

        $u = $urlData->url;                                           // else extract URL
        if(!starts_with($u,'http://') && !starts_with($u,'https://')) // if URL not start with http://
            $u = 'http://'.$u;                                        // add http before URL
        return redirect()->to($u);                                    // Redirect
    }
}
