<?php

namespace App\Http\Controllers;

use App\Facebook\Messenger\Conversation;
use App\Facebook\Messenger\Message;
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
        $fb_msg = new Message([], true);
        $fb_msg->setQueryModifiers(['limit' => 1])
            ->setQueryConnections(['shares' => '', 'attachments' => '']);

        $fb_convo = new Conversation();

        $conversations = $fb_convo
            ->setPageId('1094138310753000')
            ->setAccessToken('')
            ->setQueryModifiers(['limit' => 5])
            ->setQueryConnections(['messages' => $fb_msg])
            ->fetch();
        if (property_exists($conversations, 'error')) ddd($conversations);
        ddd($conversations);
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
