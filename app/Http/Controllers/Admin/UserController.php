<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Admin",
            'sub_title' => "List",
            'header' => "List Admin",
            'users' => User::paginate(),
        ];
        return view('admin.content.admin.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Admin",
            'sub_title' => "Create",
            'header' => "Create Admin",
        ];
        return view('admin.content.admin.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => $request->is_admin ? 1 : 0,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        session()->put('success', 'Item created successfully.');;

        $data = [
            'title' => "Admin",
            'sub_title' => "List",
            'header' => "List Admin",
            'users' => User::paginate(),
        ];
        return view('admin.content.admin.list', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(ExamCenter $center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = [
            'title' => "Exam Center",
            'sub_title' => "Edit",
            'header' => "Edit Class",
        ];
        $center = ExamCenter::where('id', $id)->first();
        return view('admin.content.examcenter.create', compact('center'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'capacity' => 'required|max:10',
            'order_by' => 'required|numeric',
            'status' => 'required',
        ]);
        $ExamCenter = ExamCenter::find($id);
        $ExamCenter->update($request->all());

        session()->put('success', 'Item Updated successfully.');

        return redirect()->route('examcenter.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ExamCenter = ExamCenter::find($id);
        $ExamCenter->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
