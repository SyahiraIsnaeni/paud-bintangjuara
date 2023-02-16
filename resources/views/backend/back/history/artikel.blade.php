<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Riwayat Artikel</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('front/logo1.png')}}" type="image/x-icon"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" crossorigin="anonymous">

	<!-- Fonts and icons -->
	<script src="{{ asset('back/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: [{{asset('back/css/fonts.min.css')}}]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>


	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('back/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('back/css/atlantis.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project
	<link rel="stylesheet" href="{{asset('back/css/demo.css')}}"> -->

</head>
<body>
	<div class="wrapper">
        @include('backend.includes.header')
        @include('backend.includes.sidebarriwartikel')
		<div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card full-height">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">Data Riwayat Artikel</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mt-4">
                                        @if(Session::has('success'))
                                            <div class="alert alert-primary">
                                                {{ Session('success')}}
                                            </div>
                                        @endif

                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Slug</th>
                                                <th>Status</th>
                                                <th style="width:20%">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($artikel as $row)
                                                <tr>
                                                    @if ($row->delete == 'Y')
                                                        <td>{{ $row->judul}}</td>
                                                        <td>{{ $row->slug}}</td>
                                                        <td>
                                                            @if ($row->is_active == '1')
                                                                Diterbitkan
                                                            @else
                                                                Draf
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{route('history-artikel.edit', $row->id) }}"
                                                               class="btn btn-warning btn-sm">Restore</a>

                                                            <form action="{{route('history-artikel.destroy', $row->id)}}" method="post"
                                                                class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-sm">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>

                                                            </form>
                                                        </td>
                                                    @else
                                                    @endif

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">Tidak Ada Riwayat Data</td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('backend.includes.footer')
        </div>
	</div>
	<!--   Core JS Files   -->
	@include('backend.includes.js')
	@include('sweetalert::alert', ['cdn'=>"https://cdn.jsdelivr.net/npm/sweetalert2@9"])
	<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
	@yield('scripts')
</body>
</html>
