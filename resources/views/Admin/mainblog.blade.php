@extends('Admin.master')

@section('content')

        <div class="lte-main-content">
            <!-- side bar -->
            <div class="lte-sidebar col-md-2 col-sm-3 hidden-xs">
                <ul class="lte-sidebar-menu">
                    <li><a href="{{ url("/main") }}"><i class="fa fa-dashboard"></i> Product</a></li>
                    
                    <li class="active"><a href="{{ url("/mainblog") }}"><i class="fa fa-tint"></i> Blog</a></li>
                    <!--<li><a href="widgets.html"><i class="fa fa-gear"></i> Widgets</a></li>-->
                    
                </ul>
            </div>
            <!-- /.side-bar-->
            <!-- main content -->
            <div class="lte-main-container col-md-10 col-sm-9">
                <div class="page-header">
                    <i class="fa fa-dashboard"></i> Blog 
                    <div class="btn-group pull-right">
                        <button id="reportrange" class='btn btn-default'>
                            <i class="fa fa-calendar"></i>
                            <span>Date Range Picker</span> <b class="caret"></b>
                        </button>
                    </div>
                </div>

                <!-- /.page-header -->
                <!-- alert info -->
                    @if(session('status'))
                        <div class="alert alert-success alert-dismissible">
          
                            <strong>Success!</strong>{{ session('status')}}
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
                    @endif
                    <br>
                    @if(session('editstatus'))
                        <div class="alert alert-success alert-dismissible">
          
                            <strong>Success!</strong>{{ session('editstatus')}}
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
                    @endif
                    
                        @if(session('delstatus'))
                        <div class="alert alert-success alert-dismissible">
          
                            <strong>Success!</strong>{{ session('delstatus')}}
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
                    @endif
                    
                <!-- /.alert -->   
                <a href="mainblog/create" class="btn btn-success">Add Blog</a><br><br>

                @foreach($blogs as $blog)
            <div class="card mb-2">
                <div class="card-body">
                    <h3 class="card-title">{{$blog->title}}</h3><br>
                   
                        <p class="card-text" style="white-space: pre-wrap;">{{Str::limit($blog->body, 400,$end='.......')}}</p>
                        <a class="btn btn-primary" href="mainblog/{{ $blog->id }}">View Detail</a>
                          <a href="/mainblog/{{ $blog->id }}/edit" style="margin-bottom: 10px;margin-top:10px;" class="btn btn-warning">Edit</a><br>

                                <form action="\mainblog\{{$blog->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
                    </div>
                </div>
                @endforeach
                {{$blogs->links()}}

                    

    </div>                   
