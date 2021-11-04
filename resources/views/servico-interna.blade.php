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
                        <li><a href="#">Todos os serviços</a></li>
                          @foreach($categoria_servicos as $category)
                            <li><a href="#">{{ $category->nome }}</a></li>
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
              <div class="has-left-sidebar">
                  <div class="single-service-page-content">
                    <div class="single-blog-style-one">
                        <div class="text-box">
                            <a href="blog-details.html"><h3>{{ $servico->titulo }}</h3></a>
                            <p>{!! $servico->texto !!}</p>
                        </div><!-- /.text-box -->
                        <div class="img-box">
                          <img id="servico-imagem-atual" src="{{Voyager::image($servico->imagem)}}" alt="Awesome Image" style="width: 100%">
                        </div><!-- /.img-box -->
                    </div><!-- /.single-blog-style-one -->
                      {{-- <h3>{{ $servico->titulo }}</h3>
                      <p>{!! $servico->texto !!}</p>
                      <br>
                      <div class="img-box">
                        <img src="{{Voyager::image($servico->imagem)}}" alt="Awesome Image">
                      </div><!-- /.img-box --> --}}
                      <br>
                      @if($servico->imagens)
                      <div class="single-service-carousel owl-theme owl-carousel owl-thumb-clickable">
                        @foreach (json_decode($servico->imagens, true) as $imagem)
                        <div class="item">
                            <img src="{{Voyager::image($imagem)}}" alt="Awesome Image"/>
                        </div><!-- /.item -->
                        @endforeach
                      </div>
                      @endif
              </div><!-- /.has-left-sidebar -->
          </div><!-- /.col-md-8 -->
      </div><!-- /.row -->
  </div><!-- /.container -->
</section>


@endsection
