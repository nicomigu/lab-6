<?php

namespace App\Http\Controllers\Centrifuge;

use App\Http\Controllers\Controller;
use App\Http\Requests\CentrifugoTokenRequest;
use Illuminate\Http\JsonResponse;
use phpcent\Client as CentrifugoClient;

class CentrifugeController extends Controller {

    private CentrifugoClient $centrifugoClient;

    public function __construct() {
        $this->centrifugoClient = new CentrifugoClient("http://localhost:8500/api");
        $this->centrifugoClient->setApiKey(""); // TODO
        $this->centrifugoClient->setSecret(""); // TODO
    }

    /**
     * @param CentrifugoTokenRequest $request
     * @return JsonResponse
     */
    public function getToken(CentrifugoTokenRequest $request): JsonResponse {
        $user = $request->user();
        $token = $this->centrifugoClient->generateConnectionToken($user->id, time() + 60 * 60);
        return response()->json(['ws_token' => $token]);
    }

}
