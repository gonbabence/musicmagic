<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ads extends Controller {

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request) {
        if ($request->getMethod() == 'GET') {
            return view('ads.create');
        }

        $ad = new \App\Models\Ads;
        $ad->append($request->post());

        if (!$ad->save()) {
            //fall silently
        }

        return view('pages.home');

    }

}
