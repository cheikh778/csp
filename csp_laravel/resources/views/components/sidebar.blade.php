<!-- Sidebar  -->
<nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="{{ asset('storage/img/logo.png')}}" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{ asset('storage/img/cheikh.jpeg')}}" alt="#" /></div>
                        <div class="user_info">
                           <h6>{{ Auth::user()->fname }} {{ Auth::user()->name }}</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard white_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="{{ route('dashboard') }}">> <span>Dashboard</span></a>
                           </li>

                        </ul>
                     </li>

                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users white_color"></i> <span>Utilisateurs</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="{{route('les utilisateurs')}}">> <span>Liste des utilisateurs</span></a></li>
                           <li><a href="{{ route('ajouter un utilisateur') }}">> <span>Ajouter un utilisateur</span></a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group white_color"></i> <span>Galeries</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="{{route('galeries')}}">> <span>Photos</span></a></li>
                           <li><a href="{{route('ajouter une photo')}}">> <span>Ajouter un souvenir</span></a></li>

                        </ul>
                     </li>


                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa  fa-bullhorn white_color"></i> <span>Actualité</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="profile.html">> <span>Ajouter une information</span></a>
                           </li>
                           <li>
                              <a href="project.html">> <span>Liste des posts</span></a>
                           </li>

                        </ul>
                     </li>

                     <li class="active">
                        <a href="#partner" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa  fa-flag white_color"></i> <span>Partenaire</span></a>
                        <ul class="collapse list-unstyled" id="partner">
                           <li>
                              <a href="">> <span>Ajouter un partenaire</span></a>
                           </li>
                           <li>
                              <a href="">> <span>Les partenaires</span></a>
                           </li>

                        </ul>
                     </li>

                     <li class="active">
                        <a href="#settings" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa  fa-cog white_color"></i> <span>Paramètre</span></a>
                        <ul class="collapse list-unstyled" id="settings">
                           <li>
                              <a href="">> <span>Modifier mon profile</span></a>
                           </li>
                           <li>
                              <a href="">> <span>Liste des posts</span></a>
                           </li>

                        </ul>
                     </li>

                     <li class="active">
                        <a href="#settings" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa  fa-cog white_color"></i> <span>Paramètre</span></a>
                        <ul class="collapse list-unstyled" id="settings">
                           <li>
                              <a href="">> <span>Modifier mon profile</span></a>
                           </li>
                           <li>
                              <a href="">> <span>Liste des posts</span></a>
                           </li>

                        </ul>
                     </li>

                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
