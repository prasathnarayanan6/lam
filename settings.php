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
.line {
  border-top: 1px solid black;
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
                        <a class="navbar-brand" href="#">Settings</a>
                            <div class="d-flex ms-auto">
                                Prasath
                            </div>
                    </div>
            </nav><br><br>
            <div class="row">
                <div class="col-md-6 mt-2">
                    <div class="card" style="background-color: white;">
                        <div class="card-content">
                            <div class="card-body">
                            <center><div class="mb-1">Personal Info</div></center>
                                    <div class="line"></div><br>
                                    <center><img src="./img/Xyma_BG.svg" width="30%"></img></center><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Name:</label><br>
                                            <label class="form-label">Prasath</label>
                                        </div><br>
                                        <div class="col-md-6">
                                            <label class="form-label">Email:</label><br>
                                            <label class="form-label">prasathnarayanan28@xyma.in</label>
                                        </div><br>
                                    </div><br><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Customer Id:</label><br>
                                            <label class="form-label">XY038</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Contact No:</label><br>
                                            <label class="form-label">9962383309</label>
                                        </div>
                                    </div><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card" style="background-color: white;">
                        <div class="card-content">
                            <div class="card-body">
                                    <center><div class="mb-1">Contact Info</div></center>
                                    <div class="line"></div><br>
                                    <form action="">
                                             <CENTER><div class="mt-1 h1"><i class="fa-solid fa-people-group"></i></div></CENTER> 
                                             <center><div class="mb-1">Customer Support</div></center>
                                             <center><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></center><br>
                                             <center><button type="submit" class="btn btn-sm btn-dark">Send</button></center>
                                    </form><br> 
                                    <div class="row">
                                        <div class="col-md-4">
                                              <a href="https://www.xyma.in/" style="text-decoration: none;" class="text-dark"><i class="fa-solid fa-globe"></i> www.xyma.in</a>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label"><i class="fa fa-phone" aria-hidden="true"></i> +91-9442949347</label><br>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label"><i class="fa fa-envelope" aria-hidden="true"></i> info@xyma.in</label><br>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--row--->
            
  </div>
  
</main>
</body>
</html>         