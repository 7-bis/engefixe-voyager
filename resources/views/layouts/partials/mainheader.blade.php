<header class="header header-home-one">
    <div class="header-top">
        <div class="container">
            <div class="pull-left left-contact-info">
                <p><i class="fas fa-envelope-open"></i>contato@engefixe.com.br</p>
            </div><!-- /.pull-left -->
            <div class="pull-right right-contact-info">
                <p><i class="zxp-icon-old-telephone-ringing"></i>84 3333.3333</p><!--
                --><!--<p>
                    <i class="fas fa-globe"></i>
                     /.select-box
                </p>-->
            </div><!-- /.pull-right -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <nav class="navbar navbar-default header-navigation stricky">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed zxp-icon-menu" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false"> </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('img/header-logo-1-1.png')}}" alt="Awesome Image">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">

                <ul class="nav navbar-nav navigation-box">
                    <li class="{{ request()->is('/') ? 'current' : '' }}">
                        <a href="{{ url('/') }}">Início<button class="sub-nav-toggler"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button></a>
                    </li>
                    <li class="{{ request()->is('*sobre*') ? 'current' : '' }}"> <a href="">Sobre</a> </li>
                    <li class="{{ request()->is('*servicos*') ? 'current' : '' }}">
                        <a href="{{ url('/servicos') }}">Serviços<button class="sub-nav-toggler"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button></a>
                    </li>
                    <li class="{{ request()->is('*obra*') ? 'current' : '' }}">
                        <a href="{{ url('/obras') }}">Obras<button class="sub-nav-toggler"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button></a>
                    </li>
                    <li class="{{ request()->is('*contato*') ? 'current' : '' }}"> <a href="{{ url('/contato') }}">Contato</a> </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="right-side-box">
                <a href="#" class="rqa-btn">Área do cliente</a>
            </div><!-- /.right-side-box -->
        </div><!-- /.container -->
    </nav>
</header><!-- /.header -->
