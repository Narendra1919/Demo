@extends('blog.base')
@section('main')

    <!-- Page Content -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Add Your Blog</h3>
                </div>
                <div class="block-content">
                        {{ Form::open(['url'=>route('blogs.store'),'method'=>'POST','files'=>true ])}}
                        @csrf
                        @include('blog.form')
                        {{ Form::close() }}
                </div>
            </div>
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Page Content -->
@endsection

