<?php

namespace Modules\HelpCenterModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Modules\HelpCenterModule\Http\Requests\ContactUsRequest;
use Modules\HelpCenterModule\Services\ContactUsService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactUsController extends Controller
{
    private $ContactUsService;

    public function __construct(ContactUsService $ContactUsService)
    {
        $this->ContactUsService = $ContactUsService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('helpcentermodule::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('helpcentermodule::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ContactUsRequest $request)
    {
        return $this->ContactUsService->contactUs($request);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('helpcentermodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('helpcentermodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
