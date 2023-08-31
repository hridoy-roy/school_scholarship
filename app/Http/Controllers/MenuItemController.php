<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\CreateManu;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $menus = CreateManu::all();
        return view('admin.content.menu.list', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string',
            'link' => 'required|string',
            'status' => 'required|string',

        ]);

        $menus = new CreateManu;
        $menus->name = $request->name;
        $menus->link = $request->link;
        $menus->status = $request->status;

        $menus->save();

        return redirect()->route('menu.create')->with('success', "New Menu create Successfully");
        
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = CreateManu::find($id);
        return view('admin.content.menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required|string',

            // 'link' => 'required|string',
            // 'status' => 'required|string',

        ]);

        $menus = CreateManu::find($id);
        $menus->name = $request->name;
        $menus->link = $request->link;
        $menus->status = $request->status;

        $menus->save();

        return redirect()->route('menu.list')->with('success', "Menu Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = CreateManu::find($id);
        $menu->delete();

        return redirect()->route('menu.list')->with('success','Menu Deleteed Successfully');
    }
}
