<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

              <li class="text-muted menu-title">Navigation</li>
                  <li>
                    <a href="{{ route('backend') }}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> </a>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-pin-alt"></i><span> About Me </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('admin.profile.index') }}"> Profile</a></li>
                            <li><a href="{{ route('admin.education.index') }}"> Education</a></li>
                            <li><a href="{{ route('admin.exp.index') }}"> Experience</a></li>
                            <li><a href="{{ route('admin.port.index') }}"> Portfolio</a></li>
                            <li><a href="{{ route('admin.testi.index') }}"> Testimonial</a></li>
                        </ul>
                    </li>
                  </li>          
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
