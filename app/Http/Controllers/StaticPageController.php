<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($page)
    {
        //
        $metaTitle = __('Meta Title: ' . $page);
        if ($metaTitle == 'Meta Title: ' . $page) {
            $metaTitle = NULL;
        }

        return view('pages.' . $page, ['metaTitle' => $metaTitle]);
        // return view('pages.' . request()->segment(1), ['metaTitle' => 'About us']);
    }
}
