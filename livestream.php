<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>OWLJAI: เอาใจนักเรียน ไม่ทิ้งติวเตอร์</title>

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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<style type="text/css">

.image-cropper {
    width: 150px;
    height: 150px;
    position: relative;
    overflow: hidden;
    border-radius: 50%;
}

.img-profile {

    display: inline;
    margin: 0 auto;
    height: 100%;
    width: auto;
}

</style>


<body id="page-top" oncontextmenu="return false;" >

   <?php include("nav-bar.php") ?>

    <section style="background-color:#fcdcbb;" id="about">
        <div class="container">
            <div class="row">
                    <div class="col-lg-8 text-center ">
                         <div align="center" class="embed-responsive embed-responsive-16by9">
                            <video  controls class="embed-responsive-item">
                            <source src=http://techslides.com/demos/sample-videos/small.mp4 type=video/mp4>
                            </video>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <center><div class="image-cropper ">
                        <img class="img-profile" src="http://www.electricvelocity.com.au/Upload/Blogs/smart-e-bike-side_2.jpg" class="rounded" />
                        </div></center>
                            <div class="row" style="margin-top: 10px;">
                                   <hr class="light">
                                   <h2>รายการสด: ฟิสิกส์เบื้องต้น</h2>
                            <p>โจทย์ฟิสิกส์สำหรับน้องๆ ม.ต้น</p>

                            </div>



                    </div>

                </div>
            </div>
            <div class="row">
                <div class="container" style="margin-top: 20px">

                    <div class="col-md-8">
                    <ul id="dashboard" class="list-group text-left question-list">
                      <li class="list-group-item"><span class="badge">ถาม</span><a href="#">User : พูมิ</a> <h6>พี่ผมไม่เข้าใใจตรงประโยคที่พี่พูดเมื่อกี้อะครัย</h6> </li>
                      <li class="list-group-item math"><span class="badge">ตอบ</span><a href="/tutor-profile">Tutor : พี่ฮันนี้</a> <h6>ด้เลยค่ะน้องเดี๋์ยวจะจะอธิบายอย่างนี้นะครับว่า ...........................................</h6></li>
                      <br>

                    </ul>
                  </div>

                <div class="col-lg-4">
                    <div class="row">
                    <div class="panel panel-default text-left">
                      <div class="panel-heading">
                        <h3 class="panel-title">ถามคำถามได้เลยครับ ไม่ต้องอาย</h3>
                      </div>
                      <div class="panel-body">
                        <!-- <div class="checkbox"> -->
                          <label for="inputHelpBlock"> </label>
                            <textarea id="inputHelpBlock" class="form-control">  </textarea>
                          <button class="form-control" type="submit" id="submit1">submit</button>
                        <!-- </div> -->

                      </div>

                     </div>
                            <div class="row" style="margin-top: 20px; margin-left: 0px;"><div  style="width: 92%; height: 280px; background: #eee;">
                                <img class="img-profile" src="/img/video_frame.png ">
                            </div></div>
                    </div>
                </div>
                </div>
            </div>

    </section>


        <?php include("footer.php"); ?>

    <!-- jQuery-->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
    <script>
        $("#submit1").click(function(){
            console.log(document.getElementById("inputHelpBlock"));

            var  temp ='<li class="list-group-item"><span class="badge">ถาม</span><a href="#">User : พูมิ</a> <h6>'+ document.getElementById("inputHelpBlock").value+'</h6> </li>';
            $( "#dashboard" ).append( temp );


            setTimeout(function(){
                var  temp ='<li class="list-group-item math"><span class="badge">ตอบ</span><a href="/tutor-profile">Tutor : พี่ฮันนี้</a> <h6>'+ "ทำดีค่ะ"+'</h6> </li><br>';
                $( "#dashboard" ).append( temp );


             },1000);
        });

    </script>

</body>

</html>
