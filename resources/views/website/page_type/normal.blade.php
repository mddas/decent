@extends("layouts.master")
   @section('content')
    <section class="section breadcrumb-modern context-dark parallax-container"
     style="background-image:   linear-gradient(
                  rgba(27, 40, 92, 0.7),
                  rgba(28, 35, 61, 0.7)
                ) ,url(images/about/aboutus.jpeg)">
      <div class="parallax-content section-30 section-sm-70">
        <div class="shell">
          <h2 class="veil reveal-sm-block">{{$normal->caption}}</h2>

          <ul class="list-inline list-inline-lg list-inline-dashed p">
            <li><a href="#">{{$slug1 ?? ''}}</a></li>
            <li>{{$slug_detail->nav_name ?? ''}}</li>
          </ul>

        </div>
      </div>
    </section>
    <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
      <div class="shell">
        <div class="range range-50 text-sm-left range-sm-middle range-sm-justify">
          <div class="cell-sm-5 cell-md-4  sideMenuWrapper">
            <!-- <h3>Side Bar Navigation</h3>
            <div class="subMenuContainer">
              <ul>
                <li><a href="message-from-director.html">Message From Director</a></li>
                <li><a href="mission.html">Mission/Vision</a></li>
                <li><a href="why-fortune.html">Why Fortune ?</a></li>
              </ul>

            </div> -->
            <img
              src="{{$normal->banner_image}}"
              alt="">
          </div>
          <div class="cell-sm-7 cell-md-7 cell-sm-push-1">
            <h3 class="text-bold">{{$normal->caption}}</h3>
            <hr class="divider bg-madison hr-sm-left-0" />
            <div class="offset-top-30 offset-md-top-30">
              <p>
                 @php echo $normal->long_content; @endphp
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endsection


    