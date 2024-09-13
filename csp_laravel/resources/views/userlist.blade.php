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
                                    <h2>Liste des utilisateurs</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row column1 full-width">
                            <!-- table section -->
                        <div class=" tableau">
                           <div class="white_shd full margin_bottom_30 tableau">

                              <div class="table_section padding_infor_info">
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                 <div class="table-responsive-sm">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Prénom</th>
                                                <th>Nom</th>
                                                <th>Email</th>
                                                <th>Téléphone</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{ $user->fname }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>

                                                    <!-- Afficher le statut -->
                                                    <td>
                                                    @if($user->status == 1)
                                                        <span class="online_animation"></span> Actif
                                                    @else
                                                        <span class="offline_animation"></span> Suspendu
                                                    @endif
                                                    </td>

                                                    <!-- Afficher les boutons de blocage/déblocage -->
                                                    <td>
                                                    @if($user->status == 1)
                                                        <!-- Si l'utilisateur est actif, montrer l'option pour le bloquer -->
                                                        <a href="{{ route('user.block', $user->id) }}"><i class="fa fa-toggle-on red_color"></i> Bloquer</a>
                                                    @else
                                                        <!-- Si l'utilisateur est suspendu, montrer l'option pour le débloquer -->
                                                        <a href="{{ route('user.unblock', $user->id) }}"><i class="fa fa-toggle-off green_color"></i> Débloquer</a>
                                                    @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- table section -->
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
