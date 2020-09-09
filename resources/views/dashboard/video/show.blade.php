@extends('dashboards')
@section('titledash','Videos Managements')
@section('activevideos','active')
@section('contents')
<div class="container-fluid">
    <div class="modal fade" id="addnewvideo" tabindex="-1" role="dialog" aria-labelledby="addnewvideo"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addnewvideo">Tambah Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="videoadd" action="/admin/video/addnewvideo" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="link_title" id="judul" required placeholder="Judul video"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" name="link" id="judul" required placeholder="Link serial youtube"
                                        class="form-control" required>
                                    <small class="text-muted">ex:
                                        youtube.com/embed/<strong>xxxxxxxx</strong> -> Hanya input serial
                                        youtube ini saja</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button form="videoadd" type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal Tambah post --}}
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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <div class="row">
                        <div class="col-lg-6 text-left">
                            Video Managements
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#addnewvideo">Add Videos</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tablehover" class="table table-hover display">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Video</th>
                                    <th>Link</th>
                                    <th>Act.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$gal->isEmpty())
                                <?php $no = 1; ?>
                                @foreach ($gal as $gal)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td>
                                        {{$gal->link_title}}
                                    </td>
                                    <td><a href="{!!$gal->link!!}" target="_blank">{!!$gal->link!!}</a>
                                    </td>
                                    <td>
                                        <a href="/admin/video/trash/{!!$gal->id!!}" class="btn btn-danger btn-rounded">
                                            <span><i class="fas fa-trash"></i></span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4" class="text-center">No Data Founded!</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
