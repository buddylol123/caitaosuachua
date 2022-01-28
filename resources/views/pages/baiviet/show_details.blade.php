@extends('welcome')
@section('content')

<!-- blog details part start -->
<section class="blog-details section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <article class="post">
          <div class="post-image">
            <img class="img-fluid w-100" src="{{URL::to('public/frontend/images/post-1.jpg')}}" alt="post-image">
          </div>
          <!-- Post Content -->
          <div class="post-content">
            <h3>Cras Sed Elit Sit Amet.</h3>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Admin</a>&nbsp;/
              </li>
              <li class="list-inline-item">
                <a href="#">30 comments</a>&nbsp;/
              </li>
              <li class="list-inline-item">
                <a href="#">30 likes</a>
              </li>
            </ul>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium dolore mque laudantium totam rem aperiam
              eaque ipsa quae ab illo inventore veritatis et quasi archite beatae vitae dicta sunt explicabo. nemo enim ipsam
              voluptatem quia voluptassit.aspernatur aut odit aut fugit.</p>
            <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque poro quisquam est, qui dolorem
              ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
              labore et dolore magnam aliquam quaerat voluptatem</p>
            <!-- blockquote -->
            <blockquote data-aos="fade-left" data-aos-duration="1000">Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia deserunt mollit anim iest.laborum.
              sed perspiciatis unde omnis iste natus error voluptatem accusantium dolore mque laudantium.</blockquote>
            <p>Occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Seper spiciatis
              unde omnis natus error sit voluptatem accusantium doloremque laudantium totam rem. aperiam eaque ipsa quae
              ab illo inventore veritatis.</p>
            <!-- post share -->
            <ul class="post-content-share list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="tf-ion-social-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="tf-ion-social-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="tf-ion-social-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="tf-ion-social-skype"></i>
                </a>
              </li>
            </ul>
           
          </div>
        </article>
      </div>
      <div class="col-lg-4">
        <!-- sidebar -->
        <aside class="sidebar">
          <div class="widget-search widget">
            <form action="#">
              <!-- Search bar -->
              <input class="form-control" type="text" placeholder="Search..." name="search">
              <button type="submit" class="widget-search-btn">
                <i class="tf-ion-ios-search"></i>
              </button>
            </form>
          </div>
          <div class="widget-categories widget">
            <h2>Categories</h2>
           
          </div>
          <div class="widget-post widget">
            <h2>Latest Post</h2>
            <!-- latest post -->
            <ul class="widget-post-list">
              <li class="widget-post-list-item">
                <div class="widget-post-image">
                  <a href="single-post.html">
                    <img src="{{URL::to('public/frontend/images/post-1.jpg')}}" alt="post-img">
                  </a>
                </div>
                <div class="widget-post-content">
                  <a href="single-post.html">
                    <h5>Condentum Quam Vitae Ligu. tempor bibendum.</h5>
                  </a>
                  <h6>Aug 20, 2018</h6>
                </div>
              </li>
              <li class="widget-post-list-item">
                <div class="widget-post-image">
                  <a href="single-post.html">
                    <img src="{{URL::to('public/frontend/images/post-2.jpg')}}" alt="post-img">
                  </a>
                </div>
                <div class="widget-post-content">
                  <a href="single-post.html">
                    <h5>Condentum Quam Vitae Ligu. tempor bibendum.</h5>
                  </a>
                  <h6>Aug 20, 2018</h6>
                </div>
              </li>
              <li class="widget-post-list-item">
                <div class="widget-post-image">
                  <a href="single-post.html">
                    <img src="{{URL::to('public/frontend/images/post-3.jpg')}}" alt="post-img">
                  </a>
                </div>
                <div class="widget-post-content">
                  <a href="single-post.html">
                    <h5>Condentum Quam Vitae Ligu. tempor bibendum.</h5>
                  </a>
                  <h6>Aug 20, 2018</h6>
                </div>
              </li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>
<!-- blog details part end -->
  @endsection