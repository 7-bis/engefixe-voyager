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

<section class="blog-page blog-style-one sec-pad">
  <div class="container">
      <div class="row">
          <div class="col-md-8">
              <div class="single-blog-style-one">

                  <div class="text-box">
                      <a href="blog-details.html"><h3>{{$construction->title}}</h3></a>
                      <p>{{$construction->text}}</p>
                  </div><!-- /.text-box -->
                  <div class="img-box">
                    <img src="files/img/01.jpg" alt="Awesome Image">
                </div><!-- /.img-box -->
              </div><!-- /.single-blog-style-one -->

          </div><!-- /.col-md-8 -->
          <div class="col-md-4">
              <div class="sidebar sidebar-right">
                  <div class="single-sidebar category-widget">
                      <div class="title">
                          <h3>Categorias</h3>
                      </div><!-- /.title -->
                      <ul class="category-lists">
                          @foreach ($constructions_categories as $categ)
                            <li><a href="#"><i class="fa fa-angle-right"></i> {{$categ->name}} </a></li>
                          @endforeach
                      </ul><!-- /.category-lists -->
                  </div><!-- /.single-sidebar -->

                  {{-- <div class="single-sidebar instagram-widget">
                      <div class="title">
                          <h3>Instagram</h3>
                      </div><!-- /.title -->
                      <ul class="instagram-lists clearfix">
                          <li><a href="#">
                              <img src="files/img/01.jpg" alt="Awesome Image">
                          </a></li>
                          <li><a href="#">
                              <img src="files/img/01.jpg" alt="Awesome Image">
                          </a></li>
                          <li><a href="#">
                              <img src="files/img/01.jpg" alt="Awesome Image">
                          </a></li>
                          <li><a href="#">
                              <img src="files/img/01.jpg" alt="Awesome Image">
                          </a></li>
                          <li><a href="#">
                              <img src="files/img/01.jpg" alt="Awesome Image">
                          </a></li>
                          <li><a href="#">
                              <img src="files/img/01.jpg" alt="Awesome Image">
                          </a></li>
                      </ul><!-- /.archive-lists -->
                  </div><!-- /.single-sidebar --> --}}
              </div><!-- /.sidebar sidebar-right -->
          </div><!-- /.col-md-4 -->
      </div><!-- /.row -->
  </div><!-- /.container -->
</section>

@endsection
