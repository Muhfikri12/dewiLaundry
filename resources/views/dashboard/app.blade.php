<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div class="p-0 bg-white container-xxl position-relative d-flex">
        <!-- Spinner Start -->
        <div id="spinner"
            class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('dashboard.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        @yield('main')
        <!-- Content End -->

        <!-- Footer Start -->

        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    {{-- <script>
        (function($) {
            "use strict";

            // Spinner
            var spinner = function() {
                setTimeout(function() {
                    if ($('#spinner').length > 0) {
                        $('#spinner').removeClass('show');
                    }
                }, 1);
            };
            spinner();


            // Back to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.back-to-top').fadeIn('slow');
                } else {
                    $('.back-to-top').fadeOut('slow');
                }
            });
            $('.back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 1500, 'easeInOutExpo');
                return false;
            });


            // Sidebar Toggler
            $('.sidebar-toggler').click(function() {
                $('.sidebar, .content').toggleClass("open");
                return false;
            });


            // Progress Bar
            $('.pg-bar').waypoint(function() {
                $('.progress .progress-bar').each(function() {
                    $(this).css("width", $(this).attr("aria-valuenow") + '%');
                });
            }, {
                offset: '80%'
            });


            // Calender
            $('#calender').datetimepicker({
                inline: true,
                format: 'L'
            });


            // Testimonials carousel
            $(".testimonial-carousel").owlCarousel({
                autoplay: true,
                smartSpeed: 1000,
                items: 1,
                dots: true,
                loop: true,
                nav: false
            });


            // Worldwide Sales Chart
            var ctx1 = $("#worldwide-sales").get(0).getContext("2d");
            var myChart1 = new Chart(ctx1, {
                type: "bar",
                data: {
                    labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
                    datasets: [{
                            label: "USA",
                            data: [15, 30, 55, 65, 60, 80, 95],
                            backgroundColor: "rgba(0, 156, 255, .7)"
                        },
                        {
                            label: "UK",
                            data: [8, 35, 40, 60, 70, 55, 75],
                            backgroundColor: "rgba(0, 156, 255, .5)"
                        },
                        {
                            label: "AU",
                            data: [12, 25, 45, 55, 65, 70, 60],
                            backgroundColor: "rgba(0, 156, 255, .3)"
                        }
                    ]
                },
                options: {
                    responsive: true
                }
            });


            // Salse & Revenue Chart
            var ctx2 = $("#salse-revenue").get(0).getContext("2d");
            var myChart2 = new Chart(ctx2, {
                type: "line",
                data: {
                    labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
                    datasets: [{
                            label: "Salse",
                            data: [15, 30, 55, 45, 70, 65, 85],
                            backgroundColor: "rgba(0, 156, 255, .5)",
                            fill: true
                        },
                        {
                            label: "Revenue",
                            data: [99, 135, 170, 130, 190, 180, 270],
                            backgroundColor: "rgba(0, 156, 255, .3)",
                            fill: true
                        }
                    ]
                },
                options: {
                    responsive: true
                }
            });



            // Single Line Chart
            var ctx3 = $("#line-chart").get(0).getContext("2d");
            var myChart3 = new Chart(ctx3, {
                type: "line",
                data: {
                    labels: [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150],
                    datasets: [{
                        label: "Salse",
                        fill: false,
                        backgroundColor: "rgba(0, 156, 255, .3)",
                        data: [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15]
                    }]
                },
                options: {
                    responsive: true
                }
            });


            // Single Bar Chart
            var ctx4 = $("#bar-chart").get(0).getContext("2d");
            var myChart4 = new Chart(ctx4, {
                type: "bar",
                data: {
                    labels: ["Italy", "France", "Spain", "USA", "Argentina"],
                    datasets: [{
                        backgroundColor: [
                            "rgba(0, 156, 255, .7)",
                            "rgba(0, 156, 255, .6)",
                            "rgba(0, 156, 255, .5)",
                            "rgba(0, 156, 255, .4)",
                            "rgba(0, 156, 255, .3)"
                        ],
                        data: [55, 49, 44, 24, 15]
                    }]
                },
                options: {
                    responsive: true
                }
            });


            // Pie Chart
            var ctx5 = $("#pie-chart").get(0).getContext("2d");
            var myChart5 = new Chart(ctx5, {
                type: "pie",
                data: {
                    labels: ["Italy", "France", "Spain", "USA", "Argentina"],
                    datasets: [{
                        backgroundColor: [
                            "rgba(0, 156, 255, .7)",
                            "rgba(0, 156, 255, .6)",
                            "rgba(0, 156, 255, .5)",
                            "rgba(0, 156, 255, .4)",
                            "rgba(0, 156, 255, .3)"
                        ],
                        data: [55, 49, 44, 24, 15]
                    }]
                },
                options: {
                    responsive: true
                }
            });


            // Doughnut Chart
            var ctx6 = $("#doughnut-chart").get(0).getContext("2d");
            var myChart6 = new Chart(ctx6, {
                type: "doughnut",
                data: {
                    labels: ["Italy", "France", "Spain", "USA", "Argentina"],
                    datasets: [{
                        backgroundColor: [
                            "rgba(0, 156, 255, .7)",
                            "rgba(0, 156, 255, .6)",
                            "rgba(0, 156, 255, .5)",
                            "rgba(0, 156, 255, .4)",
                            "rgba(0, 156, 255, .3)"
                        ],
                        data: [55, 49, 44, 24, 15]
                    }]
                },
                options: {
                    responsive: true
                }
            });


        })(jQuery);
    </script> --}}
</body>

</html>