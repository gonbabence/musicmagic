<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Ad as AdModel;

class Ads extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $ads = [];

        foreach (AdModel::all() as $ad) {
            array_push($ads, $ad->getAttributes());
        }

        return view(
            'ads.list',
            [
                'ads' => $ads
            ]
        );
    }

    /**
     * @param String $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function details($id)
    {
        if (!preg_match('/^[a-f\d]{24}$/i', $id)) {
            abort(404);
        }

        return view(
            'ads.details',
            [
                'ad' => AdModel::find($id)->getAttributes()
            ]
        );
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('ads.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function save(Request $request)
    {
        $ad = new AdModel;
        $ad->fill($request->post());

        if (!$ad->save()) {
            $request->session()->flash('error', 'Save failed');
        }

        $request->session()->flash('success', 'Saved successfully');

        return view('pages.home');
    }
}
