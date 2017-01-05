<section id="portfolios" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-archive"></i>Portfolios</h4>
        </div>
        <div id="portfolios-card" class="row">

            <!--OPTIONS-->
            <ul class="nav nav-tabs">
                <!--ALL CATEGORIES-->
                <li class="active waves-effect list-shuffle"><a id="all-sample" class="active" href="#all" data-toggle="tab">ALL</a>
                    <!--CATEGORIES-->
                {{-- <li class="waves-effect list-shuffle"><a class="cate" href="#a" data-toggle="tab">WEBSITES</a></li> --}}
            </ul>

            <!--CATEGORIES CONTENT-->
            <div class="tab-content">

                <!--All CATEGORIES-->
                <div id="all">
                    @foreach ($port as $data)
                        <div class="col-md-4 col-sm-6 col-xs-12 grid">
                            <figure class="port-effect">
                                <img src="{{ $data->image == null ? asset('/ax/images/portfolio.png') : $data->image }}" class="img-responsive" alt="portfolio-demo"/>
                                <figcaption>
                                    <h2>{{ $data->title }} <span>{{ $data->category }}</span></h2>
                                    <p>{{ $data->content }}</p>
                                    <a href="{{ route('portfolio', $data->id) }}">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--PORTFOLIOS ADD GALLERY BUTTON-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <button id="add-more" class="center-block btn-large waves-effect"><i id="port-add-icon" class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>