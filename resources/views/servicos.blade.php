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
                          @foreach($categories as $category)
                            <li><a href="#">{{ $category->name }}</a></li>
                          @endforeach
                      </ul><!-- /.service-lists -->
                  </div><!-- /.single-sidebar -->
                  <div class="single-sidebar contact-sidebar">
                      <div class="title">
                          <h3>Contatos</h3>
                      </div><!-- /.title -->
                      <div class="single-contact-info">
                          <i class="zxp-icon-old-telephone-ringing"></i>
                          <p>84 99999.9999</p>
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
                      <h3>Reforma de casas</h3>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.</p>
                      <br><br>
              </div><!-- /.has-left-sidebar -->
          </div><!-- /.col-md-8 -->
      </div><!-- /.row -->
  </div><!-- /.container -->
</section>


@endsection
