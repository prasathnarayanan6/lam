<?php 
session_start();
?>
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
                               <?php 
                               echo $_SESSION['email']; ?> 
                            </div>
                    </div>
            </nav>
            <?php
                    // $sql = "SELECT * FROM fixed ORDER BY id DESC LIMIT 1;";
                    // $result = mysqli_query($conn, $sql);      
                    // $num = mysqli_fetch_array($result); 
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                                <div class="text-warning" id="fault"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 0 Faults</div>
                        </div>
                        <div class="col-md-5">
                                <div class="text-success" id="active"><i class='fas fa-eye'></i> 10 Active Sensors</div>
                        </div>
                    </div>
                </div>
            </div>
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
                                                    <h6 class="text-white" id="blink-text1">(Online)</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card tr" style="background-color: white;">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                <div class="media d-flex">
                                                                    <div class="media-body text-left">
                                                                            <h6 class="danger text-dark"><span id="s1">NA</span>°C</h6>
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
                                                                                    <h6 class="danger text-dark"><span id="s2">NA</span>°C</h6>
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
                                                                            <h6 class="danger text-dark"><span id="s3">NA</span>°C</h6>
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
                                                                                    <h6 class="danger text-dark"><span id="s4">NA</span>°C</h6>
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
                                                                                    <h6 class="danger text-dark"><span id="s5">NA</span>°C</h6>
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
                                                    <h6 class="text-white" id="blink-text">(Online)</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card tr" style="background-color: white;">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                <div class="media d-flex">
                                                                    <div class="media-body text-left">
                                                                            <h6 class="danger text-dark"><span id="s6">NA</span>°C</h6>
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
                                                                                    <h6 class="danger text-dark"><span id="s7">NA</span>°C</h6>
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
                                                                            <h6 class="danger text-dark"><span id="s8">NA</span>°C</h6>
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
                                                                                    <h6 class="danger text-dark"><span id="s9">NA</span>°C</h6>
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
                                                                                    <h6 class="danger text-dark"><span id="s10">NA</span>°C</h6>
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
                <div class="row mt-3 mb-2">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chart-container">
                                       <center> <canvas id="myChart" style="width:100%;max-width:600px;max-height:400px"></canvas></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chart-container">
                                       <center> <canvas id="myChart2" style="width:100%;max-width:600px;max-height:400px"></canvas></center>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                </div> 


                                  
  </div>   
</main>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var element = document.getElementById("blink-text");
            var interval = setInterval(function() {
            element.style.visibility = (element.style.visibility == 'hidden' ? '' : 'hidden');
            }, 800);

            var element1 = document.getElementById("blink-text1");
            var interval1 = setInterval(function() {
            element1.style.visibility = (element1.style.visibility == 'hidden' ? '' : 'hidden');
            }, 800);

            var element2 = document.getElementById("fault");
            var interval2 = setInterval(function() {
            element2.style.visibility = (element2.style.visibility == 'hidden' ? '' : 'hidden');
            }, 1000);

            var element3 = document.getElementById("active");
            var interval3 = setInterval(function() {
            element3.style.visibility = (element3.style.visibility == 'hidden' ? '' : 'hidden');
            }, 1000);
            
            const ctx = document.getElementById('myChart');
const url = "http://localhost/lam/data";
let s1 = [];
let s2 = [];
let s3 = [];
let s4 = [];
let s5 = [];
let s6 = [];
let s7 = [];
let s8 = [];
let s9 = [];
let s10 = [];
let date = [];
let mychart;

async function getchartdata() {
  const response = await fetch(url);
  const data = await response.json();
  
  // Push new data to arrays
  s1.push(data.s1);
  s2.push(data.s2);
  s3.push(data.s3);
  s4.push(data.s4);
  s5.push(data.s5);
  s6.push(data.s6);
  s7.push(data.s7);
  s8.push(data.s8);
  s9.push(data.s9);
  s10.push(data.s10);
  date.push(data.date);

  if (mychart) {
    mychart.data.labels = date;
    mychart.data.datasets[0].data = s1;
    mychart.data.datasets[1].data = s2;
    mychart.data.datasets[2].data = s3;
    mychart.data.datasets[3].data = s4;
    mychart.data.datasets[4].data = s5;
    mychart.data.datasets[5].data = s6;
    mychart.data.datasets[6].data = s7;
    mychart.data.datasets[7].data = s8;
    mychart.data.datasets[8].data = s9;
    mychart.data.datasets[9].data = s10;
    mychart.update();
  } else {
    mychart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: date,
        datasets: [
          {
            label: 'sensor1',
            data: s1,
            borderWidth: 1
          },
          {
            label: 'sensor2',
            data: s2,
            borderWidth: 1
          },{
            label: 'sensor3',
            data: s3,
            borderWidth: 1
          },{
            label: 'sensor4',
            data: s4,
            borderWidth: 1
          },{
            label: 'sensor5',
            data: s5,
            borderWidth: 1
          },{
            label: 'sensor6',
            data: s6,
            borderWidth: 1
          },{
            label: 'sensor7',
            data: s7,
            borderWidth: 1
          },{
            label: 'sensor8',
            data: s8,
            borderWidth: 1
          },{
            label: 'sensor9',
            data: s9,
            borderWidth: 1
          },{
            label: 'sensor10',
            data: s10,
            borderWidth: 1
          }
        ]
      },
      options: {}
    });
  }
}

