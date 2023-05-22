<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar conta | Marketplace - EDR</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/plugin.min.css', Request::secure()) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css', Request::secure()) }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png', Request::secure()) }}">

    <link rel="stylesheet" href="{{ asset('assets/css/line.css', Request::secure()) }}">
</head>

<body>
    <main class="main-content">
        <div class="admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
                        <div class="edit-profile">
                            <div class="edit-profile__logos">
                                <a href="{{ route('home') }}">
                                    <img class="dark" src="{{ asset('assets/img/logo-black.png', Request::secure()) }}" alt="">
                                </a>
                            </div>
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="edit-profile__title">
                                        <h6>Cadastre-se no Marketplace EDR</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('register') }}" class="register-form" method="POST" autocomplete="off">
                                        @csrf
                                        <input autocomplete="false" name="hidden" type="text" style="display:none;">
                                        <div class="edit-profile__body">
                                            <div class="edit-profile__body">
                                                <div class="form-group mb-20">
                                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required>
                                                </div>
                                                <div class="form-group mb-20">
                                                    <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular"  equired>
                                                </div>
                                                <div class="form-group mb-20">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required>
                                                </div>
                                                <div class="form-group mb-20">
                                                    <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
                                                </div>
                                                <div class="form-group mb-15">
                                                    <div class="position-relative">
                                                        <input id="password-field" type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
                                                        <div class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2"></div>
                                                    </div>
                                                </div>
                                                <div class="admin-condition">
                                                    <div class="checkbox-theme-default custom-checkbox ">
                                                        <input class="checkbox" type="checkbox" id="confirm_rules" name="confirm_rules" required>
                                                        <label for="confirm_rules">
                                                            <span class="checkbox-text">Criar uma conta significa que você concorda com nossos <a href="#" class="color-primary">Termos de Serviço </a> e <a href="#" class="color-primary">Política de Privacidade</a> de minha preferência</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                    <button class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn "><span class="uil uil-user-plus"></span> Criar Conta</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="admin-topbar">
                                    <p class="mb-0">Já tem uma conta? <a href="{{ route('login') }}" class="color-primary">Faça login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="overlayer">
        <div class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/plugins.min.js', Request::secure()) }}"></script>
    <script src="{{ asset('assets/js/script.min.js', Request::secure()) }}"></script>
</body>

</html>
