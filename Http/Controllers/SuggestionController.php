<?php

namespace Modules\HelpCenter\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\HelpCenter\Entities\Suggestion;

class SuggestionController extends Controller
{
public function __construct(){
    $this->middleware('permission:suggestion-list',     ['only' => ['show', 'index']]);
    $this->middleware('permission:suggestion-delete',   ['only' => ['destroy']]);
    $this->middleware('permission:suggestion-activate', ['only' => ['activate']]);
}
    /**
 * Display a listing of the resource.
 * @return Renderable
 */
public function index()
{
    $suggestions=Suggestion::get();
    return view('helpcentermodule::dashboard.suggestions.index',compact('suggestions'));
}

public function destroy($id)
{
    $suggestion=Suggestion::find($id);
    if (!$suggestion) {
        return redirect()->route('dashboard')->with('failed',"suggestion Not Found");
    }
    $suggestion->delete();
}

public function activate($id)
{
    $suggestion=Suggestion::find($id);
    if (!$suggestion) {
        return redirect()->route('dashboard')->with('failed',"suggestion Not Found");
    }
    $suggestion->is_solved = !$suggestion->is_solved;
    $suggestion->save();
}
}
