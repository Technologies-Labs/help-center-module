<?php

namespace Modules\HelpCenterModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\HelpCenterModule\Entities\Announcement;

class AnnouncementController extends Controller
{public function __construct(){
    $this->middleware('permission:announcement-list',     ['only' => ['show', 'index']]);
    $this->middleware('permission:announcement-delete',   ['only' => ['destroy']]);
    $this->middleware('permission:announcement-activate', ['only' => ['activate']]);
}
    /**
 * Display a listing of the resource.
 * @return Renderable
 */
public function index()
{
    $announcements=Announcement::get();
    return view('helpcentermodule::dashboard.announcements.index',compact('announcements'));
}

public function destroy($id)
{
    $announcement=Announcement::find($id);
    if (!$announcement) {
        return redirect()->route('dashboard')->with('failed',"announcement Not Found");
    }
    $announcement->delete();
}

public function activate($id)
{
    $announcement=Announcement::find($id);
    if (!$announcement) {
        return redirect()->route('dashboard')->with('failed',"announcement Not Found");
    }
    $announcement->is_solved = !$announcement->is_solved;
    $announcement->save();
}
}
