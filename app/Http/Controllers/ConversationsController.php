<?php

namespace App\Http\Controllers;

use App\Facebook\Messenger\Attachment;
use App\Facebook\Messenger\Conversation;
use App\Facebook\Messenger\Message;
use App\Facebook\Messenger\Share;
use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $conversations = $this->fetchFromApi();
        $decoded = json_decode($conversations);
        if (property_exists($decoded, 'error')) {
            ddd($conversations);
        }
        if (isset($decoded->paging->next)) {
            ddd(json_decode($this->fetchFromApi($decoded->paging->next)));
        }
    }

    private function fetchFromApi(string $url = null) : string
    {
        if ($url) {
            return Conversation::new()->fetch($url);
        }

        $attachments = Attachment::new([], true)->setQueryModifiers(['limit' => 10]);
        $shares = Share::new([], true)->setQueryModifiers(['limit' => 10]);
        $messages = Message::new([], true)
            ->setQueryModifiers(['limit' => 5])
            ->setQueryConnections(['shares' => $shares, 'attachments' => $attachments]);

        return Conversation::new([], true)
            ->setPageId('1094138310753000')
            ->setAccessToken(config('fb.access_token'))
            ->setQueryModifiers(['limit' => 10])
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
