<?php
if (isset($_POST['send'])) {
    $to = 'lwallace@alumni.princeton.edu'; //my Email
    $subject = $_POST['Subject'];
    $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
    $message = 'Email: ' . $_POST['_replyto'] . "\r\n\r\n";
    $message = 'Message: ' . $_POST['message'];
    $success = mail($to, $subject, $message, $headers);

}
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Automation Project</title>
    <meta name="description" content="Automation Project Page"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/aos.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top bg-primary" >
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="/" rel="tooltip">Leah Wallace</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                <!--<li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>-->
                <li class="nav-item"><a class="nav-link" href="/#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="/#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
  </div>
</div>


<body>
  <?php if (isset($success) && $success) { ?>
<h1> Thank You </h1>
  <p> Your message has been sent. </p>
<?php } else { ?>
  <h1> Oops </h1>
  <p> Sorry, there was a problem sending your message. </p>
<?php } ?>
</body>
