@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
    {{ 'Resumo' }}
@endsection

@section('main-content')

    <section class="inner-banner">
        <div class="container text-center">
            <h3>Serviços</h3>
            <div class="breadcumb">
                <a href="#">Início</a>
                <!-- --><span class="sep">-</span>
                <!-- --><span class="page-name">Serviços</span>
            </div><!-- /.breadcumb -->
        </div><!-- /.container -->
    </section>

    <section class="single-service-page sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sidebar sidebar-left">
                        <div class="single-sidebar service-list-sidebar">
                            <ul class="service-lists">
                                <li><a href="{{ route('servicos.index') }}">Todos os serviços</a></li>
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('servicos.categoria',['id' => $category->id]) }}">{{ $category->nome }}</a></li>
                                @endforeach
                            </ul><!-- /.service-lists -->
                        </div><!-- /.single-sidebar -->
                        <div class="single-sidebar contact-sidebar">
                            <div class="title">
                                <h3>Contatos</h3>
                            </div><!-- /.title -->
                            <div class="single-contact-info">
                                <i class="zxp-icon-old-telephone-ringing"></i>
                                <p>(84) 3318-3330</br>(84) 98840-0090</p>
                            </div><!-- /.single-contact-info -->
                            <div class="single-contact-info">
                                <i class="fas fa-envelope-open"></i>
                                <p>contato@engefixe.com.br</p>
                            </div><!-- /.single-contact-info -->
                            <div class="single-contact-info">
                                <i class="fas fa-home"></i>
                                <p>Av. Francisco Mota, 98<br> Melbourne, AustraliaAlto de São Manoel</p>
                            </div><!-- /.single-contact-info -->
                        </div><!-- /.single-sidebar -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <section class="service-style-one service-page">
                            <div class="row">
                                @foreach ($servicos as $servico)
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="single-service-style-one">
                                        <div class="img-box">
                                            <img src="{{ Voyager::image($servico->thumbnail('small', 'imagem')) }}" alt="Imagem">
                                            <a href="{{ route('servicos.show',['id' => $servico->id]) }}" class="read-more fas fa-link"></a>
                                        </div><!-- /.img-box -->
                                        <div class="content-box">
                                            <div class="icon-box">
                                                <i class="zxp-icon-insurance"></i>
                                            </div><!-- /.icon-box -->
                                            <div class="text-box">
                                                <a href="{{ route('servicos.show',['id' => $servico->id]) }}">
                                                    <h3>{{ Str::limit($servico->titulo,20) }}</h3>
                                                </a>
                                                <p>{{ Str::limit($servico->categoria->nome,50) }}</p>
                                            </div><!-- /.text-box -->
                                        </div><!-- /.content-box -->
                                    </div><!-- /.single-service-style-one -->
                                </div><!-- /.col-md-4 -->
                                @endforeach
                            </div><!-- /.row -->
                    </section>
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>


@endsection
