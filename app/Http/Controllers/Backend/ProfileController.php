<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class ProfileController extends Controller
{
    private $bread;

    /**
     * Data For Breadcrumbs
     */
    public function __construct()
    {
        $this->bread = [
          'page-title' => 'Profile',
          'menu' => 'Admin',
          'submenu' => 'About Me',
          'active' => 'Profile'
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
          $profiles = Profile::select(['id', 'firstname', 'lastname', 'email', 'phone']);
          return Datatables::of($profiles)
                  ->addColumn('action', function($profile){
                      return view('layouts.backend.partials.datatable._action', [
                          'model' => $profile,
                          'form_url' => route('admin.profile.destroy', $profile->id),
                          'edit_url' => route('admin.profile.edit', $profile->id),
                          'show_url' => route('admin.profile.show', $profile->id)
                      ]);
                  })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'ID'])
            ->addColumn(['data' => 'firstname', 'name' => 'firstname', 'title' => 'First Name'])
            ->addColumn(['data' => 'lastname', 'name' => 'lastname', 'title' => 'Last Name'])
            ->addColumn(['data' => 'email', 'name' => 'email', 'title' => 'Email'])
            ->addColumn(['data' => 'phone', 'name' => 'phone', 'title' => 'Phone'])
            ->addColumn(['data'=>'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>'false']);

        return view('main.backend.profile.index', compact('bread', 'html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.backend.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Profile::create($request->all());
        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Profile successfully added',
        ]);
        return redirect()->route('admin.profile.index');
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
        $profile = Profile::findOrFail($id);
        return view('main.backend.profile.edit', compact('profile'));
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
        $profile = Profile::findOrFail($id);
        $profile->update($request->all());
        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Profile successfully updated',
        ]);

        return redirect()->route('admin.profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Profile::destroy($id)) return redirect()->back();

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Profile successfully deleted',
        ]);

        return redirect()->route('admin.profile.index');
    }
}
