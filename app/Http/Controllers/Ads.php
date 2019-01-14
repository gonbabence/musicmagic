<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ads extends Controller {

    public function index() {
        return view('ads.list');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request) {
        if ($request->getMethod() == 'GET') {
            return view('ads.create');
        }

        $ad = new \App\Models\Ads;

        $post = $request->post();

        //assign data
        $ad->{'category'} = $post['category'];
        $ad->mfr = $post['mfr'];
        $ad->model = $post['model'];
        $ad->condition = $post['condition'];
        $ad->price = (int) $post['condition'];
        $ad->description = $post['description'];


        if (!$ad->save()) {
            //fall silently
        }

        return view('pages.home');

    }

}
