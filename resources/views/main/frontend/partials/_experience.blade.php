<section id="experience" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-suitcase"></i>Experience</h4>
        </div>

        <div id="timeline-experience">
            @foreach ($exp as $data)
                <div class="timeline-block">
                <!-- DOT -->
                 <div class="timeline-dot"><h6>{{ substr($data->title, 0,1) }}</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">{{ $data->title }}</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>{{ $data->name }}</small>
                            </h6>
                            <h6>
                                <small>{{ $data->time }}</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                           {{ $data->content }}
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        {{-- <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-4">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>