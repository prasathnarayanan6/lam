<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/mm.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <style>
      .zoom {
  /* padding: 50px; */
  transition: transform .2s; /* Animation */
  /* width: 200px;
  height: 200px; */
  /* margin: 0 auto; */
}

.zoom:hover {
  transform: scale(1.1);
  background-color: #152238 ;
  color: white;
 /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

.tr {
  /* padding: 50px; */
  transition: transform .2s; /* Animation */
  /* width: 200px;
  height: 200px; */
  /* margin: 0 auto; */
}

.tr:hover {
    transform: scale(1.05);
    background-color:  #152238;
    color: black;
 /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

        @font-face {
            font-family: 'myFirstFont';
        }
        body {
            background-color: #F5F7FA;
            font-family: 'myFirstFont';
        }
        @media (min-width: 991.98px) {
            main {
                padding-left: 240px;
            }
        }

/* Sidebar */
.sidebar {
position: fixed;
top: 0;
bottom: 0;
left: 0;
padding: 58px 0 0; /* Height of navbar */
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
width: 240px;
z-index: 600;
}

@media (max-width: 991.98px) {
.sidebar {
width: 100%;
}
}
.sidebar .active {
border-radius: 5px;
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
position: relative;
top: 0;
height: calc(100vh - 48px);
padding-top: 0.5rem;
overflow-x: hidden;
overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
@media (max-width: 1174px) {
    .fnee{
        display: flex;
        justify-content: center;
    }
  /* CSS that should be displayed if width is equal to or less than 800px goes here */
}
    </style>

</head>
<body>
    <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <center><img src="./img/Lam_Research_logo.svg.png" width="70%"></img></center><br>
    <div class="position-sticky bg-white">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a onclick="window.location.href='dashboard'" class="list-group-item list-group-item-action zoom">
          <i class="fas fa-tachometer-alt fa-fw me-3 mt-3"></i><span>Dashboard</span>
        </a>
        <a onclick="window.location.href='reports'" class="list-group-item list-group-item-action zoom"><i
            class=" fas fa-search-plus fa-fw me-3 mt-3"></i><span>Reports</span>
        </a>
        <a onclick="window.location.href='graph'" class="list-group-item list-group-item-action zoom">
          <i class="fas fa-chart-line fa-fw me-3 mt-3"></i><span>Graph</span>
        </a>
        <a onclick="window.location.href='settings'" class="list-group-item list-group-item-action zoom"><i
            class="fas fa-cog fa-spin fa-fw me-3 mt-3"></i><span>Settings</span>
        </a>
      </div>
    </div>
    <center><p class="mt-5">©️ All rights Reserved</p></center>
    <center><img src="./img/Xyma_BG.svg" width="55%" class="mt-4"></img></center>
  </nav>
  <!-- Sidebar -->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="">
  <div class="container-fluid pt-2">
            <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Dashboard</a>
                            <div class="d-flex ms-auto">
                                Prasath
                            </div>
                    </div>
            </nav>
            <?php
                    // $sql = "SELECT * FROM fixed ORDER BY id DESC LIMIT 1;";
                    // $result = mysqli_query($conn, $sql);      
                    // $num = mysqli_fetch_array($result); 
            ?>
            <div class="row"><!---row 1----------->
                <div class="col-md-6" style=""><!----first half---->
                    <div class="row"><!----first half row 1--->
                    <!--box 1-->
                            <div class="col-xl-12 col-sm-12 col-12 mt-3"><!----first half col 1-->                               
                                <div class="card" style="background-color: #152238;"><!-- wave guide 1 card-->
                                <div class="card-content"><!-- wg1 card content--->
                                    <div class="card-body"><!--- wg1 card body--->
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                        <h6 class="danger text-white">WaveGuide: xy1waveguide</h6>
                                                </div>
                                                <div class="ms-auto h1 pt-2">
                                                    <h6 class="text-danger" id="text">(Offline)</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card tr" style="background-color: white;">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                <div class="media d-flex">
                                                                    <div class="media-body text-left">
                                                                            <h6 class="danger text-dark">100°C</h6>
                                                                            <span style="color:dark;">Sensor 1</span>

                                                                    </div>
                                                                    <div class="ms-auto h1 pt-1 text-dark">
                                                                            <i class="fas fa-temperature-high"></i>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="card tr" style="background-color: white;">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                        <div class="media d-flex">
                                                                            <div class="media-body text-left">
                                                                                    <h6 class="danger text-dark">100°C</h6>
                                                                                    <span style="color:dark;">Sensor 2</span>

                                                                            </div>
                                                                            <div class="ms-auto h1 pt-1 text-dark">
                                                                                    <i class="fas fa-temperature-high"></i>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                             </div><br>
                                             <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card tr" style="background-color: white;">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                <div class="media d-flex">
                                                                    <div class="media-body text-left">
                                                                            <h6 class="danger text-dark">100°C</h6>
                                                                            <span style="color:dark;">Sensor 3</span>

                                                                    </div>
                                                                    <div class="ms-auto h1 pt-1 text-dark">
                                                                            <i class="fas fa-temperature-high"></i>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="card tr" style="background-color: white ;">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                        <div class="media d-flex">
                                                                            <div class="media-body text-left">
                                                                                    <h6 class="danger text-dark">100°C</h6>
                                                                                    <span style="color:dark;">Sensor 4</span>
                                                                            </div>
                                                                            <div class="ms-auto h1 pt-1 text-dark">
                                                                                    <i class="fas fa-temperature-high"></i>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                             </div><br>
                                             <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <center>
                                                            <div class="col-md-6">
                                                                    <div class="card tr" style="background-color:white;">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                        <div class="media d-flex">
                                                                            <div class="media-body text-left">
                                                                                    <h6 class="danger text-dark">100°C</h6>
                                                                                    <span style="color:dark;">Sensor 5</span>
                                                                            </div>
                                                                            <div class="ms-auto h1 pt-1 text-dark">
                                                                                    <i class="fas fa-temperature-high"></i>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                            </div>
                                                            </center>
                                                        </div>
                                                    </div>
                                             </div>
                                    <!-- </div>
                                    </div> -->
                                </div><!-- wg1 card content--->
                                </div><!--- wg1 card body--->
                            </div> <!----first half col 1-->
                        </div><!--row first half 1-->
                        </div><!--first half--->
                        </div><!---col-md -6 close--->
                        <div class="col-md-6">
                             <div class="row">
                             <div class="col-xl-12 col-sm-12 col-12 mt-3"><!----first half col 1-->                               
                                <div class="card" style="background-color: #152238;"><!-- wave guide 1 card-->
                                <div class="card-content"><!-- wg1 card content--->
                                    <div class="card-body"><!--- wg1 card body--->
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                        <h6 class="danger text-dark">WaveGuide: xy2waveguide</h6>
                                                </div>
                                                <div class="ms-auto h1 pt-2">
                                                    <h6 class="text-success" id="text">(Online)</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card tr" style="background-color: white;">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                <div class="media d-flex">
                                                                    <div class="media-body text-left">
                                                                            <h6 class="danger text-dark">100°C</h6>
                                                                            <span style="color:black;">Sensor 1</span>

                                                                    </div>
                                                                    <div class="ms-auto h1 pt-1 text-dark">
                                                                            <i class="fas fa-temperature-high"></i>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="card tr" style="background-color: white;">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                        <div class="media d-flex">
                                                                            <div class="media-body text-left">
                                                                                    <h6 class="danger text-dark">100°C</h6>
                                                                                    <span style="color:dark;">Sensor 2</span>

                                                                            </div>
                                                                            <div class="ms-auto h1 pt-1 text-dark">
                                                                                    <i class="fas fa-temperature-high"></i>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                             </div><br>
                                             <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card tr" style="background-color: white;">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                <div class="media d-flex">
                                                                    <div class="media-body text-left">
                                                                            <h6 class="danger text-dark">100°C</h6>
                                                                            <span style="color:dark;">Sensor 3</span>

                                                                    </div>
                                                                    <div class="ms-auto h1 pt-1 text-dark">
                                                                            <i class="fas fa-temperature-high"></i>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <div class="card tr" style="background-color: white;">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                        <div class="media d-flex">
                                                                            <div class="media-body text-left">
                                                                                    <h6 class="danger text-dark">100°C</h6>
                                                                                    <span style="color:dark;">Sensor 4</span>

                                                                            </div>
                                                                            <div class="ms-auto h1 pt-1 text-dark">
                                                                                    <i class="fas fa-temperature-high"></i>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                             </div><br>
                                             <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <center>
                                                            <div class="col-md-6">
                                                                    <div class="card tr" style="background-color: white;">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                        <div class="media d-flex">
                                                                            <div class="media-body text-left">
                                                                                    <h6 class="danger text-dark">100°C</h6>
                                                                                    <span style="color:dark;">Sensor 5</span>

                                                                            </div>
                                                                            <div class="ms-auto h1 pt-1 text-dark">
                                                                                    <i class="fas fa-temperature-high"></i>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                            </div>
                                                            </center>
                                                        </div>
                                                    </div>
                                             </div>
                                    <!-- </div>
                                    </div> -->
                                </div><!-- wg1 card content--->
                                </div><!--- wg1 card body--->
                            </div> <!----first half col 1-->
                            </div> 
                        </div> 
                    </div> 
                    </div> 
                    <!-- <div class="row mt-3 mb-2">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chart" id="chart1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chart" id="chart2"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->


                                  
  </div>   
</main>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            $(document).ready(function(){  
                var output_data = 0;
                $.ajax({  
                    url: 'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m',  
                    type: 'GET',  
                    success: function(data) {  
                        output_data = data.latitude;       
                        var options = {
                            series: [output_data],
                            chart: {
                                height: 200,
                                type: 'radialBar',
                                toolbar: {
                                    show: true
                                }
                            },
                            plotOptions: {
                                radialBar: {
                                    startAngle: -135,
                                    endAngle: 225,
                                    hollow: {
                                        margin: 0,
                                        size: '70%',
                                        background: '#fff',
                                        image: undefined,
                                        imageOffsetX: 0,
                                        imageOffsetY: 0,
                                        position: 'front',
                                        dropShadow: {
                                            enabled: true,
                                            top: 3,
                                            left: 0,
                                            blur: 4,
                                            opacity: 0.24
                                        }
                                    },
                                    track: {
                                        background: '#fff',
                                        strokeWidth: '67%',
                                        margin: 0, // margin is in pixels
                                        dropShadow: {
                                            enabled: true,
                                            top: -3,
                                            left: 0,
                                            blur: 4,
                                            opacity: 0.35
                                        }
                                    },
                                    dataLabels: {
                                        show: true,
                                        name: {
                                            offsetY: -10,
                                            show: true,
                                            color: '#888',
                                            fontSize: '15px'
                                        },
                                        value: {
                                            formatter: function(val) {
                                                return parseInt(val);
                                            },
                                            color: '#111',
                                            fontSize: '36px',
                                            show: true,
                                        }
                                    }
                                }
                            },
                            fill: {
                                type: 'gradient',
                                gradient: {
                                    shade: 'dark',
                                    type: 'horizontal',
                                    shadeIntensity: 0.5,
                                    gradientToColors: ['#ABE5A1'],
                                    inverseColors: true,
                                    opacityFrom: 1,
                                    opacityTo: 1,
                                    stops: [0, 100]
                                }
                            },
                            stroke: {
                                lineCap: 'round'
                            },
                            labels: ['Max Temp'],
                        };
                        var chart = new ApexCharts(document.querySelector("#chart1"), options);
                        chart.render();
                        var chart1 = new ApexCharts(document.querySelector("#chart2"), options);
                        chart1.render();
                     
                    }  
                });  
               
            }); 
        </script>


</body>
</html>