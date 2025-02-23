<?php 

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellerOutfit;
use App\Models\Outfit;

class SellerOutfitController extends Controller
{
    public function index()
    {
        $outfits = SellerOutfit::with('outfit')->get();
        return view('backend.sellers-outfits.index', compact('outfits'));
    }

    public function create()
    {
        $outfits = Outfit::all();
        return view('backend.sellers-outfits.create', compact('outfits'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'outfit_id' => 'required|exists:outfits,id',
            'seller_name' => 'required|string|max:255',
            'seller_contact' => 'nullable|string|max:20|regex:/^\d+$/',
            'seller_address' => 'nullable|string',
            'price' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
            'stock' => 'required|integer|min:0',
        ]);

        SellerOutfit::create($request->all());

        return redirect()->route('admin.sellers-outfits.index')->with('success', 'Seller outfit added successfully.');
    }

    public function edit(SellerOutfit $sellerOutfit)
    {
        $outfits = Outfit::all();
        return view('backend.sellers-outfits.edit', compact('sellerOutfit', 'outfits'));
    }

    public function update(Request $request, SellerOutfit $sellerOutfit)
    {
        $request->validate([
            'outfit_id' => 'required|exists:outfits,id',
            'seller_name' => 'required|string|max:255',
            'seller_contact' => 'nullable|string|max:20|regex:/^\d+$/',
            'seller_address' => 'nullable|string',
            'price' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
            'stock' => 'required|integer|min:0',
        ]);

        $sellerOutfit->update($request->all());

        return redirect()->route('admin.sellers-outfits.index')->with('success', 'Seller outfit updated successfully.');
    }

    public function destroy(SellerOutfit $sellerOutfit)
    {
        $sellerOutfit->delete();
        return redirect()->route('admin.sellers-outfits.index')->with('success', 'Seller outfit deleted successfully.');
    }
}
