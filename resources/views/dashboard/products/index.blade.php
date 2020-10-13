@extends('dashboards')
@section('titledash','Products Managements')
@section('activeproducts','active')
@section('contents')
<div class="container-fluid">
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
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewitemproduk">Tambah item produk</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form id="productnew" action="{{route('proses.item')}}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nama Produk" name="nama_produk" id="name"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="katalog_id" class="custom-select form-control" id="" required>
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
                                        <select name="kategori_id" class="custom-select form-control" id="" required>
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
                                <div class="col-md-6" id="kagebunshin">
                                    <div class="form-group">
                                        <small class="muted-text">Masukkan gambar:</small>
                                        <div class="input-group crl-group increment">
                                            <input type="file" name="fileimg[]" class="form-control" id="">
                                            <span class="input-group-btn"><button class="btn btn-success btn-group-right
                                                " type="button"><i class="fas fa-plus"></i>
                                                    Add</button></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 hide crl-group">

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <textarea name="description" id="" cols="30" rows="10" class="form-control"
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
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        $(".btn-success").click(function () {
            // var html = $(".clone").html();
            // $(".increment").after(html);
            console.log(this);

            // Disini kan?
            var btndelete = `<div class="form-group">
                <small class="muted-text">Masukkan gambar:</small>
                <div class="input-group">
                    <input type="file" name="fileimg[]" class="form-control" id="">
                    <span class="input-group-btn"><button class="btn btn-danger btn-group-right
                                                " type="button"><i class="fas fa-remove"></i>
                            Remove</button></span>
                </div>
            </div>`

            $('#kagebunshin').append(btndelete);
        });

        $(document).on("click", ".btn-danger", function () {
            // $(this).parent(".crl-group").remove();
            console.log(this);
            $(this).closest('.form-group').remove();
        });

    });

</script>
@endsection
