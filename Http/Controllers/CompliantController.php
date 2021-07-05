<?php

namespace Modules\HelpCenterModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\HelpCenterModule\Entities\Compliant;

class CompliantController extends Controller
{
public function __construct(){
    $this->middleware('permission:compliant-list',     ['only' => ['show', 'index']]);
    $this->middleware('permission:compliant-delete',   ['only' => ['destroy']]);
    $this->middleware('permission:compliant-activate', ['only' => ['activate']]);
}
    /**
 * Display a listing of the resource.
 * @return Renderable
 */
public function index()
{
    $compliants=Compliant::get();
    return view('helpcentermodule::dashboard.compliants.index',compact('compliants'));
}

public function destroy($id)
{
    $compliant=Compliant::find($id);
    if (!$compliant) {
        return redirect()->route('dashboard')->with('failed',"compliant Not Found");
    }
    $compliant->delete();
}

public function activate($id)
{
    $compliant=Compliant::find($id);
    if (!$compliant) {
        return redirect()->route('dashboard')->with('failed',"compliant Not Found");
    }
    $compliant->is_solved = !$compliant->is_solved;
    $compliant->save();
}
}
