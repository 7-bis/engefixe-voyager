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

<section class="blog-style-two project-style-one" style="padding-top: 100px">

    <div class="gallery-filter">
        <ul class="post-filter masonary text-center">
            <li class="filter " data-filter=".oil"><a href="{{ url('/obras') }}"><span>Todas</span></a></li>
            @foreach ($categorias_obras as $categoria)
                <li class="filter " data-filter=".oil"><a href="{{ route('obras.categoria',$categoria->id) }}"><span>{{$categoria->name}}</span></a></li>
            @endforeach
            {{-- <li class="filter active" data-filter=".masonary-item"><span>Em construção</span></li> --}}
            {{-- <li class="filter " data-filter=".construction"><span>Concluídos</span></li> --}}
            {{-- <li class="filter " data-filter=".oil"><span>Lançamentos</span></li> --}}
        </ul><!-- /.post-filter -->
    </div>

</section>
<section class="service-style-one home-page-three">
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
        {{-- <div class="row">
        @foreach($constructions as $obra)
            <div class="col-md-4 col-sm-6 col-xs-12  mb-4" style="border: 1px solid #f1f1f1; border-radius: 4px; padding:0 0 15px 0; " >
                <div class="single-blog-style-two">
                    <div class="img-box">
                        <img src="{{ asset('img/01.jpg') }}" alt="Awesome Image" style="border-radius: 4px; ">
                        <a href="{{ route('obras.show',['id' => $obra->id]) }}" class="read-more">Ver projeto</a>
                    </div><!-- /.img-box -->
                    <div class="text-box" style="padding:0 20px 0 20px; height: 100px;">
                        <div class="meta-info">
                            <a href="{{ route('obras.show',['id' => $obra->id]) }}"><i class="fas fa-home"></i> {{ optional($obra->categories)->name }}</a>
                        </div><!-- /.meta-info -->
                        <a href="{{ route('obras.show',['id' => $obra->id]) }}"><h3>{{ Str::limit($obra->titulo,50) }}</h3></a>
                    </div><!-- /.text-box -->
                </div><!-- /.single-blog-style-two -->
            </div>
            <!-- /.col-md-4 -->
            @endforeach
        </div><!-- /.row --> --}}

    </div><!-- /.container -->
</section><!-- /.blog-style-two -->

@endsection