</div>



        <!-- ./.lte-main-content -->
        

        <!-- JQuery 1.10.2 -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/Admin/bootstrap.min.js" type="text/javascript"></script>
        <!-- LTE Tree -->
        <script src="js/Admin/lteTree.js" type="text/javascript"></script>
        <!-- LTE App -->
        <script src="js/Admin/lteApp.js" type="text/javascript"></script>
        <!-- Sparklines -->
        <script src="js/Admin/sparklines/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- bootstrap WYSIWYG -->
        <script src="js/Admin/wysiwyg/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- bootstrap Moment -->
        <script src="js/Admin/moment.js"></script>
        <!-- bootstrap Date Range Picker -->
        <script src="js/Admin/daterangepicker.js"></script>
        <!-- Full Calendar -->
        <script src="js/Admin/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jqplot charts -->
        <script src="js/Admin/jqplot/jquery.jqplot.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/Admin/jqplot/plugins/jqplot.dateAxisRenderer.min.js"></script>
        <script type="text/javascript" src="js/Admin/jqplot/plugins/jqplot.logAxisRenderer.min.js"></script>
        <script type="text/javascript" src="js/Admin/jqplot/plugins/jqplot.canvasTextRenderer.min.js"></script>
        <script type="text/javascript" src="js/Admin/jqplot/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
        <script type="text/javascript" src="js/Admin/jqplot/plugins/jqplot.highlighter.min.js"></script>
        <script type="text/javascript" src="js/Admin/jqplot/plugins/jqplot.barRenderer.min.js"></script>
        <script type="text/javascript" src="js/Admin/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
        <script type="text/javascript" src="js/Admin/jqplot/plugins/jqplot.pointLabels.min.js"></script>
        <script type="text/javascript">
            $(function() {
                //Full Calendar
                $('#fullcalendar').fullCalendar({
                    events: [
                        {
                            title: 'event1',
                            start: '2013-12-01'
                        },
                        {
                            title: 'event2',
                            start: '2013-12-05',
                            end: '2013-12-07'
                        },
                        {
                            title: 'event3',
                            start: '2013-12-09 12:30:00',
                            allDay: false // will make the time show
                        }
                    ]
                });

                //Line chart 1
                $.jqplot._noToImageButton = true;
                var currYear = [["2011-08-01", 796.01], ["2011-08-02", 510.5], ["2011-08-03", 527.8],
                    ["2011-08-05", 420.36], ["2011-08-06", 219.47], ["2011-08-07", 333.82], ["2011-08-08", 660.55],
                    ["2011-08-10", 521], ["2011-08-11", 660.68], ["2011-08-12", 928.65], ["2011-08-13", 864.26],
                    ["2011-08-15", 623.86], ["2011-08-16", 1300.05], ["2011-08-17", 972.25], ["2011-08-18", 661.98],
                    ["2011-08-20", 1546.23], ["2011-08-21", 593], ["2011-08-22", 560.25], ["2011-08-23", 857.8],
                    ["2011-08-25", 1256.14], ["2011-08-26", 1033.01], ["2011-08-27", 811.63], ["2011-08-28", 735.01],
                    ["2011-08-31", 1177], ["2011-09-01", 1023.66], ["2011-09-02", 1442.31], ["2011-09-03", 1299.24],
                    ["2011-09-09", 4118.48], ["2011-09-10", 1988.11], ["2011-09-11", 1485.89], ["2011-09-12", 2681.97],
                    ["2011-09-13", 1679.56], ["2011-09-14", 3538.43], ["2011-09-15", 3118.01], ["2011-09-16", 4198.97],
                    ["2011-09-17", 3020.44], ["2011-09-18", 3383.45], ["2011-09-19", 2148.91], ["2011-09-20", 3058.82],
                    ["2011-09-25", 2785.93], ["2011-09-26", 4329.7], ["2011-09-27", 3493.72], ["2011-09-28", 4440.55]];

                var plot1 = $.jqplot("visitors-chart", [currYear], {
                    seriesColors: ["#fa3031"],
                    highlighter: {
                        show: true,
                        sizeAdjust: 1,
                        tooltipOffset: 9
                    },
                    grid: {
                        background: 'rgba(57,57,57,0.0)',
                        drawBorder: false,
                        shadow: false,
                        gridLineColor: '#eeeeee',
                        gridLineWidth: 2
                    },
                    legend: {
                        show: false,
                        placement: 'inside'
                    },
                    seriesDefaults: {
                        rendererOptions: {
                            smooth: true,
                            animation: {
                                show: true
                            }
                        },
                        showMarker: false
                    },
                    series: [
                        {
                            fill: false,
                            label: '2012',
                            shadow: false
                        }
                    ],
                    axesDefaults: {
                        rendererOptions: {
                            baselineWidth: 1.5,
                            baselineColor: '#444444',
                            drawBaseline: false
                        }
                    },
                    axes: {
                        xaxis: {
                            renderer: $.jqplot.DateAxisRenderer,
                            tickRenderer: $.jqplot.CanvasAxisTickRenderer,
                            tickOptions: {
                                formatString: "%b %e",
                                angle: -30,
                                textColor: '#444444'
                            },
                            min: "2011-08-01",
                            max: "2011-09-30",
                            tickInterval: "7 days",
                            drawMajorGridlines: false
                        },
                        yaxis: {
                            renderer: $.jqplot.LogAxisRenderer,
                            pad: 0,
                            rendererOptions: {
                                minorTicks: 1
                            },
                            tickOptions: {
                                formatString: "%'d",
                                showMark: false
                            }
                        }
                    }
                });

                var s1 = [3200, 5633, 8921, 7842];
                var ticks = ['Jun', 'Jul', 'Aug', 'Sep'];

                var plot2 = $.jqplot('barchart', [s1], {
                    // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
                    animate: !$.jqplot.use_excanvas,
                    grid: {
                        background: 'rgba(57,57,57,0.0)',
                        drawBorder: false,
                        shadow: false,
                        gridLineColor: '#ffffff',
                        gridLineWidth: 2
                    },
                    seriesDefaults: {
                        renderer: $.jqplot.BarRenderer,
                        pointLabels: {show: true},
                        shadow: false,
                        color: "#52b9e9"
                    },
                    axes: {
                        xaxis: {
                            renderer: $.jqplot.CategoryAxisRenderer,
                            ticks: ticks
                        },
                        yaxis: {
                            show: false
                        }
                    },
                    highlighter: {show: false}
                });
                $(window).resize(function() {
                    plot1.replot({resetAxes: true});
                    plot2.replot({resetAxes: true});
                });

                //wysiwyg
                $('.textarea').wysihtml5();

                //date picker
                $('#reportrange').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'Last 7 Days': [moment().subtract('days', 6), moment()],
                                'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
                );

            });
        </script>
@endsection
