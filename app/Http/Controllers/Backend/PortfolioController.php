<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class PortfolioController extends Controller
{
    private $bread;

    /**
     * Data For Breadcrumbs
     */
    public function __construct()
    {
        $this->bread = [
          'page-title' => 'Portfolio',
          'menu' => 'Admin',
          'submenu' => 'About Me',
          'active' => 'Portfolio'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        $bread = $this->bread;

        if ($request->ajax()) {
          $portfolios = Portfolio::select(['id', 'title', 'category']);
          return Datatables::of($portfolios)
                  ->addColumn('action', function($port){
                      return view('layouts.backend.partials.datatable._action', [
                          'model' => $port,
                          'form_url' => route('admin.port.destroy', $port->id),
                          'edit_url' => route('admin.port.edit', $port->id),
                          'show_url' => route('admin.port.show', $port->id)
                      ]);
                  })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'ID'])
            ->addColumn(['data' => 'title', 'name' => 'title', 'title' => 'Title'])
            ->addColumn(['data' => 'category', 'name' => 'category', 'title' => 'Category'])
            ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>'false']);

        return view('main.backend.port.index', compact('bread', 'html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bread = $this->bread;
        return view('main.backend.port.create', compact('bread'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Portfolio::create($request->all());
        notify()->flash('Done!', 'success', [
            'time' => 1500,
            'text' => 'Portfolio successfully added'
        ]);
        return redirect()->route('admin.port.index');
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
        $bread = $this->bread;
        $port = Portfolio::findOrFail($id);
        return view('main.backend.port.edit', compact('bread', 'port'));
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
        $port = Portfolio::findOrFail($id);
        $port->update($request->all());
        notify()->flash('Done!', 'success', [
            'time' => 1500,
            'text' => 'Portfolio successfully updated'
        ]);
        return redirect()->route('admin.port.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Portfolio::destroy($id)) return redirect()->back();
        notify()->flash('Done!', 'success', [
            'time' => 1500,
            'text' => 'Portfolio successfully deleted'
        ]);

        return redirect()->route('admin.port.index');
    }
}
