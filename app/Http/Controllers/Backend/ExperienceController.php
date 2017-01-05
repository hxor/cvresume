<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Experience;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class ExperienceController extends Controller
{
    private $bread;

    /**
     * Data For Breadcrumbs
     */
    public function __construct()
    {
        $this->bread = [
          'page-title' => 'Experience',
          'menu' => 'Admin',
          'submenu' => 'About Me',
          'active' => 'Experience'
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
          $experiences = Experience::select(['id', 'title', 'name', 'time']);
          return Datatables::of($experiences)
                  ->addColumn('action', function($exp){
                      return view('layouts.backend.partials.datatable._action', [
                          'model' => $exp,
                          'form_url' => route('admin.exp.destroy', $exp->id),
                          'edit_url' => route('admin.exp.edit', $exp->id),
                          'show_url' => route('admin.exp.show', $exp->id)
                      ]);
                  })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'ID'])
            ->addColumn(['data' => 'title', 'name' => 'title', 'title' => 'Title'])
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => 'Institute'])
            ->addColumn(['data' => 'time', 'name' => 'time', 'title' => 'Time'])
            ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>'false']);

        return view('main.backend.exp.index', compact('bread', 'html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bread = $this->bread;
        return view('main.backend.exp.create', compact('bread'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Experience::create($request->all());
        notify()->flash('Done!', 'success',[
            'timer' => 1500,
            'text' => 'Exp successfully added'
        ]);
        return redirect()->route('admin.exp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $exp = Experience::findOrFail($id);
        return view('main.backend.exp.edit', compact('exp', 'bread'));
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
        $exp = Experience::findOrFail($id);
        $exp->update($request->all());
        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Exp sucessfully updated',
        ]);
        return redirect()->route('admin.exp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Experience::destroy($id)) return redirect()->back();

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Experience successfully deleted',
        ]);

        return redirect()->route('admin.exp.index');
    }
}
