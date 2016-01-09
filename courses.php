<!DOCTYPE html>
<html lang="en">
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
        <h1>คอร์สเรียนทั้งหมด</h1></div>
      </div>

      <section id="content" style="background: #FFF; color:#000;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default text-left">
                <div class="panel-heading">
                  <span class="glyphicon glyphicon-search"></span> หาคอร์สตามประเภท
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="checkbox">
                        <label class="checkbox-inline">
                          <input id="preHighCheck" type="checkbox"> มัธยมต้น
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox-inline">
                          <input id="highCheck" type="checkbox"> มัธยมปลาย
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="checkbox">
                        <label class="checkbox-inline">
                          <input type="checkbox" id="mathCheckbox" value="math"> คณิตศาสตร์
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox-inline">
                          <input type="checkbox" id="chemCheckbox" value="option2"> เคมี
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox-inline">
                          <input type="checkbox" id="physicCheckbox" value="option3"> ฟิสิกส์
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox-inline">
                          <input type="checkbox" id="bioCheckbox" value="option3"> ชีววิทยา
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="checkbox">
                        <label class="checkbox-inline">
                          <input type="checkbox" id="foreignCheckbox" value="option3"> ภาษาต่างประเทศ
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox-inline">
                          <input type="checkbox" id="socCheckbox" value="option3"> สังคมศึกษา
                        </label>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox-inline">
                          <input type="checkbox" id="thaiCheckbox" value="option3"> ภาษาไทย
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="appendrow">
          <div class="row">
            <div class="col-md-3 preHighSchoolCourse">
              <img src="img/video_frame1.png" class="img-responsive" alt="">
              <div class="text-left vid-description vid-description-small">
                <a href="course_sample.php"><h3>คณิตศาสตร์ ม.1</h3></a>
                <p>เสริมสร้างการคิด และการวิเคราะห์กับวิชาคณิตศาสตร์ ม.1 โดยพี่จิ๊บ มาสนุกกันนะคะ</p>
                <h3>300THB</h3>
                <button class="btn-buy btn btn-primary"><span class="glyphicon glyphicon-ok"></span> ซื้อ</button>
              </div>
            </div>
            <div class="col-md-3 preHighSchoolCourse">
              <img src="img/video_frame2.png" class="img-responsive" alt="">
              <div class="text-left vid-description vid-description-small">
                <a href="course_sample.php"><h3>วิทยาศาสตร์ ม.2</h3></a>
                <p>อยากรักในวิทยาศาสตร์ต้องมาเรียนกับผมพี่อู๋แล้วน้องๆจะสตรอง!!</p>
                <h3 style="opacity:0.9;">ซื้อแล้ว</h3>
                <a href="play-video.php" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> ดูคอร์ส</a>
              </div>
            </div>

            <div class="col-md-3 preHighSchoolCourse">
              <img src="img/video_frame3.png" class="img-responsive" alt="">
              <div class="text-left vid-description vid-description-small">
                <a href="course_sample.php"><h3>ภาษาไทยพื้นฐาน</h3></a>
                <p>โฉมใหม่กับการเรียนภาษาไทย ไม่ง่วง ไม่น่าเบื่อ ไม่ต้องเกลียดวิชานี้อีกต่อไป โดยภาษาไทยพื้นฐาน พี่นก</p>
                <h3>300THB</h3>
                <button class="btn-buy btn btn-primary"><span class="glyphicon glyphicon-ok"></span> ซื้อ</button>
              </div>
            </div>

            <div class="col-md-3 highSchoolCourse">
              <img src="img/video_frame4.png" class="img-responsive" alt="">
              <div class="text-left vid-description vid-description-small">
                <a href="course_sample.php"><h3>คณิตศาสตร์ ม.ปลาย</h3></a>
                <p>เรียนสนุกลุกนั่งสบายสไตล์พี่โจ วิศวะเครื่องกลจากจุฬาลงกรณ์มหาวิทยาลัย</p>
                <h3>300THB</h3>
                <button class="btn-buy btn btn-primary"><span class="glyphicon glyphicon-ok"></span> ซื้อ</button>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-3 highSchoolCourse">
              <img src="img/video_frame5.png" class="img-responsive" alt="">
              <div class="text-left vid-description vid-description-small">
                <a href="course_sample.php"><h3>ฟิสิกส์เข้ามหาวิทยาลัย</h3></a>
                <p>อยากติดจุฬารึเปล่า มาเรียนกับพี่ พี่มีเทคนิคดีๆแชร์เพียบ!! พี่พอล วิศวะจุฬาลงกรณ์มหาวิทยาลัย ดีกรี 4.00!!</p>
                <h3><5></5>00THB</h3>
                <button class="btn-buy btn btn-primary"><span class="glyphicon glyphicon-ok"></span> ซื้อ</button>
              </div>
            </div>
            <div class="col-md-3 highSchoolCourse">
              <img src="img/video_frame6.png" class="img-responsive" alt="">
              <div class="text-left vid-description vid-description-small">
                <a href="course_sample.php"><h3>ตะลุยโจทย์ PAT3</h3></a>
                <p>อยากเข้าวิศวะไม่ยาก แค่รู้ตรงจุด!! พี่นุ๊ก ICT มหิดล และน้องจะรัก PAT3 ตลอดไป</p>
                <h3>300THB</h3>
                <button class="btn-buy btn btn-primary"><span class="glyphicon glyphicon-ok"></span> ซื้อ</button>
              </div>
            </div>

            <div class="col-md-3 highSchoolCourse">
              <img src="img/video_frame7.png" class="img-responsive" alt="">
              <div class="text-left vid-description vid-description-small">
                <a href="course_sample.php"><h3>ปริมาณสารสัมพันธ์ Part I</h3></a>
                <p>ปริมาณสารสัมพันธ์ part1 เรื่องง่ายๆที่ใครๆก็ไม่เข้าใจ พี่แนน สนุกแน่นอน</p>
                <h3>500THB</h3>
                <button class="btn-buy btn btn-primary"><span class="glyphicon glyphicon-ok"></span> ซื้อ</button>
              </div>
            </div>

            <div class="col-md-3 highSchoolCourse">
              <img src="img/video_frame8.png" class="img-responsive" alt="">
              <div class="text-left vid-description vid-description-small">
                <a href="course_sample.php"><h3>ปริมาณสารสัมพันธ์ Part II</h3></a>
                <p>ต่อเนื่องกับ ปริมาณสารสัมพันธ์ part II ความสนุกยังไม่จบ มาลุยกันต่อเลย</p>
                <h3>250THB</h3>
                <button class="btn-buy btn btn-primary"><span class="glyphicon glyphicon-ok"></span> ซื้อ</button>
              </div>
            </div>
          </div>
          <br>
        </div>
        </div>


        <div class="row">
          <div class="col-md-12 text-center">
            <a id="show_more" href="#">Show more...</a>
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

      function goToByScroll(id){
        // Remove "link" from the ID
        id = id.replace("link", "");
        // Scroll
        $('html,body').animate({
          scrollTop: $(id).offset().top},
          'slow');
        }


      $(document).ready( function(){
        $('#preHighCheck').click(function () {
          $(".highSchoolCourse").toggle(!this.checked);
        });

        $('#highCheck').click(function () {
          $(".preHighSchoolCourse").toggle(!this.checked);
        });

        $('#show_more').click(function () {
          var appender = $(".appendrow:last").html();
          $(".appendrow:last").append(appender);
          goToByScroll("#show_more");
        });

        $(".btn-buy").click( function() {
          $(this).html("");
          $(this).append("<a href='play-video.php' style='color:#FFF !important; text-decoration:none !important;'><span class='glyphicon glyphicon-eye-open'></span> ดูคอร์ส</a>");
        })

      })
      </script>
    </body>
    </html>
