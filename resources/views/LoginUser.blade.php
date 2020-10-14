@extends('master')
@section('content')

<div class="login-area">
    <div class="bg-image">
        <div class="login-signup">
            <div class="container">
                <div class="login-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">

                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="login-details">
                                <ul class="nav nav-tabs navbar-right">
                                    <li><a data-toggle="tab" href="#register">Registrar</a></li>
                                    <li class="active"><a data-toggle="tab" href="#login">Entrar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-content">
                    <div id="register" class="tab-pane">
                       <div class="login-inner">
                            <div class="title">
                                <h1>Bem vindo</h1>
                            </div>
                            <div class="login-form">
                                <form>
                                    <div class="form-details">
                                        <label class="user">
                                            <input type="text" name="nome" placeholder="Nome" id="nome">
                                        </label>
                                        <label class="mail">
                                            <input type="email" name="email" placeholder="E-mail" id="email">
                                        </label>
                                        <label class="pass">
                                            <input type="password" name="senha" placeholder="Senha" id="senha">
                                        </label>
                                    </div>
                                    <button type="submit" class="form-btn" >Registrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="login" class="tab-pane fade in active">
                        <div class="login-inner">
                            <div class="title">
                                <h1>Bem vindo</h1>
                            </div>
                            <div class="login-form">
                                <form>
                                    <div class="form-details">
                                        <label class="user">
                                            <input type="email" name="email" placeholder="E-mail" id="email">
                                        </label>
                                        <label class="pass">
                                            <input type="password" name="senha" placeholder="Senha" id="senha">
                                        </label>
                                    </div>
                                    <button type="submit" class="form-btn" onsubmit="">Entrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection