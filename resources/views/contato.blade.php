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
        <h3>Contatos</h3>
        <div class="breadcumb">
            <a href="#">Início</a>
            <!-- --><span class="sep">-</span>
            <!-- --><span class="page-name">Contatos</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.container -->
</section>

<section class="contact-page-content sec-pad">
  <div class="container">
      <div class="row">
          <div class="col-md-8">
              <form action="inc/sendemail.php" class="contact-form row" novalidate="novalidate">
                  <div class="col-md-6">
                      <p>Nome</p>
                      <input type="text" name="name">
                  </div><!-- /.col-md-6 -->
                  <div class="col-md-6">
                      <p>Email</p>
                      <input type="text" name="email">
                  </div><!-- /.col-md-6 -->
                  <div class="col-md-6">
                      <p>Telefone</p>
                      <input type="text" name="phone">
                  </div><!-- /.col-md-6 -->
                  <div class="col-md-6">
                      <p>Assunto</p>
                      <input type="text" name="company">
                  </div><!-- /.col-md-6 -->
                  <div class="col-md-12">
                      <p>Mensagem</p>
                      <textarea name="message"></textarea>
                      <button type="submit">Enviar mensagem</button>
                  </div><!-- /.col-md-6 -->
              </form><!-- /.contact-form -->
              <div class="result"></div><!-- /.result -->
          </div><!-- /.col-md-8 -->
          <div class="col-md-4">
              <div class="contact-info">
                  <h3>Entre em contato</h3>
                  <p>Através deste canal você pode contactar um de nossos atendentes e tirar dúvidas ou enviar mensagens</p>
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
                      <p>Av. Francisco Mota, 98<br> Alto de São Manoel, Mossoró/RN</p>
                  </div><!-- /.single-contact-info -->
              </div><!-- /.contact-info -->
          </div><!-- /.col-md-4 -->
      </div><!-- /.row -->

  </div><!-- /.container -->
</section>

@endsection
