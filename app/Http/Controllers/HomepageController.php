<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogdb;
use App\Contact;
use App\gallerydb;
use App\itemproduk;
use App\kategori;
use App\productsdb;
use App\quotation;
use App\video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomepageController extends Controller
{
    public function index()
    {
        $blog = blogdb::orderBy('created_at', 'DESC')->limit(3)->get();
        $galp = DB::table('gallerydbs')
            ->join('productsdbs', 'gallerydbs.product_id', '=', 'productsdbs.id')
            ->select('gallerydbs.*', 'productsdbs.*')
            ->limit(8)
            ->orderBy('gallerydbs.created_at', 'DESC')
            ->get();
        $product = DB::table('productsdbs')
            ->orderBy('productsdbs.product_name', 'ASC')
            ->select('productsdbs.*')
            ->get();
        $partner = DB::table('partners')
            ->orderBy('partners.id', 'ASC')
            ->select('partners.*')
            ->get();
        return view('homepage.index', ['blog' => $blog, 'galp' => $galp, 'product' => $product, 'partner' => $partner]);
    }
    public function blogview($judul)
    {
        $blog = DB::table('blogdbs')
            ->where('blogdbs.judul', '=', $judul)
            ->select('blogdbs.*')
            ->first();
        // dd($blog);
        $blogcollection = blogdb::orderBy('created_at', 'ASC')->limit(3)->get();
        $kategori = DB::table('productsdbs')
            ->orderBy('productsdbs.product_name', 'ASC')
            ->select('productsdbs.*')
            ->get();
        return view('homepage.blog', ['blog' => $blog, 'blogcollection' => $blogcollection, 'kategori' => $kategori]);
    }
    public function projectsview()
    {
        $blog = blogdb::orderBy('created_at', 'DESC')->paginate(9);
        return view('homepage.projects', ['blog' => $blog]);
    }
    public function galleryview()
    {
        return view('homepage.gallery.index');
    }
    public function videoview()
    {
        return view('homepage.videos.index');
    }
    public function blog()
    {
        return view('homepage.blog');
    }

    public function productdetails($id)
    {
        $item = DB::table('itemproduks')
            ->where('itemproduks.katalog_id', '=', $id)
            ->orderBy('itemproduks.created_at', 'DESC')
            ->select('itemproduks.*')
            ->get();
        $items = DB::table('itemproduks')
            ->join('kategoris', 'itemproduks.kategori_id', '=', 'kategoris.id')
            ->join('productsdbs', 'itemproduks.katalog_id', '=', 'productsdbs.id')
            ->select('itemproduks.*', 'kategoris.nama_kategori', 'productsdbs.product_name')
            ->get();
        $kategori = DB::table('kategoris')
            ->where('kategoris.product_id', '=', $id)
            ->orderBy('kategoris.created_at', 'DESC')
            ->select('kategoris.*')
            ->get();
        $catalog = productsdb::find($id);
        return view('homepage.catalog.details', ['catalog' => $catalog, 'item' => $item, 'kategori' => $kategori, 'items' => $items]);
        // dd($item);
    }
    public function productcatdetails($id)
    {
        $item = DB::table('itemproduks')
            ->where('itemproduks.kategori_id', '=', $id)
            ->orderBy('itemproduks.created_at', 'DESC')
            ->select('itemproduks.*')
            ->get();
        $items = DB::table('itemproduks')
            ->join('kategoris', 'itemproduks.kategori_id', '=', 'kategoris.id')
            ->join('productsdbs', 'itemproduks.katalog_id', '=', 'productsdbs.id')
            ->select('itemproduks.*', 'kategoris.nama_kategori', 'productsdbs.product_name')
            ->get();
        $kategori = DB::table('kategoris')
            ->where('kategoris.product_id', '=', $id)
            ->orderBy('kategoris.created_at', 'DESC')
            ->select('kategoris.*')
            ->get();
        $catalog = kategori::find($id);
        return view('homepage.catalog.catdetails', ['catalog' => $catalog, 'item' => $item, 'kategori' => $kategori, 'items' => $items]);
        // dd($item);
    }
    public function addcart(Request $req, $id)
    {
        $item = itemproduk::find($id);
        // dd($id);

        if (!$item) {
            abort(404);
        }
        $cart = session()->get('cart');

        // ngecek cart kosong dan ini merupakan produk yang pertama
        if (!$cart) {
            $cart = [
                $id => [
                    "id" => $item->id,
                    "nama_item" => $item->nama_item,
                    "quantity" => 1,
                    "fileimg" => $item->fileimg
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('selamat', 'Product added to cart successfully!');
        }

        // jika cart tidak kosong, dan cek, jikaa produk ini ada, maka quantity di increment
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('selamat', 'Product added to cart successfully!');
        }

        // jikaa iitem tidak ada di cart, maka tambahkan item ke cart dengan quantity 1
        $cart[$id] = [
            "id" => $item->id,
            "nama_item" => $item->nama_item,
            "quantity" => 1,
            "fileimg" => $item->fileimg
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('selamat', 'Product added to cart successfully!');
    }
    public function removeitem(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function requestQuot(Request $req)
    {
        $quot = new quotation();
        $quot->request_name = $req->request_name;
        $quot->request_company = $req->request_company;
        $quot->email = $req->email;
        $quot->phone = $req->phone;
        $quot->messages = $req->messages;
        $quot->save();
        $lastId = $quot->id;

        $data = Session::get('cart');
        $idData = array_keys($data);
        // dd($data["id"]);
        // dd($idData);
        foreach ($idData as $dataId) {
            $item_details = DB::table('quotation_details')
                ->insert([
                    'quotation_id' => $lastId,
                    'item_id' => $dataId,
                ]);
        }

        session()->flush();

        return redirect('/')->with('selamat', 'Successfully request quotation');
    }
}
