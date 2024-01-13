@extends('blog.base')
@section('main')

    <!-- Page Content -->
    <main id="main-container"><div class="bg-primary">
    <div class="bg-pattern bg-black-op-25" style="background-image: url('assets/media/various/bg-pattern.png');">
        <div class="content content-top text-center">
            <div class="py-50">
                <h1 class="font-w700 text-white mb-10">Blog</h1>
                <h2 class="h4 font-w400 text-white-op">Our latest news and learning articles.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Blog and Sidebar -->
<div class="content">
    <div class="row items-push py-30">
        <!-- Posts -->
        @foreach ($user as $item)
        <div class="col-xl-8">
            <div class="mb-50">
                <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                    <a class="img-link" href="be_pages_generic_story.html">
                        <img class="img-fluid" src="{{asset('assets/media/photos/'.$item->image)}}" alt="" width="50%">
                    </a>
                </div>
               
                <h3 class="h4 font-w700 text-uppercase mb-5">{{$item->title}}</h3>

               
                <div class="text-muted mb-10">
                    <span class="mr-15">
                        <i class="fa fa-fw fa-calendar mr-5"></i>{{$item->date}}
                    </span>
                    <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                        <i class="fa fa-fw fa-user mr-5"></i>{{$item->auther_name}}
                    </a>
                    <a class="text-muted" href="javascript:void(0)">
                        <i class="fa fa-fw fa-tag mr-5"></i>News
                    </a>
                </div>
                <p>{{$item->description}}</p>
                <a class="link-effect font-w600" href="{{ route('blogs.show', [$item->id]) }}">Read More..</a>

                <br>
               
            </div>
            @endforeach
            <hr class="d-xl-none">
        </div>
        <!-- END Posts -->

        <!-- Sidebar -->

        <!-- END Sidebar -->
    </div>
</div>
<!-- END Blog and Sidebar -->


</main>
@endsection