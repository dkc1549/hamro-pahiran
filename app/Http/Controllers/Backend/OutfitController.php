<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outfit;
use App\Models\EthnicGroup;
use Illuminate\Support\Facades\Storage;

class OutfitController extends Controller
{
    public function index()
    {
        $outfits = Outfit::with('ethnicGroup')->get();
        return view('backend.outfits.index', compact('outfits'));
    }

    public function create()
    {
        $ethnicGroups = EthnicGroup::all();
        return view('backend.outfits.create', compact('ethnicGroups'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ethnic_group_id' => 'required|exists:ethnic_groups,id',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'historical_context' => 'nullable|string',
            'uses' => 'nullable|string',
            'used_in_festivals' => 'boolean',
            'used_in_rituals' => 'boolean',
        ]);

        $data = $request->except('photo');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('outfits', 'public');
        }

        Outfit::create($data);

        return redirect()->route('admin.outfits.index')->with('success', 'Outfit added successfully.');
    }

    public function edit(Outfit $outfit)
    {
        $ethnicGroups = EthnicGroup::all();
        return view('backend.outfits.edit', compact('outfit', 'ethnicGroups'));
    }

    public function update(Request $request, Outfit $outfit)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ethnic_group_id' => 'required|exists:ethnic_groups,id',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'historical_context' => 'nullable|string',
            'uses' => 'nullable|string',
            'used_in_festivals' => 'boolean',
            'used_in_rituals' => 'boolean',
        ]);

        $data = $request->except('photo');

        if ($request->hasFile('photo')) {
            // Delete old image if exists
            if ($outfit->photo) {
                Storage::disk('public')->delete($outfit->photo);
            }
            $data['photo'] = $request->file('photo')->store('outfits', 'public');
        }

        $outfit->update($data);

        return redirect()->route('admin.outfits.index')->with('success', 'Outfit updated successfully.');
    }

    public function destroy(Outfit $outfit)
    {
        // Delete associated image
        if ($outfit->photo) {
            Storage::disk('public')->delete($outfit->photo);
        }

        $outfit->delete();
        return redirect()->route('admin.outfits.index')->with('success', 'Outfit deleted successfully.');
    }
}
