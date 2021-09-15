<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>ENAF - Painel Administrativo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Painel de controle ~ ENAF" name="description" />
        <meta content="Luis Gustavo de Souza Carvalho" name="author" />
        <!-- App favicon -->
        <link
            rel="shortcut icon"
            href="{{ asset('admin/images/favicon.ico') }}"
        />

        <!-- owl.carousel css -->
        <link
            rel="stylesheet"
            href="{{
                asset('admin/libs/owl.carousel/owl.carousel.min.css')
            }}"
        />

        <link
            rel="stylesheet"
            href="{{
                asset(
                    'admin/libs/owl.carousel/owl.theme.default.min.css'
                )
            }}"
        />

        <!-- Bootstrap Css -->
        <link
            href="{{ asset('admin/css/bootstrap.min.css') }}"
            id="bootstrap-style"
            rel="stylesheet"
            type="text/css"
        />
        <!-- Icons Css -->
        <link
            href="{{ asset('admin/css/icons.min.css') }}"
            rel="stylesheet"
            type="text/css"
        />
        <!-- App Css-->
        <link
            href="{{ asset('admin/css/app.min.css') }}"
            id="app-style"
            rel="stylesheet"
            type="text/css"
        />
        @toastr_css
    </head>

    <body class="auth-body-bg login-sistema">
        
        
        <div class="account-pages my-5 pt-sm-5">
            <div class="container login-box">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div style="
                            border: solid 1px rgba(0, 0, 0, 0.2);">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Bem vindo de volta!</h5>
                                            <p>Insira seus dados para acessar.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ asset('painel/images/profile-img.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="auth-logo">
                                    <a href="index.html" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset('painel/images/logo-light.svg') }}" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="index.html" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset('site/img/_logo47.svg') }}" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" action="https://themesbrand.com/skote/layouts/index.html">
        
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Usuário</label>
                                            <input type="text" class="form-control" id="username" placeholder="Insira seu usuário">
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Senha</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control" placeholder="Insira sua senha" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>
                                        {{-- 
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label" for="remember-check">
                                                Remember me
                                            </label>
                                        </div> --}}
                                        
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light"
                                             style="background-color: #1ac7d6;color: white;"  
                                        type="submit">Entrar</button>
                                        </div>
            
                                        {{-- <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3">Sign in with</h5>
            
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> --}}

                                        <div class="mzt-4 mt-5 text-center">
                                            <a onclick="$('.forgot-password').show(); $('.login-box').hide();" class="text-muted"><i class="mdi mdi-lock me-1"></i> Esqueceu sua senha ?</a>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            
            <div class="container forgot-password">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div style="
                            border: solid 1px rgba(0, 0, 0, 0.2);">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary"> Recuperar Senha</h5>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ asset('painel/images/profile-img.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src=""  alt="" class="rounded-circle" height="15">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="p-2">
                                    <div class="alert alert-success text-center mb-4" role="alert">
                                        Insira seu e-mail e enviaremos para você um coiso
                                    </div>
                                    <form class="form-horizontal" action="https://themesbrand.com/skote/layouts/index.html">
            
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">E-mail</label>
                                            <input type="email" class="form-control" id="useremail" placeholder="Insira seu e-mail">
                                        </div>
                    
                                        <div class="text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit"
                                             style="background-color: #1ac7d6;color: white;"  >Recuperar</button>
                                        </div>
    
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{
                asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')
            }}"></script>
        <script src="{{
                asset('admin/libs/metismenu/metisMenu.min.js')
            }}"></script>
        <script src="{{
                asset('admin/libs/simplebar/simplebar.min.js')
            }}"></script>
        <script src="{{
                asset('admin/libs/node-waves/waves.min.js')
            }}"></script>

        <!-- owl.carousel js -->
        <script src="{{
                asset('admin/libs/owl.carousel/owl.carousel.min.js')
            }}"></script>

        <!-- auth-2-carousel init -->
        <script src="{{
                asset('admin/js/pages/auth-2-carousel.init.js')
            }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/js/app.js') }}"></script>
        @toastr_js @toastr_render

        <script>
            $('.forgot-password').hide();
        </script>
    </body>

</html>
