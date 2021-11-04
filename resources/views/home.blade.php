@extends('layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
    {{ 'Resumo' }}
@endsection

@section('main-content')

    <div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach ($banners as $banner)
                <div @if ($loop->first) class="carousel-item item active" @else class="carousel-item item" @endif
                    style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5),  rgba(0, 0, 0, 0.5)), url('{{ Voyager::image($banner->image) }}');background-position: center center;">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="box valign-middle">
                                <div class="content text-center">
                                    <h3 data-animation="animated fadeInUp" class="">{{ $banner->titulo }}</h3>
                                    <h2 data-animation="animated fadeInUp" class="">{{ $banner->subtitulo }}
                                    </h2>
                                    {{-- <p data-animation="animated fadeInDown" class="">{{$banner->text}}</p> --}}
                                    @if ($banner->link != null) <a href="#" class="banner-btn" data-animation="animated fadeInDown">Ver mais</a> @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Controls -->
        {{-- <a class="left carousel-control" href="#" role="button" data-slide="prev">
        <i class="fas fa-angle-left"></i>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#" role="button" data-slide="next">
        <i class="fas fa-angle-right"></i>
        <span class="sr-only">Próximo</span>
    </a> --}}
        <ul class="carousel-indicators list-inline custom-navigation">
            @for ($i = 0; $i < $banners->count(); $i++)
                <li data-target="#minimal-bootstrap-carousel" data-slide-to="{{ $i }}" @if ($i == 0) class="active" @endif>
                </li>
            @endfor
        </ul>
    </div>


    <section class="blog-style-two sec-pad">
        <div class="container">
            <div class="sec-title">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Nossas obras</h3>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-6">
                        <!-- <p>Conheça nossas obras</p> -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-3 text-right">
                        <a href="{{ url('/obras') }}" class="thm-btn">Ver mais</a>
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.sec-title -->
            <div class="row">
                @foreach ($constructions as $obra)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog-style-two">
                            <div class="img-box">
                                <img src="{{ Voyager::image($obra->thumbnail('small', 'imagem')) }}" alt="Awesome Image">
                                <a href="{{ route('obras.show', ['id' => $obra->id]) }}" class="read-more">Ver
                                    projeto</a>
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <div class="meta-info">
                                    <a href="{{ route('obras.show', ['id' => $obra->id]) }}"><i class="fas fa-home"></i>
                                        {{ optional($obra->categories)->name }}</a>
                                </div><!-- /.meta-info -->
                                <a href="{{ route('obras.show', ['id' => $obra->id]) }}">
                                    <h3>{{ $obra->titulo }}</h3>
                                </a>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-blog-style-two -->
                    </div><!-- /.col-md-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-style-two -->

    <section class="about-style-two">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ url('img/sobre.jpg') }}" class="pull-right" alt="Awesome Image">
                </div><!-- /.col-md-5 -->
                <div class="col-md-7">
                    <div class="about-content">
                        <h3>Sobre nós</h3>
                        <span>Conheça nossa história.</span>
                        <p>A Engefixe nasceu para agregar valor ao seu lar. Por isso, ela trabalha para levar valores como
                            qualidade, dedicação, respeito e compromisso ao lugar onde você e sua família passarão os
                            melhores momentos das suas vidas.
                        <p> Diariamente nossos colaboradores, nas mais diferentes frentes de serviços distribuídas na grande
                            Mossoró e região, trabalham com determinação para colocar em prática soluções que vão garantir a
                            qualidade dos serviços realizados.</p>
                        <!--
                            <div class="brand-logos">
                            <img src="{{ url('about-b-1-1.png') }}" alt="Awesome Image">
                            <img src="{{ url('about-b-1-2.png') }}" alt="Awesome Image">
                            <img src="{{ url('about-b-1-3.png') }}" alt="Awesome Image">
                        </div> /.brand-logos
                        -->
                    </div><!-- /.about-content -->
                </div><!-- /.col-md-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-style-two -->


    <section class="cta-style-one">
        <div class="inner">
            <div class="container">
                <div class="title pull-left">
                    <h3>Acesse a área do cliente para acompanhar sua obra.</h3>
                </div><!-- /.title pull-left -->
                <div class="btn-box pull-right">
                    <a href="#" class="cta-btn">Área do cliente</a>
                </div><!-- /.btn-box -->
            </div><!-- /.container -->
        </div><!-- /.inner -->
    </section><!-- /.cta-style-one -->

    <section class="testimonials-style-one sec-pad">
        <div class="container">
            <div class="sec-title">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Depoimentos</h3>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-8">
                        <!-- <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam <br> rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archite.</p> -->
                    </div><!-- /.col-md-8 -->
                </div><!-- /.row -->
            </div><!-- /.sec-title -->
            <div class="row">
                <div class="testimonials-carousel-style-one owl-theme owl-carousel owl-loaded">
                        @foreach ($testimonials as $depo)
                                <div class="item">
                                    <div class="single-testimonial-style-one">
                                        <div class="top-box">
                                            <i class="qoute-icon zxp-icon-right-quote"></i>
                                            <div class="icon-box">
                                                <img src="{{ Voyager::image($obra->thumbnail('small', 'imagem')) }}" alt="Imagem">
                                            </div><!-- /.icon-box -->
                                            <div class="text-box">
                                                {{-- <h3>Professional Handling</h3> --}}
                                            </div><!-- /.text-box -->
                                        </div><!-- /.top-box -->
                                        <div class="content-box">
                                            <p>{!! Str::limit($depo->depoimento,380) !!}</p>
                                            <h4>- {{ $depo->autor }}</h4>
                                        </div><!-- /.content-box -->
                                    </div><!-- /.single-testimonial-style-one -->
                                </div>

                            {{-- <div class="col-md-6">
                        <div class="single-testimonial-style-one">
                            <h4><i class="fas fa-quote-left"></i> {{ $depo->autor }}</h4>
                            <div class="content-box">
                                {!! Str::limit($depo->texto,250) !!}
                            </div><!-- /.content-box -->
                        </div><!-- /.single-testimonial-style-one -->
                    </div> --}}
                        @endforeach
                </div><!-- /.container -->
    </section><!-- /.testimonials-style-one -->

    <div class="brand-carousel-wrapper" style="padding: 2em 0">
        <div class="container">
            <div class="brand-carousel owl-carousel owl-theme owl-loaded mt-1">
                @foreach ($partners as $partner)
                    <div class="item">
                        <img src="{{ Voyager::image($partner->imagem) }}" alt="Parceiro" />
                    </div>
                @endforeach
            </div>
            <div class="owl-controls">
                <div class="owl-nav">
                    <div class="owl-prev" style="display: none;"><i class="fa fa-angle-left"></i></div>
                    <div class="owl-next" style="display: none;"><i class="fa fa-angle-right"></i></div>
                </div>
                <div class="owl-dots" style="display: none;"></div>
            </div>
        </div><!-- /.brand-carousel -->
    </div><!-- /.container -->
    </div><!-- /.brand-carousel-wrapper -->

    <section class="blog-style-two sec-pad">
        <div class="container">
            <div class="sec-title">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Serviços</h3>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-6">
                        <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br> deserunt mollit anim id est laborum.</p> -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-3 text-right">
                        <a href="{{ url('/servicos') }}" class="thm-btn">Veja mais</a>
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.sec-title -->
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog-style-two">
                            <div class="img-box">
                                <img src="{{ Voyager::image($obra->thumbnail('small', 'imagem')) }}" alt="Awesome Image">
                                <a href="{{ route('servicos.show', ['id' => $service->id]) }}" class="read-more">Ver
                                    mais</a>
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <div class="meta-info">
                                </div><!-- /.meta-info -->
                                <a href="{{ route('servicos.show', ['id' => $service->id]) }}">
                                    <h3>{{ $service->titulo }}</h3>
                                </a>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-blog-style-two -->
                    </div><!-- /.col-md-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-style-two -->

@endsection
