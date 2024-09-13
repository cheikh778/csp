<x-head-asset />

<body class="dashboard dashboard_2">

    <div class="full_container">
        <div class="inner_container">

            <x-sidebar />

            <!-- Main Content -->
            <div id="content">
                <!-- Header -->
                <x-header />

                <div class="container-fluid p-4">
                    <!-- Breadcrumb -->
                    <x-breadcumb currentPage="Dashboard" />

                </div>



                <div class="midde_cont">
                    <div class="container-fluid">
                    <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>
                                        Galeries
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="row column1">
                            <div class="col-md-12">
                                <div class="white_shd full">
                                    <div class="full graph_head">
                                        <div class="row">
                                            @foreach ($galleries as $gallery)
                                            <div class="col-md-3">
                                                <div class="card shadow-sm">
                                                    <img src="{{ asset('storage/img/' . $gallery->image) }}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <form action="{{ route('supprimer une photo', $gallery->id) }}" method="post" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                        <a href="{{ route('modifier une photo', $gallery->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                        <form action="{{ route('gallery.delete.multiple') }}" method="post" class="d-inline">
                                            @csrf
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="select-all">
                                                <label class="form-check-label" for="select-all">
                                                    Sélectionner tout
                                                </label>
                                            </div>
                                            <div class="row">
                                                @foreach ($galleries as $gallery)
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input photo-checkbox" type="checkbox" name="photos[]" value="{{ $gallery->id }}" id="photo-{{ $gallery->id }}">
                                                        <label class="form-check-label" for="photo-{{ $gallery->id }}">
                                                            <img src="{{ asset('storage/img/' . $gallery->image) }}" class="img-fluid" alt="...">
                                                        </label>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-danger">Supprimer les photos sélectionnées</button>
                                        </form>

                                        <script>
                                            $('#select-all').change(function() {
                                                $('.photo-checkbox').prop('checked', $(this).prop('checked'));
                                            });
                                        </script>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- footer -->
                <div class="container-fluid">
                    <div class="footer">
                        <p>Copyright © 2024 Designed by <a target="_blank"
                                href="https://www.linkedin.com/in/serigne-cheikh-ndao-43842b234/"
                                style="color: #174fdd">Cheikh DEV</a> All rights reserved.<br><br>


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

<x-foot-asset />
