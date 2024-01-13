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

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        @include('blog.corejs');
        @stack('script')
    </body>
</html>