<section id="education" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-graduation-cap"></i>Education</h4>
        </div>

        <div id="timeline-education">

            @foreach ($edu as $data)
              <!-- FIRST TIMELINE -->
              <div class="timeline-block">
                  <!-- DOT -->
                  @if (!$data->icon == null)
                    <div class="timeline-dot"><i class="fa {{ $data->icon }}"></i></div>
                    @else
                    <div class="timeline-dot"><h6>{{ substr($data->title, 0,1) }}</h6></div>
                  @endif
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
                          {{-- <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-1">
                              <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                          </a> --}}
                      </div>
                  </div>
              </div>
            @endforeach
        </div>
    </div>
</section>