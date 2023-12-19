@extends('layouts.index')
@section('titulo', 'e-Docs')

@section('page')

    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>e-Documentos</h1>
                <p>Um sistema de arquivamento de documentos fisicos e digitais. Trazendo:</p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Fácil utilização</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Seguro</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Sem necessidade espaço fisico para Armazenar documentos importantes</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Visualizar documentos de qualquer lugar do mundo</span>
                </div>
                {{-- <div class="chamada">
                    <h2 class="texto-branco">Registre-se Aqui!</h2>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group{{$errors->has('name') ? 'has-error' : ''}}">
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Nome">
                                @if ($errors->has('name'))
                                    <span class="help-block">{{$errors->first('name')}}</span>
                                @endif
                        </div>
                        <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
                            <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="exemplo@exemplo.com.br">
                                @if ($errors->has('email'))
                                    <span class="help-block">{{$errors->first('email')}}</span>
                                @endif
                        </div>
                        <div class="form-group{{$errors->has('password') ? 'has-error' : ''}}">
                            <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Senha">
                                @if ($errors->has('password'))
                                    <span class="help-block">{{$errors->first('password')}}</span>
                                @endif
                        </div>
                            <button type="submit" class="btn btn-success">Cadastrar Usuário</button>
                    </form>
                </div> --}}
            </div>
        </div>

        <div class="direita">
            <div class="imagem-documento">

            </div>
        </div>
    </div>
@endsection
