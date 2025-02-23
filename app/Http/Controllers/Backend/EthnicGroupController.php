<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EthnicGroup;
use Illuminate\Support\Facades\Storage;

class EthnicGroupController extends Controller
{
    public function index()
    {
        $ethnicGroups = EthnicGroup::all();
        return view('backend.ethnic-groups.index', compact('ethnicGroups'));
    }

    public function create()
    {
        return view('backend.ethnic-groups.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:ethnic_groups,name',
            'description' => 'nullable|string',
            'origin'      => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        $data = $request->only(['name', 'description', 'origin']);

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('ethnic_groups', 'public');
        }

        EthnicGroup::create($data);

        return redirect()->route('admin.ethnic-groups.index')->with('success', 'Ethnic group added successfully.');
    }

    public function edit(EthnicGroup $ethnicGroup)
    {
        return view('backend.ethnic-groups.edit', compact('ethnicGroup'));
    }

    public function update(Request $request, EthnicGroup $ethnicGroup)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:ethnic_groups,name,' . $ethnicGroup->id,
            'description' => 'nullable|string',
            'origin'      => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['name', 'description', 'origin']);

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($ethnicGroup->image) {
                Storage::disk('public')->delete($ethnicGroup->image);
            }
            $data['image'] = $request->file('image')->store('ethnic_groups', 'public');
        }

        $ethnicGroup->update($data);

        return redirect()->route('admin.ethnic-groups.index')->with('success', 'Ethnic group updated successfully.');
    }

    public function destroy(EthnicGroup $ethnicGroup)
    {
        // Delete image if exists
        if ($ethnicGroup->image) {
            Storage::disk('public')->delete($ethnicGroup->image);
        }

        $ethnicGroup->delete();
        return redirect()->route('admin.ethnic-groups.index')->with('success', 'Ethnic group deleted successfully.');
    }
}
