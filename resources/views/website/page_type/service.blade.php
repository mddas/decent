@extends("layouts.master")
   @section('content')
        <section class="section breadcrumb-modern context-dark parallax-container" style="background-image:   linear-gradient(
                  rgba(27, 40, 92, 0.7),
                  rgba(28, 35, 61, 0.7)
                ) ,url(https://images.pexels.com/photos/2480854/pexels-photo-2480854.jpeg?auto=compress&cs=tinysrgb&w=1600)">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block">Our Services</h2>
                    <div class="offset-sm-top-35">
                        <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="index.html">Home</a></li>
                            <li>Our Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
            <div class="shell isotope-wrap">
                <h2 class="text-bold">Our&nbsp;Services</h2>
                <hr class="divider bg-madison">
                <div class="row range-30 isotope offset-top-60 text-left">
                    <!---foreach start---->
                    @foreach($services as $service)
                        <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
                            <article class="post-course"><a href="course-details.html"><img class="img-responsive"
                                        src="{{$service->banner_image}}"
                                        width="370" height="240" alt=""></a>
                                <div class="post-news-body">
                                    <h6><a href="{{route('subcategory',[$slug1,$service->nav_name])}}">{{$service->caption}}</a></h6>

                                    <div class="offset-top-10">
                                        <p>{{$service->short_content}}</p>
                                    </div>

                                </div>
                            </article>
                        </div>
                    @endforeach    
                    <!---stop foreach---->
                </div>

            </div>
        </section>
      @endsection