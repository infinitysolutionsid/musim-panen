@extends('dashboards')
@section('titledash','Products Managements')
@section('activeproducts','active')
@section('contents')
<div class="container-fluid">
    @if(session('selamat'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <strong>Congratulations {{session()->get('name')}}!</strong> - {{session('selamat')}}
            </div>
        </div>
    </div>
    @endif

    <div class="row">
        {{-- Products Management --}}
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            Katalog Product Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewproducts">Tambah Katalog</button>
                        </div>
                        <!-- Modal Tambah products -->
                        <div class="modal fade" id="addnewproducts" tabindex="-1" role="dialog"
                            aria-labelledby="addnewproducts" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addnewproducts">Tambah Products</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="productnew" action="/admin/products/addnewproduct" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Nama Produk" name="product_name"
                                                            id="name" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <textarea name="description" id="" cols="30" rows="10"
                                                            class="form-control"
                                                            placeholder="Deskripsi Produk"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" form="productnew" class="btn btn-primary">Save
                                                changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover display">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Katalog Produk</th>
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$products->isEmpty())
                                <?php $no = 1; ?>
                                @foreach ($products as $productdata)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td>{{$productdata->product_name}}</td>
                                    <td>
                                        <a data-toggle="modal" data-target="#viewproducts{{$productdata->id}}"
                                            class="btn btn-secondary btn-rounded">
                                            <span style="color:;"><i class="fas fa-question"></i></span>
                                        </a>
                                        <a data-toggle="modal" data-target="#editproducts{{$productdata->id}}"
                                            class="btn btn-warning btn-rounded">
                                            <span><i class="fas fa-pen-nib"></i></span>
                                        </a>
                                        <a href="/admin/products/trash/{{$productdata->id}}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal update products -->
                                <div class="modal fade" id="editproducts{{$productdata->id}}" tabindex="-1"
                                    role="dialog" aria-labelledby="editproducts{{$productdata->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editproducts{{$productdata->id}}">Update
                                                    produk
                                                    {{$productdata->product_name}}?</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/admin/products/update/{{$productdata->id}}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Nama Produk"
                                                                    name="product_name" id="name" class="form-control"
                                                                    required value="{{$productdata->product_name}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <textarea name="description" id="" cols="30" rows="10"
                                                                    class="form-control"
                                                                    placeholder="Deskripsi Produk">{{$productdata->description}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal view products -->
                                <div class="modal fade" id="viewproducts{{$productdata->id}}" tabindex="-1"
                                    role="dialog" aria-labelledby="viewproducts{{$productdata->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view{{$productdata->id}}">View data produk
                                                    {{$productdata->product_name}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <h5>Informasi umum</h5>
                                                    <p>
                                                        Nama Produk: {{$productdata->product_name}} <br>
                                                        Deskripsi Produk: <br>{!!$productdata->description!!} <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="3" class="text-center">No Data Founded!</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kategori Management --}}
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            Kategori Produk Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewkategori">Tambah kategori</button>
                        </div>
                        <!-- Modal Tambah products -->
                        <div class="modal fade" id="addnewkategori" tabindex="-1" role="dialog"
                            aria-labelledby="addnewkategori" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addnewkategori">Tambah Kategori Baru</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="/admin/products/addnewkategorial" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Nama Kategori Produk"
                                                            name="nama_kategori" id="name" class="form-control"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <select name="product_id" id=""
                                                            class="form-control custom-select">
                                                            <option>Pilih produk induk</option>
                                                            @foreach ($productget as $productget)
                                                            <option value="{{$productget->id}}">
                                                                {{$productget->product_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <textarea name="description" id="" cols="30" rows="10"
                                                            class="form-control"
                                                            placeholder="Deskripsi Kategori Produk"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save
                                                changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover display">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kategori Produk</th>
                                    <th>Produk Induk</th>
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$kategori->isEmpty())
                                <?php $no = 1; ?>
                                @foreach ($kategori as $kategoriData)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td>{{$kategoriData->nama_kategori}}</td>
                                    <td>{{$kategoriData->product_name}}</td>
                                    <td>
                                        <a href="" data-toggle="modal"
                                            data-target="#viewkategori{{$kategoriData->kategoriId}}"
                                            class="btn btn-secondary btn-rounded">
                                            <span style="color:;"><i class="fas fa-question"></i></span>
                                        </a>
                                        <a href="" data-toggle="modal"
                                            data-target="#editkategori{{$kategoriData->kategoriId}}"
                                            class="btn btn-warning btn-rounded">
                                            <span><i class="fas fa-pen-nib"></i></span>
                                        </a>
                                        <a href="/admin/products/kategoritrash/{{$kategoriData->kategoriId}}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal view products -->
                                <div class="modal fade" id="viewkategori{{$kategoriData->kategoriId}}" tabindex="-1"
                                    role="dialog" aria-labelledby="viewkategori{{$kategoriData->kategoriId}}"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view{{$kategoriData->kategoriId}}">View data
                                                    kategori
                                                    {{$kategoriData->nama_kategori}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <h5>Informasi umum</h5>
                                                    <p>
                                                        Nama Produk: {{$kategoriData->nama_kategori}} <br>
                                                        Kategori Induk Produk: {{$kategoriData->product_name}} <br>
                                                        Deskripsi Produk: <br>{!!$kategoriData->descriptionKat!!} <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal update products -->
                                <div class="modal fade" id="editkategori{{$kategoriData->kategoriId}}" tabindex="-1"
                                    role="dialog" aria-labelledby="editproducts{{$kategoriData->kategoriId}}"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editproducts{{$kategoriData->kategoriId}}">
                                                    Update produk
                                                    {{$kategoriData->nama_kategori}}?</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/admin/products/kategori-update/{{$kategoriData->kategoriId}}"
                                                method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Nama Produk"
                                                                    name="nama_kategori" id="name" class="form-control"
                                                                    required value="{{$kategoriData->nama_kategori}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <textarea name="description" id="" cols="30" rows="10"
                                                                    class="form-control"
                                                                    placeholder="Deskripsi
                                                                    Produk">{{$kategoriData->descriptionKat}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                @endforeach
                                @else
                                <tr>
                                    <td colspan="3" class="text-center">No Data Founded!</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Item produk --}}
    <div class="row">
        {{-- Item Produk Management --}}
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            Item Produk Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <a href="/admin/products/item/add-product" class="btn btn-primary">Tambah item produk</a>
                        </div>
                        <!-- Modal Tambah products -->
                        <div class="modal fade" id="addnewitemproduk" tabindex="-1" role="dialog"
                            aria-labelledby="addnewitemproduk" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addnewitemproduk">Tambah Item Produk Baru</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form id="productnew" action="/admin/products/addnewitemproduk"
                                        enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Nama Produk" name="nama_produk"
                                                            id="name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select name="katalog_id" class="custom-select form-control"
                                                            id="" required>
                                                            <option selected>Pilih katalog item produk:</option>
                                                            @foreach ($katalogItem as $kataIt)
                                                            <option value="{{$kataIt->id}}">{{$kataIt->product_name}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select name="kategori_id" class="custom-select form-control"
                                                            id="" required>
                                                            <option selected>Pilih kategori item produk:</option>
                                                            @foreach ($kategoriItem as $katIt)
                                                            <option value="{{$katIt->id}}">{{$katIt->nama_kategori}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <small class="muted-text">Masukkan gambar pertama:</small>
                                                        <input type="file" name="fileimg" class="form-control" id="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <textarea name="description" id="" cols="30" rows="10"
                                                            class="form-control"
                                                            placeholder="Deskripsi Produk"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save
                                                changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover display">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 100px;">Preview Item</th>
                                    <th>Nama Item</th>
                                    <th>Kategori</th>
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @if(!$itemproduk) --}}
                                <?php $no = 1; ?>
                                @foreach ($itemproduk as $itemproduk)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td>
                                        <img src="{!!asset('media/product/item/'.$itemproduk->fileimg)!!}"
                                            alt="{!!$itemproduk->nama_item!!}" class="imgprev"></td>
                                    <td>{{$itemproduk->nama_item}}</td>
                                    <td>{{$itemproduk->nama_kategori}}</td>
                                    <td>
                                        <a href="" data-toggle="modal"
                                            data-target="#viewitemproducts{{$itemproduk->itemId}}"
                                            class="btn btn-secondary btn-rounded">
                                            <span style="color:;"><i class="fas fa-question"></i></span>
                                        </a>
                                        <a href="" data-toggle="modal"
                                            data-target="#edititemproducts{{$itemproduk->itemId}}"
                                            class="btn btn-warning btn-rounded">
                                            <span><i class="fas fa-pen-nib"></i></span>
                                        </a>
                                        <a href="/admin/products/itemtrash/{{$itemproduk->itemId}}"
                                            class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal update products -->
                                <div class="modal fade" id="edititemproducts{{$itemproduk->itemId}}" tabindex="-1"
                                    role="dialog" aria-labelledby="editproducts{{$itemproduk->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editproducts{{$itemproduk->itemId}}">Update
                                                    produk
                                                    {{$itemproduk->nama_item}}?</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/admin/products/item-update/{{$itemproduk->itemId}}"
                                                method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Nama Produk"
                                                                    name="nama_item" id="name" class="form-control"
                                                                    required value="{{$itemproduk->nama_item}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <textarea name="description" id="" cols="30" rows="10"
                                                                    class="form-control"
                                                                    placeholder="Deskripsi Produk">{{$itemproduk->description}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal view products -->
                                <div class="modal fade" id="viewitemproducts{{$itemproduk->itemId}}" tabindex="-1"
                                    role="dialog" aria-labelledby="viewproducts{{$itemproduk->itemId}}"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="view{{$itemproduk->itemId}}">View data
                                                    produk
                                                    {{$itemproduk->nama_item}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <h5>Informasi umum</h5>
                                                    <p>
                                                        Nama Produk: {{$itemproduk->nama_item}} <br>
                                                        Deskripsi Produk: <br>{!!$itemproduk->description!!} <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- @else
                                <tr>
                                    <td colspan="4" class="text-center">No Data Founded!</td>
                                </tr>
                                @endif --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
