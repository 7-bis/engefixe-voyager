<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-widget about-widget">
                        <a href="#"><img src="{{ url('img/header-logo-1-1.png') }}" width="150" alt="Awesome Image"></a>
                        <p>Desde 2010, estamos no segmento da construção civil, construindo e realizando sonhos. Nossa trajetória sempre pautada em qualidade e credibilidade.
                        Desde 2010, estamos no segmento da construção civil, construindo e realizando sonhos. Nossa trajetória sempre pautada em qualidade e credibilidade.</p>
                        <p>Desde 2010, estamos no segmento da construção civil, construindo e realizando sonhos. Nossa trajetória sempre pautada em qualidade e credibilidade.</p>
                        <div class="social">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.social -->
                    </div><!-- /.footer-widget about-widget -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget links-widget">
                        <div class="title">
                            <h3>Links úteis</h3>
                        </div><!-- /.title -->
                        <ul class="links-list">
                            <li><a href="{{ url('/') }}"><i class="fas fa-angle-right"></i>Início</a></li>
                            <li><a href="{{ url('/servicos') }}"><i class="fas fa-angle-right"></i>Serviços</a></li>
                            <li><a href="{{ url('/obras') }}"><i class="fas fa-angle-right"></i>Obras</a></li>
                            <li><a href="{{ url('/contato') }}"><i class="fas fa-angle-right"></i>Contatos</a></li>
                        </ul><!-- /.links-list -->
                    </div><!-- /.footer-widget links-widget -->
                </div><!-- /.col-md-2 -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget recent-post-widget">
                        <div class="title">
                            <h3>Obras recentes</h3>
                        </div><!-- /.title -->
                        @foreach($latest_constructions as $obra)
                        <div class="single-recent-post">
                            <div class="img-box">
                                <img src="{{ url('img/01.jpg') }}" width="100" alt="Awesome Image">
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <a href="{{ route('obras.show',['id' => $obra->id]) }}"><h4>{{$obra->titulo}}</h4></a>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-recent-post -->
                        @endforeach
                    </div><!-- /.footer-widget recent-post-widget -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->

</footer><!-- /.site-footer -->
<div class="footer-bottom">
    <div class="container">
        <div class="copy-text pull-left">
            <p>2021 © Engefixe - Todos os direitos reservados</p>
        </div><!-- /.copy-text -->
        <div class="right-link pull-right">
            <a href="#">7Bis Web Mobile</a>
        </div><!-- /.right-link -->
    </div><!-- /.container -->
</div><!-- /.footer-bottom -->
