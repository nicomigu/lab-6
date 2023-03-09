<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Http\Requests\Messages\SendMessageRequest;
use App\Models\Message;

use App\Models\Room;
use Illuminate\Http\JsonResponse;
use phpcent\Client as CentrifugoClient;

class MessageController extends Controller {

    private CentrifugoClient $centrifugoClient;

    public function __construct() {
        $this->centrifugoClient = new CentrifugoClient("http://localhost:8500/api");
        $this->centrifugoClient->setApiKey(""); // TODO
    }

    /**
     * Endpoint: POST /api/send
     *
     * This is the main endpoint that a client (JS web app, Android app, iOS app, etc.) will
     * hit in order to send a message to another user.
     */
    public function send(SendMessageRequest $request, Room $room): JsonResponse {
        // TODO
    }

    /**
     * Endpoint: GET /api/messages/{roomId}
     */
    public function index(Room $room): JsonResponse {
        // TODO
    }

}
