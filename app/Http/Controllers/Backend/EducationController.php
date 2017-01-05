<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Education;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class EducationController extends Controller
{
    private $bread;

    /**
     * Data For Breadcrumbs
     */
    public function __construct()
    {
        $this->bread = [
          'page-title' => 'Education',
          'menu' => 'Admin',
          'submenu' => 'About Me',
          'active' => 'Education'
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
          $educations = Education::select(['id', 'title', 'name', 'time']);
          return Datatables::of($educations)
                  ->addColumn('action', function($education){
                      return view('layouts.backend.partials.datatable._action', [
                          'model' => $education,
                          'form_url' => route('admin.education.destroy', $education->id),
                          'edit_url' => route('admin.education.edit', $education->id),
                          'show_url' => route('admin.education.show', $education->id)
                      ]);
                  })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'ID'])
            ->addColumn(['data' => 'title', 'name' => 'title', 'title' => 'Title'])
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => 'Institute'])
            ->addColumn(['data' => 'time', 'name' => 'time', 'title' => 'Time'])
            ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>'false']);

        return view('main.backend.education.index', compact('bread', 'html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bread = $this->bread;
        return view('main.backend.education.create', compact('bread'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Education::create($request->all());
        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Education successfully added',
        ]);
        return redirect()->route('admin.education.index');
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
        $education = Education::findOrFail($id);
        return view('main.backend.education.edit', compact('bread', 'education'));
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
        $education = Education::findOrFail($id);
        $education->update($request->all());
        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Education successfully updated',
        ]);

        return redirect()->route('admin.education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Education::destroy($id)) return redirect()->back();

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Education successfully deleted',
        ]);

        return redirect()->route('admin.education.index');
    }
}
