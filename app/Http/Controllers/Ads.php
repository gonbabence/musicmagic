<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        $ad->fill($post);

        if (!$ad->save()) {
            $request->session()->flash('error', 'Save failed');
        } else {
            $request->session()->flash('success', 'Saved successfully');
        }

        return view('pages.home');
    }

}
