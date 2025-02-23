<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OutfitMaterial;
use App\Models\Outfit;

class OutfitMaterialController extends Controller
{
    public function index()
    {
        $materials = OutfitMaterial::with('outfit')->get();
        return view('backend.outfit-materials.index', compact('materials'));
    }

    public function create()
    {
        $outfits = Outfit::all(); 
        return view('backend.outfit-materials.create', compact('outfits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'outfit_id' => 'required|exists:outfits,id',
            'material_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        OutfitMaterial::create($request->all());

        return redirect()->route('admin.outfit-materials.index')->with('success', 'Material added successfully.');
    }

    public function edit(OutfitMaterial $outfitMaterial)
    {
        $outfits = Outfit::all();
        return view('backend.outfit-materials.edit', compact('outfitMaterial', 'outfits'));
    }

    public function update(Request $request, OutfitMaterial $outfitMaterial)
    {
        $request->validate([
            'outfit_id' => 'required|exists:outfits,id',
            'material_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $outfitMaterial->update($request->all());

        return redirect()->route('admin.outfit-materials.index')->with('success', 'Material updated successfully.');
    }

    public function destroy(OutfitMaterial $outfitMaterial)
    {
        $outfitMaterial->delete();
        return redirect()->route('admin.outfit-materials.index')->with('success', 'Material deleted successfully.');
    }
}
