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
    color: #000;
  }
  </style>
</head>

<body id="page-top">

  <?php include("nav-bar.php") ?>

  <header>
    <div class="container">
      <div style="margin: 60px auto; padding-top: 30px;"><h1>ถาม-ตอบ</h1></div>
    </div>

    <section id="content" style="background: #FFF;">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <ul class="list-group text-left question-list">
              <li class="list-group-item"><span class="badge">ม.ปลาย</span> <span class="badge">เคมี</span> <a href="#">Cras justo odio</a> <h6>นี่คือบรรทัดแรกของคำถาม</h6> </li>
              <li class="list-group-item math"><span class="badge">ม.ต้น</span> <span class="badge">คณิตศาสตร์</span> <a href="#">ตอบคำถามหนูทีค่ะ</a> <h6>1+1=2 แล้ว 1+1 เท่ากับเท่าไหร่คะ</h6></li>
              <li class="list-group-item"><span class="badge">ภาษาต่างประเทศ</span>  <a href="#">Morbi leo risus</a> <h6>นี่คือบรรทัดแรกของคำถาม</h6></li>
              <li class="list-group-item"><span class="badge">ม.ปลาย</span><span class="badge">ฟิสิกส์</span> <a href="#">Porta ac consectetur ac</a> <h6>นี่คือบรรทัดแรกของคำถาม</h6></li>
              <li class="list-group-item math"><span class="badge">ม.ปลาย</span> <span class="badge">คณิตศาสตร์</span> <a href="#">Cras justo odio</a> <h6>นี่คือบรรทัดแรกของคำถาม</h6></li>
              <li class="list-group-item" id="math"><span class="badge">ม.ต้น</span> <span class="badge">คณิตศาสตร์</span>  <a href="#"> Cras justo odio</a> <h6>นี่คือบรรทัดแรกของคำถาม</h6></li>
              <li class="list-group-item"><span class="badge">ภาษาต่างประเทศ</span>  <a href="#">Morbi leo risus</a> <h6>นี่คือบรรทัดแรกของคำถาม</h6></li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default text-left">
              <div class="panel-heading">
                <h3 class="panel-title">เลือกวิชา</h3>
              </div>
              <div class="panel-body">
                <div class="checkbox">
                  <label class="checkbox-inline">
                    <input type="checkbox"> มัธยมต้น
                  </label>
                </div>
                <div class="checkbox">
                  <label class="checkbox-inline">
                    <input type="checkbox"> มัธยมปลาย
                  </label>
                </div>
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

              <div class="panel-body">
                <div class="btn btn-primary" data-toggle="modal" data-target="#askQuestion"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> ต้้งคำถาม</div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="askQuestion" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">ตั้งคำถาม</h4>
            </div>
            <div class="modal-body text-left">
              <form>
                <div class="form-group">
                  <label for="title">หัวข้อคำถาม</label>
                  <input id="title" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="description;e">รายละเอียด</label>
                  <textarea id="description" class="form-control" rows="8"></textarea>
                </div>
              </form>
              <div class="panel-body">
                <h4>เลือกหัวข้อที่เกี่ยวข้อง</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="checkbox">
                      <label class="checkbox-inline">
                        <input type="checkbox"> มัธยมต้น
                      </label>
                    </div>
                    <div class="checkbox">
                      <label class="checkbox-inline">
                        <input type="checkbox"> มัธยมปลาย
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
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" id="save" class="btn btn-primary disabled">Save changes</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->


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

    function goToByScroll(id){
      // Remove "link" from the ID
      id = id.replace("link", "");
      // Scroll
      $('html,body').animate({
        scrollTop: $(id).offset().top},
        'slow');
      }

      $(document).ready( function(){
        $('#mathCheckbox').click(function () {
          $(".list-group-item").toggle(!this.checked);
          $(".math").show();
        });

        $("#description").keydown( function(){
          var title = $("#title").val();
          var description = $("#description").val();
          if(title&&description){
            $("#save").removeClass("disabled");
          } else {
            $("#save").addClass("disabled");
          }
        })

        $("#title").keydown( function(){
          var title = $("#title").val();
          var description = $("#description").val();
          if(title&&description){
            $("#save").removeClass("disabled");
          } else {
            $("#save").addClass("disabled");
          }
        })

        $("#save").click( function(){
          var title = $("#title").val();
          var description = $("#description").val();
          if(title&&description){
            $(".question-list").append("<li class='list-group-item animated fadeInUp'><span class='badge'>ม.ปลาย</span> <span class='badge'>คณิตศาสตร์</span>  <a href'#'>" + title + "</a> <h6>" + description + "</h6></li>")
            $("#title").val("");
            $("#description").val("");
            $("#askQuestion").modal('hide');
            goToByScroll("li:last");
          }
        });
      })

      </script>
    </body>
    </html>
