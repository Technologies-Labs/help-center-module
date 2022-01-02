<?php

namespace Modules\HelpCenter\Http\Controllers;

use Illuminate\Routing\Controller;

class HelpCenterModuleController extends Controller
{
    public function aboutUs()
    {
        return view('helpcenter::website.about-us');
    }

    public function contactUs()
    {
        return view('helpcenter::website.contact-us');
    }

    public function helpCenter()
    {
        return view('helpcenter::website.help-center');
    }

    public function privacyPolicy()
    {
        return view('helpcenter::website.privacy-n-policy');
    }

    public function termsOfUse()
    {
        return view('helpcenter::website.terms-of-use');
    }
}
