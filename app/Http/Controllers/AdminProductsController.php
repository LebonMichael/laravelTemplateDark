<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Keyword;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        $products = Product::with(['brand', 'photo', 'keywords', 'productcategory'])->filter(request(['search']))->paginate(10);
        $id = Auth::user()->id;
        $mainUser = User::findOrFail($id);
        return view('admin.products.index', compact('products', 'brands', 'brands', 'mainUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keywords = Keyword::all();
        $productcategories = ProductCategory::all();
        $brands = Brand::all();
        $id = Auth::user()->id;
        $mainUser = User::findOrFail($id);
        return view('admin.products.create', compact('keywords', 'brands', 'productcategories', 'mainUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->product_category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->price = $request->price;
        $product->stock = $request->stock;

        /** opvragen oude image **/
        $oldImage = Photo::find($product->photo_id);
        if ($oldImage) {
            //fysisch verwijderen uit img directory
            unlink(public_path() . '/img/products' . $oldImage->file);
            //oude image uit de tabel photos verwijderen
            $oldImage->delete();
        }

        /**photo opslaan**/
        if ($file = $request->file('photo_id')) {
            /**wegschrijven naar de img folder**/
            $name = time() . $file->getClientOriginalName();
            $file->move('img/products/', $name);
            /**wegschrijven naar de photo table**/
            $photo = Photo::create(['file' => $name]);

            $product['photo_id'] = $photo->id;
        }

        /** wegschrijven naar de posts table **/
        $product->save();

        /** de gekozen categoriëen wegschrijven naar de tussentabel category_post**/
        //$posts->categories()->sync($request->categories, false);

        foreach ($request->keywords as $keyword) {
            $keywordfind = Keyword::findOrFail($keyword);
            //onderstaande lijn zorgt ervoor dat we via het model
            //van posts, de methode keywords gebruiken.
            //de methode keywords bevat morphToMany.
            //morphToMany zorgt ervoor dat je kan wegschrijven in keywordables tabel
            $product->keywords()->save($keywordfind);
        }
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $id = Auth::user()->id;
        $mainUser = User::findOrFail($id);
        return view('admin.products.show', compact('product','mainUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $keywords = Keyword::all();
        $productcategories = ProductCategory::all();
        $brands = Brand::all();
        $id = Auth::user()->id;
        $mainUser = User::findOrFail($id);
        return view('admin.products.edit', compact('product', 'keywords','brands', 'productcategories', 'mainUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->brand_id = $request->brand_id;
        $product->product_category_id = $request->category_id;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;

        if($file = $request->file('photo_id')){
            /** opvragen oude image **/
            $oldImage = Photo::find($product->photo_id);
            if($oldImage){
                //fysisch verwijderen uit img directory
                unlink(public_path() . '/img/products/' . $oldImage->file);
                //oude image uit de tabel photos verwijderen
                $oldImage->delete();
            }
            //vanaf hier wordt de nieuwe photo opgeslagen.
            /**wegschrijven naar de img folder**/
            $name = time(). $file->getClientOriginalName();
            $file->move('img/products', $name);
            /**wegschrijven naar de photo table**/
            $photo = Photo::create(['file'=>$name]);
            $product->photo_id = $photo->id;
        }

        $product->update();

        /** Wegschrijven tussentabel met de nieuwe rollen **/
        $product->keywords()->sync($request->keywords, true);
        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function productsPerBrand($id)
    {
        $brands = Brand::all();
        $products = Product::with(['photo','productcategory','brand','keywords',])->where('brand_id', $id)->paginate(10);
        $id = Auth::user()->id;
        $mainUser = User::findOrFail($id);
        return view('admin.products.index', compact('products', 'brands','mainUser'));
    }
}
