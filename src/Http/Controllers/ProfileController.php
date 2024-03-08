<?php
    namespace Bearlovescode\Activitypub\Http\Controllers;

    use Illuminate\Support\Facades\Response;

    class ProfileController
    {
        public function index() {
            return Response::json();
        }
    }