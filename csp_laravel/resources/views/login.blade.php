
<x-head-asset />
<body class="inner_page login">
      <div class="full_container">
         <div class="container">
         <a class="center  main_btr" href="{{ route('index') }}" style="font-size: 15px"><i class="fa fa-home"></i>&nbsp;Retourner a l'accueil</a>

            <div class="center verticle_center full_height">


               <div class="login_section">

                  <div class="logo_login">
                    <h3 class="text-center" style="color: white">Se Connecter</h3>

                     <div class="center">
                        <img width="210" src="{{ asset('storage/img/logo.png')}}" alt="#" />
                     </div>

                  </div>
                  <div class="login_form">

                     <form method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <fieldset>
                           <div class="field">
                              <label for="" class="label_field">Adresse E-mail</label>
                              <input id="email" type="email" name="email" placeholder="E-mail" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus />
                              @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input id="password" type="password" name="password" placeholder="Password" class=" @error('password') is-invalid @enderror" name="password" required />
                              @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                           </div>
                           <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              <a class="forgot" href="">Forgotten Password?</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt" type="submit">Sing In</button>

                           </div>

                        </fieldset>

                     </form>


                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>

   <x-foot-asset />

