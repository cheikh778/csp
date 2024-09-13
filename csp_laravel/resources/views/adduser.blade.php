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
                                    <h2>Ajouter un utilisateur</h2>
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

                                        <form action="{{ route('user.add.post') }}" method="POST">
                                            @csrf
                                            <!-- Row pour Prénom et Nom côte à côte -->
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="firstName">Prénom</label>
                                                    <input type="text" class="form-control" name="fname" id="fname"
                                                        placeholder="Entrez votre prénom" value="{{ old('fname') }}">
                                                    @error('fname')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="lastName">Nom</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="Entrez votre nom" value="{{ old('name') }}">
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Row pour Email et Mot de passe côte à côte -->
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputEmail1">Adresse Email</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        aria-describedby="emailHelp" placeholder="Entrez votre email"
                                                        value="{{ old('email') }}">
                                                    @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputPassword1">Mot de passe</label>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" placeholder="Entrez votre mot de passe" value="{{ old('password') }}">
                                                    @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Champ Téléphone -->
                                            <div class="form-group">
                                                <label for="phone">Téléphone</label>
                                                <input type="tel" class="form-control" id="phone" name="phone"
                                                    placeholder="Entrez votre numéro de téléphone"
                                                    value="{{ old('phone') }}">
                                                @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            <!-- Bouton d'annulation -->
                                            <a href="{{ route('les utilisateurs') }}" class="btn btn-danger align-self-end">Annuler</a>

                                            <!-- Bouton de soumission -->
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
            </div>
            <!-- end dashboard inner -->
            < </body>

                <x-foot-asset />
