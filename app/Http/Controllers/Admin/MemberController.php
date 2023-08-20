<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use App\Http\Requests\MemberRequest;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\MemberUpdateRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Member",
            'sub_title' => "List",
            'header' => "All Member List",
            'members' => Member::paginate(),
        ];
        return view('admin.content.members.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Member",
            'sub_title' => "Create",
            'header' => "Create Member",
        ];
        return view('admin.content.members.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MemberRequest $request)
    {
        $fileName = time() . "-member." . $request->file('banner')->getClientOriginalExtension();
        Image::make($request->file('banner'))->move(public_path('upload/member/') . $fileName);
        $project = Member::create(array_merge($request->validated(), ['banner' => $fileName, 'user_id' => auth()->user()->id]));
        session()->put('success', 'Item created successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        $data = [
            'title' => "Member",
            'sub_title' => "Show",
            'header' => "Show Member",
            'member' => $member,
        ];
        return view('admin.content.members.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        $data = [
            'title' => "Member",
            'sub_title' => "Edit",
            'header' => "Edit Member",
            'member' => $member,
        ];
        return view('admin.content.members.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MemberUpdateRequest $request, Member $member)
    {
        if ($request->banner != '') {

            //code for remove old file
            if ($member->banner != ''  && $member->banner != null) {
                unlink('upload/member/' . $member->banner);
            }

            //upload new file
            $fileName = time() . "-member." . $request->file('banner')->getClientOriginalExtension();
            Image::make($request->file('banner'))->save('upload/member/' . $fileName);

            //for update in table
            $member->update(array_merge($request->validated(), ['banner' => $fileName]));
            session()->put('success', 'Item Updated successfully.');
            return redirect()->back();
        }
        $member->update(array_merge($request->validated(), ['banner' => $member->banner]));
        session()->put('success', 'Item Updated successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        unlink('upload/member/' . $member->banner);
        $member->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
