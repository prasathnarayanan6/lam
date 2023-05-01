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
    <link rel="stylesheet" href="./lity/lity/dist/lity.css">
    <script src="./lity/lity/vendor/jquery.js"></script>
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
  transition: transform .2s;
  color : black; /* Animation */
  /* width: 200px;
  height: 200px; */
  /* margin: 0 auto; */
}

.tr:hover {
    transform: scale(1.05);
    background-color:  #152238;
    color: white;
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
                        <a class="navbar-brand" href="#">Reports</a>
                            <div class="d-flex ms-auto">
                                Prasath
                            </div>
                    </div>
            </nav>
            <div class="row">
                        <div class="col-xl-6 col-sm-12 col-12 mt-3"><!----first half col 1-->                               
                                <div class="card" style=""><!-- wave guide 1 card-->
                                <div class="card-content"><!-- wg1 card content--->
                                    <div class="card-body"><!--- wg1 card body--->
                                            <div class="media d-flex">
                                                <div class="media-body text-left">
                                                        <h6 class="danger text-dark">Sensor Stats</h6>
                                                </div>
                                                <div class="ms-auto h1">
                                                    <h6 class="text-dark" id="text">Live Update</h6>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Sensor</th>
                                                        <th scope="col">Temperature</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td id="s1">NA</td>
                                                        <td>Normal</td>
                                                        <td>view</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td id="s2">NA</td>
                                                        <td>Normal</td>
                                                        <td>view</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td id="s3">NA</td>
                                                        <td>Normal</td>
                                                        <td>view</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td id="s4">NA</td>
                                                        <td>Normal</td>
                                                        <td>view</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td id="s5">NA</td>
                                                        <td>Normal</td>
                                                        <td>view</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">6</th>
                                                        <td id="s6">NA</td>
                                                        <td>Normal</td>
                                                        <td>view</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">7</th>
                                                        <td id="s7">NA</td>
                                                        <td>Normal</td>
                                                        <td>view</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">8</th>
                                                        <td id="s8">NA</td>
                                                        <td>Normal</td>
                                                        <td>view</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">9</th>
                                                        <td id="s9">NA</td>
                                                        <td>Normal</td>
                                                        <td>view</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">10</th>
                                                        <td id="s10">NA</td>
                                                        <td>Normal</td>
                                                        <td>view</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div><!--col close-->
                        <div class="col-md-6 mt-5">
                                <div class="col-xl-12 col-sm-12 col-12 mt-3"><!----first half col 1-->                               
                                        <div class="card" style=""><!-- wave guide 1 card-->
                                        <div class="card-content"><!-- wg1 card content--->
                                            <div class="card-body"><!--- wg1 card body--->
                                                    <div class="media d-flex">
                                                        <div class="media-body text-left">
                                                                <h6 class="danger text-dark">xy1waveguide</h6>
                                                        </div>
                                                        <div class="ms-auto h1">
                                                            <h6 class="text-dark" id="text">Details</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-4">
                                                            <div class="card" style=""><!-- wave guide 1 card-->
                                                                <div class="card-content"><!-- wg1 card content--->
                                                                    <div class="card-body">
                                                                        <center><i class="fa fa-inbox" style="font-size:40px"></i><br><br></center>
                                                                        <center><h6>xy1waveguide</h6></center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card tr" style=""><!-- wave guide 1 card-->
                                                                <div class="card-content"><!-- wg1 card content--->
                                                                    <div class="card-body">
                                                                        <center><a href="pdf" class="" style=""><i class="fas fa-file tr" style="font-size:40px"></i></a><br><br></center>
                                                                        <center><h6>Reports</h6></center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card" style=""><!-- wave guide 1 card-->
                                                                <div class="card-content"><!-- wg1 card content--->
                                                                    <div class="card-body">
                                                                        <center><a href="summa.php?id=xy1waveguide&&s1=s1&&s2=s2&&s3=s3&&s4=s4&&s5=s5" class="text-dark" data-lity data-lity-target="summa.php?id=xy1waveguide&&s1=s1&&s2=s2&&s3=s3&&s4=s4&&s5=s5"><i class="fas fa-chart-line fa-fw" style="font-size:40px"></i></a><br><br></center>
                                                                        <center><h6>Graph</h6></center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        </div>
                                </div> <!--div-->
                                <div class="col-xl-12 col-sm-12 col-12 mt-3"><!----first half col 1-->                               
                                        <div class="card" style=""><!-- wave guide 1 card-->
                                        <div class="card-content"><!-- wg1 card content--->
                                            <div class="card-body"><!--- wg1 card body--->
                                                    <div class="media d-flex">
                                                        <div class="media-body text-left">
                                                                <h6 class="danger text-dark">xy2waveguide</h6>
                                                        </div>
                                                        <div class="ms-auto h1">
                                                            <h6 class="text-dark" id="text">Details</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-4">
                                                            <div class="card" style=""><!-- wave guide 1 card-->
                                                                <div class="card-content"><!-- wg1 card content--->
                                                                    <div class="card-body">
                                                                        <center><i class="fa fa-inbox" style="font-size:40px"></i><br><br></center>
                                                                        <center><h6>xy2waveguide</h6></center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card tr" style=""><!-- wave guide 1 card-->
                                                                <div class="card-content"><!-- wg1 card content--->
                                                                    <div class="card-body">
                                                                        <center><a href="pdf2" class="" style=""><i class="fas fa-file tr" style="font-size:40px"></i></a><br><br></center>
                                                                        <center><h6>Reports</h6></center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card" style=""><!-- wave guide 1 card-->
                                                                <div class="card-content"><!-- wg1 card content--->
                                                                    <div class="card-body">
                                                                        <center><a href="summa.php?id=xy2waveguide&&s6=s6&&s7=s7&&s8=s8&&s9=s9&&s10=s10" class="text-dark" data-lity data-lity-target="summa.php?id=xy2waveguide&&s6=s6&&s7=s7&&s8=s8&&s9=s9&&s10=s10"><i class="fas fa-chart-line fa-fw" style="font-size:40px"></i></a><br><br></center>
                                                                        <center><h6>Graph</h6></center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>  
                                
                                
                        </div>
            </div>                     
  </div>   
</main>
        <script src="./lity/lity/dist/lity.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
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
               fetch('http://localhost/lam/data').then(function(response){
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