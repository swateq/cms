<?php

namespace Fully\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Fully\Http\Requests;
use Fully\Http\Controllers\Controller;
use Fully\Models\ClientsSay;
use Fully\Repositories\ClientsSay\ClientsSayInterface;
use Input;
use Flash;

class ClientsSayController extends Controller
{
    protected $clients_say;

    public function __construct(ClientsSayInterface $clients_say)
    {
        $this->clients_say = $clients_say;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients_say = ClientsSay::where('lang',getLang())->orderBy('id', 'ASC')->paginate(15);

        return view('backend.clients_say.index', compact('clients_say'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.clients_say.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $formData = Input::all();
      $quotation = new ClientsSay();

      $quotation->name = $formData['name'];
      $quotation->content = $formData['content'];
      $quotation->lang = getLang();
      $quotation->save();

      Flash::message('Quotation was successfully added');

      return langRedirectRoute('admin.clients-say.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $quotation = ClientsSay::findOrFail($id);

      return view('backend.clients_say.edit', compact('quotation'));
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
      $formData = Input::all();
      $quotation = ClientsSay::findOrFail($id);

      $quotation->name = $formData['name'];
      $quotation->content = $formData['content'];
      $quotation->save();

      Flash::message('Quotation was successfully updated');

      return langRedirectRoute('admin.clients-say.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quotation = ClientsSay::findOrFail($id);

        $quotation->delete();

        Flash::message('Quoation was successfully deleted');

        return langRedirectRoute('admin.clients-say.index');
    }

    public function confirmDestroy($id)
    {
        $quotation = ClientsSay::findOrFail($id);

        return view('backend.clients_say.confirm-destroy', compact('quotation'));
    }
}
