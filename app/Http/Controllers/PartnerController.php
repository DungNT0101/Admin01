<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PartnerService;

class PartnerController extends Controller
{
    private $service;
    /**
     * Create a new controller instance.
     *
     * @param PartnerService $partnerService
     */
    public function __construct(PartnerService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = $this->service->getAllPartners();
        return view('partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin01.partner.create');
    }

    public function store(Request $request)
    {
        $this->service->createPartner($request->all());
        return redirect()->route('partner.index');
    }

    /**
     * Edit the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = $this->service->getPartnerById($id);
        if (!$partner) {
            return redirect()->route('partner.index')->with('error', 'Partner not found');
        }
        return view('partner.edit', compact('partner'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->service->updatePartner($id, $request->all());
        return redirect()->route('partner.index');
    }

    public function delete($id)
    {
        $this->service->deletePartner($id);
        return redirect()->route('partner.index');
    }

}
