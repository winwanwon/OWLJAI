<!DOCTYPE html>
<html lang="en" ng-app>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>OWLJAI</title>

  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

  <!-- Custom Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Kanit:400,300,500,600,200&subset=thai,latin' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="css/animate.min.css" type="text/css">
  <link rel="stylesheet" href="css/jquery.tiles.min.css" type="text/css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/creative.css" type="text/css">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <style>
  h2 {
    color: #000;
  }
  </style>
</head>
<body>
  <?php include("nav-bar.php") ?>
  <header>
    <div class="container">
      <div style="margin: 60px auto; padding-top: 30px;"  class="text-left">
        <h1>จัดการคอร์สเรียน</h1></div>
      </div>

      <section id="content" style="background: #FFF; color:#000;">
        <div class="container">
          <div class="row">
            <div class="col-md-8 text-left">
              <h2>คอร์ส: {{course_name}}</h2>
              <br>
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-3 control-label">ชื่อ Course</label>
                  <div class="col-sm-9">
                    <input type="text" id="name" ng-model="course_name" class="form-control">
                  </div>
                </div>
              </form>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>วิดีโอลำดับที่ <span class="num_vid">1</span></h3>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">ไฟล์วิดีโอ</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">มีแบบทดสอบท้ายวิดีโอ?</label>
                      <div class="col-sm-9">
                        <input type="checkbox" id="hasCheckbox" ng-model="hasCheckbox">
                      </div>
                    </div>
                    <span ng-show="hasCheckbox">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">คำถาม</label>
                      <div class="col-sm-9">
                        <input type="text" id="quiz" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">คำตอบ</label>
                      <div class="col-sm-9">
                        <input type="text" id="quiz" class="form-control">
                      </div>
                    </div>
                    <h3>นำทางไปยังวิดีโอ</h3>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">เมื่อตอบถูก</label>
                      <div class="col-sm-9">
                        <input type="text" id="if_true"  class="form-control"placeholder="ลำดับวิดีโอที่นำทางไปเมื่อตอบถูก">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">เมื่อตอบผิด</label>
                      <div class="col-sm-9">
                        <input type="text" id="if_false"  class="form-control"placeholder="ลำดับวิดีโอที่นำทางไปเมื่อตอบผิด">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <a href="#" id="add_new_vid">เพิ่มวิดีโอ</a>
            </div>
          </div>
        </div>
      </section>

      <!-- jQuery -->
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
      var vid_num = 1;

      function goToByScroll(id){
        // Remove "link" from the ID
        id = id.replace("link", "");
        // Scroll
        $('html,body').animate({
          scrollTop: $(id).offset().top},
          'slow');
        }

        $(document).ready( function(){
          $("#add_new_vid").click( function(){
            var panel = $(".panel:last").html();
            $(".panel:last").append(panel);
            vid_num += 1;
            $(".num_vid:last").html(vid_num);
            goToByScroll(".panel:last");
          })
        })
        </script>
      </body>
      </html>
