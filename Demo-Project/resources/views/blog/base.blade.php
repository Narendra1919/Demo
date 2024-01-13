<!doctype html>
<html lang="en" class="no-focus">
    <head>
         @include('blog.head')
         @yield('css')
        <!-- END Stylesheets -->
    </head>
    <body>
          @include('blog.sidebar')
            <!-- END Sidebar -->

            <!-- Header -->
               @include('blog.header')
            <!-- END Header -->

            <!-- Main Container -->

               @yield('main')

            <!-- END Main Container -->

            <!-- Footer -->
        @include('blog.footer')
        <!-- END Page Container -->

        @include('blog.corejs')

        @stack('script')
       
       
    </body>
</html>