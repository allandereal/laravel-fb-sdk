<?php

namespace App\Jobs;

use App\Conversation;
use App\Http\Controllers\ConversationsController;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class FetchFacebookConversation implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected string $url;
    public int $tries = 3;

    /**
     * Create a new job instance.
     *
     * @param string $url
     */
    public function __construct(string $url = '')
    {
        $this->url = $url;
    }

    /**
     * Execute the job.
     *
     * @return void
     * @throws Exception
     */
    public function handle()
    {
        $conversations = ConversationsController::fetchFromApi($this->url);
        $decoded = json_decode($conversations);
        if (property_exists($decoded, 'error')) {
            Log::error("Fetching FB Messenger Conversation :: $conversations");
            //ConversationsController::updateEnv('FB_ACCESS_TOKEN', '');
            throw new Exception('FB Fetch Conversation Error: '.$conversations);
        } else {
            $convo = new Conversation;
            $convo->body = $conversations;
            $convo->save();

            if (isset($decoded->paging->next)) {
                self::dispatch($decoded->paging->next);
            }
        }
    }
}
