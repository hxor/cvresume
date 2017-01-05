<section id="testimonials" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-users"></i>Testimonials</h4>
        </div>
        <div id="testimonials-card" class="row card">
            <div class="col-md-12 col-xs-12">
                <!-- CLIENTS SLIDER-->
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                    <!-- INDICATORS -->
                    <ol class="carousel-indicators">
                        <?php $x=0; ?>
                        @foreach ($testi as $data)
                            
                            @if ($loop->first)
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            @endif
                            @if ($x++ < count($testi) - 1)
                                <li data-target="#myCarousel" data-slide-to="{{ $x }}"></li>
                            @endif                            
                        @endforeach
                    </ol>
                    <!-- WRAPPER FOR SLIDES -->
                    <div class="carousel-inner" role="listbox">
                            <?php $x=0; ?>
                        @foreach ($testi as $data)
                            <?php $x++; ?>
                            <div class="item {{ $x == 1 ? 'active' : '' }}">
                                <div class="col-md-12">
                                    <!--CLIENT IMAGE-->
                                    <div class="ben center-block">
                                        <img alt="client-image" class="center-block" src="{{ $data->photo == null ? asset('/ax/images/client.png') : $data->photo }}">
                                    </div>
                                    <!--CLIENT QUOTE-->
                                    <blockquote>
                                        {{ $data->content }}
                                        <cite>{{ $data->name }}, {{ $data->title }}, {{ $data->inst }}.</cite>
                                    </blockquote>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div id="clients">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="clients-wrap">
                            <!--CLIENT LOGO'S-->
                            <ul id="clients-list" class="clearfix">
                                <li><img src="{{ asset('/ax/images/logo.png') }}" alt="client-logo"></li>
                                <li><img src="{{ asset('/ax/images/logo.png') }}" alt="client-logo"></li>
                                <li><img src="{{ asset('/ax/images/logo.png') }}" alt="client-logo"></li>
                                <li><img src="{{ asset('/ax/images/logo.png') }}" alt="client-logo"></li>
                                <li><img src="{{ asset('/ax/images/logo.png') }}" alt="client-logo"></li>
                                <li><img src="{{ asset('/ax/images/logo.png') }}" alt="client-logo"></li>
                                <li><img src="{{ asset('/ax/images/logo.png') }}" alt="client-logo"></li>
                                <li><img src="{{ asset('/ax/images/logo.png') }}" alt="client-logo"></li>
                                <li><img src="{{ asset('/ax/images/logo.png') }}" alt="client-logo"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- {{ dd($testi) }} --}}