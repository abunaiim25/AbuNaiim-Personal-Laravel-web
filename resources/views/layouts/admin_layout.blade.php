<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

     <!-- Favicons -->
    <link href="{{ asset('admin')}}/img/favicon-profile.png" rel="icon">
    <link href="{{ asset('admin')}}/img/favicon-profile.png" rel="apple-touch-icon">

    <title>
        @yield('title')
    </title>

    <!-- vendor css -->
    <link href="{{ asset('admin') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/lib/medium-editor/medium-editor.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/lib/medium-editor/default.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/lib/summernote/summernote-bs4.css" rel="stylesheet">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/starlight.css">

     {{-- font awesome link --}}
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
     integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>

    @guest
    @else
       
        @include('layouts.inc_admin.adminslidebar')

        @include('layouts.inc_admin.headpanel')
      
        @include('layouts.inc_admin.messagNotification')
       
    @endguest


    @yield('admin_content')



    <script src="{{ asset('admin') }}/lib/jquery/jquery.js"></script>
    <script src="{{ asset('admin') }}/lib/popper.js/popper.js"></script>
    <script src="{{ asset('admin') }}/lib/bootstrap/bootstrap.js"></script>
    <script src="{{ asset('admin') }}/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('admin') }}/lib/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('admin') }}/lib/datatables-responsive/dataTables.responsive.js"></script>

     <!--https://sweetalert.js.org/guides/-->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     @if (session('status'))
         <script>
             swal("{{ session('status') }}");
         </script>
     @endif
     
    <script>
        $(function() {
            'use strict';

            $('#datatable1').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            $('#datatable2').DataTable({
                bLengthChange: false,
                searching: false,
                responsive: true
            });

            // Select2
            $('.dataTables_length select').select2({
                minimumResultsForSearch: Infinity
            });

        });
    </script>
    
    <script src="{{ asset('admin') }}/lib/medium-editor/medium-editor.js"></script>
    <script src="{{ asset('admin') }}/lib/summernote/summernote-bs4.min.js"></script>
    <script>
        //editors like word
        $(function() {
            'use strict';

            // Inline editor
            var editor = new MediumEditor('.editable');

            // Summernote editor
            $('#summernote').summernote({
                height: 150,
                tooltip: false
            })

            $('#summernote2').summernote({
                height: 150,
                tooltip: false
            })
        });
    </script>

    <script src="{{ asset('admin') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{ asset('admin') }}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="{{ asset('admin') }}/lib/d3/d3.js"></script>
    <script src="{{ asset('admin') }}/lib/rickshaw/rickshaw.min.js"></script>
    <script src="{{ asset('admin') }}/lib/chart.js/Chart.js"></script>
    <script src="{{ asset('admin') }}/lib/Flot/jquery.flot.js"></script>
    <script src="{{ asset('admin') }}/lib/Flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('admin') }}/lib/Flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('admin') }}/lib/flot-spline/jquery.flot.spline.js"></script>

    <script src="{{ asset('admin') }}/js/starlight.js"></script>
    <script src="{{ asset('admin') }}/js/ResizeSensor.js"></script>
    <script src="{{ asset('admin') }}/js/dashboard.js"></script>
    <script src="{{ asset('admin') }}/lib/highlightjs/highlight.pack.js"></script>

    <script src="{{ asset('admin') }}/lib/select2/js/select2.min.js"></script>

    <script src="{{ asset('admin') }}/js/starlight.js"></script>


</body>

</html>
