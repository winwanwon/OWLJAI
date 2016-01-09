<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand page-scroll" href="index.php"><img src="img/1.png" height="80" style="margin-top: -25px;" alt="OWLJAI"></a>
    </div>

    <form class="navbar-form navbar-left" role="search" style="margin-top: 13px;">
      <div class="form-group">
        <div class="inner-addon left-addon">
          <i class="glyphicon glyphicon-search"></i>
          <input type="text" class="form-control" placeholder="ค้นหา">
        </div>
      </div>
    </form>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a class="page-scroll" href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> หน้าแรก</a>
        </li>
        <li>
          <a class="page-scroll" href="courses.php"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> คอร์ส</a>
        </li>
        <li>
          <a class="page-scroll" href="askboard.php"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> ถาม-ตอบ</a>
        </li>
        <li>
          <a class="page-scroll" href="livestream.php"><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> รายการสด</a>
        </li>
        <li>
          <a class="page-scroll" href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> ติดต่อเรา</a>
        </li>
        <li>
          <a class="page-scroll" href="#"  data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> เข้าสู่ระบบ</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="login">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">เข้าสู่ระบบ</h3>
      </div>
      <div class="modal-body">
        <form accept-charset="UTF-8" role="form">
          <fieldset>
            <div class="form-group">
              <input class="form-control" placeholder="E-mail" name="email" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password" name="password" type="password" value="" id="password">
            </div>
            <div class="checkbox">
              <label>
                <input name="remember" type="checkbox" value="Remember Me"> จำไว้ในระบบ
              </label>
            </div>
            <input class="btn btn-lg btn-success btn-block" id="login" type="submit" value="Login">
          </fieldset>
        </form>
        <center><h3>หรือ</h3></center>
        <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Login ผ่าน facebook">
      </div>
    </div>
  </div>
</div>