setTimeout(getchartdata, 0);
setInterval(getchartdata, 10000);

           // const ctx = document.getElementById('myChart');
            //const url = "http://localhost/lam/data";
            //start getchartdata
            // async function getchartdata(){
            //    const s1 =[];
            //    const s2 =[];
            //    const s3 =[];
            //    const s4 =[];
            //    const s5 =[];
            //    const s6 =[];
            //    const s7 =[];
            //    const s8 =[];
            //    const s9 =[];
            //    const s10 =[];
            //    const date = [];
            //     const response = await fetch(url);
            //     const data = await response.json();
            //     date.push(data.date);
            //     // for (let index = 0; index < data.length; index++) {
            //     //     s1[index] = data.s1;
            //     //     s2[index] = data.s2;
            //     //     s3[index] = data.s3;
            //     //     date[index] = data.date;
            //     // }
            //     // console.log(s1);
            //     if (mychart) {
            //         mychart.data.labels.push(data.date);
            //          mychart.data.datasets[0].data.push(data.s1);
            //          mychart.data.datasets[1].data.push(data.s2);
            //          mychart.data.datasets[2].data.push(data.s3);
            //          mychart.data.datasets[3].data.push(data.s4);
            //          mychart.data.datasets[4].data.push(data.s5);
            //          mychart.data.datasets[5].data.push(data.s6);
            //          mychart.data.datasets[6].data.push(data.s7);
            //          mychart.data.datasets[7].data.push(data.s8);
            //          mychart.data.datasets[8].data.push(data.s9);
            //          mychart.data.datasets[9].data.push(data.s10);
            //          mychart.update(); 
            //     }else{
            //             mychart = new Chart(ctx, {
            //             type: 'polarArea',
            //             data: {
            //                 labels: date,
            //                 datasets: [
            //                     {
            //                     label: 'sensor1',
            //                     data: s1,
            //                     borderWidth: 1
            //                 },
            //             {
            //                 label: 'sensor2',
            //                 data: s2,
            //                 borderWidth: 1
            //             },{
            //                 label: 'sensor3',
            //                 data: s3,
            //                 borderWidth: 1
            //             },{
            //                 label: 'sensor4',
            //                 data: s4,
            //                 borderWidth: 1
            //             },{
            //                 label: 'sensor5',
            //                 data: s5,
            //                 borderWidth: 1
            //             },{
            //                 label: 'sensor6',
            //                 data: s6,
            //                 borderWidth: 1
            //             },{
            //                 label: 'sensor7',
            //                 data: s7,
            //                 borderWidth: 1
            //             },{
            //                 label: 'sensor8',
            //                 data: s8,
            //                 borderWidth: 1
            //             },{
            //                 label: 'sensor9',
            //                 data: s9,
            //                 borderWidth: 1
            //             },{
            //                 label: 'sensor10',
            //                 data: s10,
            //                 borderWidth: 1
            //             }
            //         ]
            //             },
            //             options: { }
            //         });
            //     }
            // }
            // let mychart;
            // setInterval(getchartdata, 2500);


            //sensor - 2
            const ctx1 = document.getElementById('myChart2');
            // const url = "http://localhost/lam/data";
            //start getchartdata
            async function getchartdata1(){
               const s1 =[];
               const s2 =[];
               const s3 =[];
               const date = [];
                const response = await fetch(url);
                const data = await response.json();
                date.push(data.date);
                // for (let index = 0; index < data.length; index++) {
                //     s1[index] = data.s1;
                //     s2[index] = data.s2;
                //     s3[index] = data.s3;
                //     date[index] = data.date;
                // }
                // console.log(s1);
                if (mychart2) {
                    mychart2.data.labels.push(data.date);
                     mychart2.data.datasets[0].data.push(data.s1);
                     mychart2.data.datasets[1].data.push(data.s2);
                     mychart2.data.datasets[2].data.push(data.s3);
                     mychart2.update(); 
                }else{
                        mychart2 = new Chart(ctx1, {
                        type: 'bar',
                        data: {
                            labels: date,
                            datasets: [
                                {
                                label: 'sensor1',
                                data: s1,
                                borderWidth: 1
                            },
                        {
                            label: 'sensor2',
                            data: s2,
                            borderWidth: 1
                        },{
                            label: 'sensor3',
                            data: s3,
                            borderWidth: 1
                        }
                    ]
                        },
                        options: { }
                    });
                }
            }
            let mychart2;
            setInterval(getchartdata1,5000);

            function startLiveUpdate(){
            const textViewCount1 = document.getElementById('s1');
            const textViewCount2 = document.getElementById('s2');
            const textViewCount3 = document.getElementById('s3');
            const textViewCount4 = document.getElementById('s4');
            const textViewCount5 = document.getElementById('s5');
            const textViewCount6 = document.getElementById('s6');
            const textViewCount7 = document.getElementById('s7');
            const textViewCount8 = document.getElementById('s8');
            const textViewCount9 = document.getElementById('s9');
            const textViewCount10 = document.getElementById('s10');
            setInterval(function() {
               fetch(url).then(function(response){
                  return response.json();
               }).then(function(data){
                  textViewCount1.textContent = data.s1;
                  textViewCount2.textContent = data.s2;
                  textViewCount3.textContent = data.s3;
                  textViewCount4.textContent = data.s4;
                  textViewCount5.textContent = data.s5;
                  textViewCount6.textContent = data.s6;
                  textViewCount7.textContent = data.s7;
                  textViewCount8.textContent = data.s8;
                  textViewCount9.textContent = data.s9;
                  textViewCount10.textContent = data.s10;
                })
            }, 1000);
         }
         
         document.addEventListener('DOMContentLoaded', function (){
            startLiveUpdate();
         });
        </script>


</body>
</html>