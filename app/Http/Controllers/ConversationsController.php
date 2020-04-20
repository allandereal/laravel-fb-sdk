<?php

namespace App\Http\Controllers;

use App\Facebook\Messenger\Attachment;
use App\Facebook\Messenger\Conversation;
use App\Facebook\Messenger\Message;
use App\Facebook\Messenger\Share;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ConversationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('index');
    }

    public static function updateEnv(string $variable, string $value)
    {
        //TODO also cater for env variables without quotes on values.
        $file = base_path('.env');
        $old = $variable.'="'.env($variable).'"';
        $new = $variable.'="'.$value.'"';
        if (file_exists($file)){
            file_put_contents($file, str_replace($old, $new, file_get_contents($file)));
            //Artisan::call('config:clear');
            //Artisan::call('cache:clear');
            Artisan::call('config:cache');
        }
    }

    public static function fetchFromApi(string $url = '') : string
    {
        if ($url) {
            return Conversation::new()->fetch($url);
        }

        $attachments = Attachment::new([], true)->setQueryModifiers(['limit' => 1000]);
        $shares = Share::new([], true)->setQueryModifiers(['limit' => 1000]);
        $messages = Message::new([], true)
            ->setQueryModifiers(['limit' => 1000_000])
            ->setQueryConnections(['shares' => $shares, 'attachments' => $attachments]);

        return Conversation::new([], true)
            ->setPageId(config('fb.page_id'))
            ->setAccessToken(config('fb.access_token'))
            ->setQueryModifiers(['limit' => 1])
            ->setQueryConnections(['messages' => $messages])
            ->fetch();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
