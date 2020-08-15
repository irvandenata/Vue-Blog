<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $tags = Tag::all();
            return DataTables::of($tags)
            ->addColumn('action', function ($tag) {
                return '
                <div class="row justify-content-center">
 
  <a class="btn btn-success mr-1" onclick="editItem(' . $tag->id . ')"><i class="mdi mdi-pencil menu-icon text-white"></i></a>
  <a class="btn btn-danger mr-1" onclick="deleteItem(' . $tag->id . ')"><i class="mdi mdi-delete-forever menu-icon text-white"></i></a>
  
</div>
               
                            
                            ';
            })
            ->removeColumn('id')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.tag.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
