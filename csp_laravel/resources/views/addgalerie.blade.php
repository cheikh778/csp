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
                                    <h2>Ajouter un ou plusieurs souvenirs</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row column1">
                            <div class="col-md-12">
                                <div class="white_shd full">
                                    <div class="full graph_head">

                                        @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                        @endif

                                        <form action="{{ route('gallery.add.post') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="photo">Un ou plusieurs photos</label>
                                                    <input type="file" class="form-control" name="photo[]" id="photo"
                                                        multiple>
                                                    @error('photo')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <a href="{{ route('les utilisateurs') }}"
                                                class="btn btn-danger align-self-end">Annuler</a>
                                            <button type="submit" style="background-color: #174fdd"
                                                class="btn btn-primary align-self-end">Soumettre</button>
                                        </form>


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
