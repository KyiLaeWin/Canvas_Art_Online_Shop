@extends('Admin.master')

@section('content')

        <div class="lte-main-content">
            <!-- side bar -->
            <div class="lte-sidebar col-md-2 col-sm-3 hidden-xs">
                <ul class="lte-sidebar-menu">
                    <li class="active"><a href="{{ url("/main") }}"><i class="fa fa-dashboard"></i> Product</a></li>
                    
                    <li><a href="{{ url("/mainblog") }}"><i class="fa fa-tint"></i> Blog</a></li>
                    <!--<li><a href="widgets.html"><i class="fa fa-gear"></i> Widgets</a></li>-->
                    
                </ul> 
            </div>
            <!-- /.side-bar-->
            <!-- main content -->
            <div class="lte-main-container col-md-10 col-sm-9">
                <div class="page-header">
                    <i class="fa fa-dashboard"></i> Product 
                    
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
                


               
    <a href="main/create" class="btn btn-success">Add Item</a><br><br>
    
  


                <div class="row product">
                    @foreach($items as $item)
                    <div class="col-md-4" style="margin-bottom: 30px;">
                        <div class="post">
                            <div class="item-container">
                                <div class="item-caption">
                                    <div class="item-caption-inner">
                                        <div class="item-caption-inner1">
                                            <a class="example-image-link" href="{{url('/images/'.$item->image)}}"
                                                data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{url('/images/'.$item->image)}}" />
                            </div>
                            <div class="t-center">
                                <span class="product-title">{{ $item->name }}</span><br>
                                <span class="price">${{ $item->price }}</span><br>
                                <a href="/main/{{ $item->id }}/edit" style="margin-bottom: 10px;margin-top:10px;" class="btn btn-warning">Edit</a><br>

                                <form action="\main\{{$item->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
                                 
   

                            </div>
                        </div>
                    </div>

                    @endforeach
                    {{$items->links()}}
                    <!----one photo--->
                    


                </div><!--row product -->

                    

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
