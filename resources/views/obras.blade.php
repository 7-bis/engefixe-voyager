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
        <h3>Nossas obras</h3>
        <div class="breadcumb">
            <a href="#">Início</a>
            <!-- --><span class="sep">-</span>
            <!-- --><span class="page-name">Obras</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.container -->
</section>

{{-- <section class="blog-style-two project-style-one" style="padding-top: 100px">

    <div class="gallery-filter">
        <ul class="post-filter masonary text-center">
            <li class="filter " data-filter=".oil"><a href="{{ url('/obras') }}"><span>Todas</span></a></li>
            @foreach ($categorias_obras as $categoria)
                <li class="filter " data-filter=".oil"><a href="{{ route('obras.categoria',$categoria->id) }}"><span>{{$categoria->name}}</span></a></li>
            @endforeach
        </ul><!-- /.post-filter -->
    </div>

</section> --}}

<section class="single-service-page sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sidebar sidebar-left">
                    <div class="single-sidebar service-list-sidebar">
                        <ul class="service-lists">
                            <li><a href="{{ route('obras.index') }}">Todos os serviços</a></li>
                            @foreach ($categorias_obras as $category)
                                <li><a href="{{ route('obras.categoria',['id' => $category->id]) }}">{{ $category->name }}</a></li>
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
                            @foreach ($constructions as $obra)
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="single-service-style-one">
                                    <div class="img-box">
                                        <img src="{{ Voyager::image($obra->thumbnail('small', 'imagem')) }}" alt="Imagem">
                                        <a href="{{ route('obras.show',['id' => $obra->id]) }}" class="read-more fas fa-link"></a>
                                    </div><!-- /.img-box -->
                                    <div class="content-box">
                                        <div class="icon-box">
                                            <i class="zxp-icon-insurance"></i>
                                        </div><!-- /.icon-box -->
                                        <div class="text-box">
                                            <a href="{{ route('obras.show',['id' => $obra->id]) }}">
                                                <h3>{{ Str::limit($obra->titulo,20) }}</h3>
                                            </a>
                                            <p>{{ Str::limit($obra->categories->nome,50) }}</p>
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


{{-- <section class="service-style-one home-page-three">
    <div class="container">
        <div class="row">
            @foreach($constructions as $obra)
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-service-style-one">
                    <div class="img-box">
                        <img src="{{ $obra->imagem ? Voyager::image($obra->thumbnail('small', 'imagem')) : '/img/placeholder.jpeg'}}" alt="Awesome Image">
                        <a href="{{ route('obras.show',['id' => $obra->id]) }}" class="read-more fas fa-link"></a>
                    </div><!-- /.img-box -->
                    <div class="content-box">
                        <div class="icon-box">
                            <i class="zxp-icon-insurance"></i>
                        </div><!-- /.icon-box -->
                        <div class="text-box">
                            <a href="{{ route('obras.show',['id' => $obra->id]) }}"><h3>{{ Str::limit($obra->titulo,80) }}</h3></a>
                        </div><!-- /.text-box -->
                    </div><!-- /.content-box -->
                </div><!-- /.single-service-style-one -->
            </div><!-- /.col-md-4 -->
            @endforeach
        </div>
    </div><!-- /.container -->
</section><!-- /.blog-style-two --> --}}

@endsection
