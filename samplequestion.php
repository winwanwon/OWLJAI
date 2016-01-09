<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Creative - Start Bootstrap Theme</title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

  <!-- Custom Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="css/animate.min.css" type="text/css">
  <link rel="stylesheet" href="css/jquery.tiles.min.css" type="text/css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/creative.css" type="text/css">
  <link rel="stylesheet" href="css/main.css" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style>
    #content {
      background: #FFF;
      color: #000;
    }

    #answer {
      background: #EEE;
      color: #111;
    }
  </style>
</head>

<body id="page-top">

  <?php include("nav-bar.php") ?>

  <header>
    <div class="container">
      <div style="margin: 60px auto; padding-top: 30px;"><h1>ถาม-ตอบ</h1></div>
    </div>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-left">
            <div class="page-header"><h2>Lorem ipsum</h2></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel tenetur repellendus, eius quis. Amet, error, blanditiis? Incidunt quod iusto optio magni consequatur. Et labore repellat aliquid maxime est! Expedita, optio?</p>
            <div class="label label-default">คณิตศาสตร์</div>
            <div class="label label-default">ม.ปลาย</div>
          </div>
        </div>
        </div>
    </section>

    <section id="answer">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <div class="panel panel-success text-left">
              <div class="panel-heading">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos est repudiandae harum, obcaecati quos architecto quis! Animi vitae adipisci, sint odio tempore iste, quod eveniet, illum nam veniam unde ad.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores eum accusamus quisquam, quidem mollitia earum dolor ipsam quos, cum accusantium velit debitis eius dolores similique dignissimos odit cumque aliquid omnis.</div>
                  <div class="col-md-2 text-center">
                    <h1 id="vote_count_1">69</h1>
                    <button id="add_1" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                    <button id="minus_1" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                  </div>
                </div>
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col-md-6 text-left">
                    <img src="img/avatar.jpg" height="30" width="30" class="img-circle">
                  </div>
                  <div class="col-md-6 text-right" style="line-height: 30px;">
                    The Best Tutor, <i>09/01/2016</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            <div class="panel panel-default text-left">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores eum accusamus quisquam, quidem mollitia earum dolor ipsam quos, cum accusantium velit debitis eius dolores similique dignissimos odit cumque aliquid omnis.</div>
                  <div class="col-md-2 text-center">
                    <h1 id="vote_count_2">0</h1>
                    <button id="add_2" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                    <button id="minus_2" class="btn btn-danger"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                  </div>
                </div>
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col-md-6 text-left">
                    <img src="img/avatar.jpg" height="30" width="30" class="img-circle">
                  </div>
                  <div class="col-md-6 text-right" style="line-height: 30px;">
                    The Kakest Tutor, <i>09/01/2016</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/jquery.tiles.min.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
    <script>
      $(document).ready(function(){
        var vote_1 = 69;
        var voted_1 = false;
        var vote_2 = 0;
        var voted_2 = false;
        $("#add_1").click( function(){
          vote_1 += 1;
          if(voted_1==false){
            $("#vote_count_1").html(vote_1);
            $("#add_1").addClass("disabled");
            $("#minus_1").addClass("disabled");
          }
          voted_1 = true;
        })

        $("#minus_1").click( function(){
          vote_1 -= 1;
          if(voted_1==false){
            $("#vote_count_1").html(vote_1);
            $("#add_1").addClass("disabled");
            $("#minus_1").addClass("disabled");
          }
          voted_1 = true;
        })

        $("#add_2").click( function(){
          vote_2 += 1;
          if(voted_2==false){
            $("#vote_count_2").html(vote_2);
            $("#add_2").addClass("disabled");
            $("#minus_2").addClass("<disable></disable>d");
          }
          voted_2 = true;
        })

        $("#minus_2").click( function(){
          vote_2 -= 1;
          if(voted_2==false){
            $("#vote_count_2").html(vote_2);
            $("#add_2").addClass("disabled");
            $("#minus_2").addClass("disabled");
          }
          voted_2 = true;
        })
      })
    </script>
    </body>
    </html>
