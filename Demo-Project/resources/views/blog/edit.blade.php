@extends('blog.base')
@section('main')

    <!-- Page Content -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            {!! Form::model($edit,['url'=>route('blogs.update',$edit->id),'method'=>'PUT','files'=>true]) !!}
            @include('blog.form')
            {!! Form::close() !!}
              
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Page Content -->
@endsection

