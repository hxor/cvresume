<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class TestimoniController extends Controller
{
    private $bread;

    /**
     * Data For Breadcrumbs
     */
    public function __construct()
    {
        $this->bread = [
          'page-title' => 'Testimonial',
          'menu' => 'Admin',
          'submenu' => 'About Me',
          'active' => 'Testimonial'
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
          $testimo = Testimonial::select(['id', 'name', 'title', 'inst']);
          return Datatables::of($testimo)
                  ->addColumn('action', function($testi){
                      return view('layouts.backend.partials.datatable._action', [
                          'model' => $testi,
                          'form_url' => route('admin.testi.destroy', $testi->id),
                          'edit_url' => route('admin.testi.edit', $testi->id),
                          'show_url' => route('admin.testi.show', $testi->id)
                      ]);
                  })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'ID'])
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => 'Name'])
            ->addColumn(['data' => 'title', 'name' => 'title', 'title' => 'Title'])
            ->addColumn(['data' => 'inst', 'name' => 'inst', 'title' => 'Instantion'])
            ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>'false']);

        return view('main.backend.testi.index', compact('bread', 'html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bread = $this->bread;
        return view('main.backend.testi.create', compact('bread'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Testimonial::create($request->all());
        notify()->flash('Done!', 'success',[
            'time' => 1500,
            'text' => 'Testimonial successfully added'
        ]);
        return redirect()->route('admin.testi.index');
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
        $testi = Testimonial::findOrFail($id);
        return view('main.backend.testi.edit', compact('bread', 'testi'));
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
        $testi = Testimonial::findOrFail($id);
        $testi->update($request->all());
        notify()->flash('Done!', 'success', [
            'time' => 1500,
            'text' => 'Testimonial successfully edited'
        ]);
        return redirect()->route('admin.testi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Testimonial::destroy($id)) return redirect()->back();
        notify()->flash('Done!', 'success', [
            'time' => 1500,
            'text' => 'Testimonial successfully deleted'
        ]);
        return redirect()->route('admin.testi.index');
    }
}
