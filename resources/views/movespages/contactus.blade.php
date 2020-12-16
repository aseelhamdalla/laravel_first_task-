<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
body{
    background-color: #25274d;
}
.contact{
    padding: 4%;
    height: 400px;
}
.col-md-3{
    background: #dc67e0;
    padding: 4%;
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
}
.contact-info{
    margin-top:10%;
}
.contact-info img{
    margin-bottom: 15%;
}
.contact-info h2{
    margin-bottom: 10%;
}
.col-md-9{
    background: #fff;
    padding: 3%;
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
}
.contact-form label{
    font-weight:600;
}
.contact-form button{
    background: #25274d;
    color: #fff;
    font-weight: 600;
    width: 25%;
}
.contact-form button:focus{
    box-shadow:none;
}
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

        <a class="navbar-brand mr-5 " href="#">Aseel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
          <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link " href="/">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/contact">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/about" >About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">Services</a>
            </li>
          </ul>
        </div>

        </div>
      </nav>
    <!--Section: Contact v.2-->
    <div class="container contact">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                    <h2>Contact Us</h2>
                    <h4>We would love to hear from you !</h4>
                </div>
            </div>
            <div class="col-md-9">
                <div class="contact-form">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="fname">First Name:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="lname">Last Name:</label>
                      <div class="col-sm-10">          
                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Email:</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="comment">Comment:</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>