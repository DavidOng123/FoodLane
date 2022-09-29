

 <html>
<head>
  <title>FoodLane</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="CSS/style.css">
   <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <style>
      a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.text-black {
  color: #000; }

.content {
  padding: 7rem 0; }

.thin-heading {
  font-weight: 300;
  font-size: 40px; }

.form-control {
  border: none;
  border-bottom: 1px solid #ccc;
  padding-left: 0;
  padding: 0;
  border-radius: 0px; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000; }

.col-form-label {
  color: #000; }

.btn, .form-control, .custom-select {
  height: 50px; }

.custom-select:active, .custom-select:focus {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-color: #000; }

.heading {
  color: #888;
  letter-spacing: .05rem;
  text-transform: uppercase;
  font-weight: 400; }

.btn {
  border: none;
  border-radius: 0; }
  .btn.btn-primary {
    background: #000;
    color: #fff;
    padding: 15px 20px; }
  .btn:hover {
    color: #fff; }
  .btn:active, .btn:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none; }

.box {
  padding: 40px;
  background: #fff;
  -webkit-box-shadow: -30px 30px 0px 0 rgba(0, 0, 0, 0.08);
  box-shadow: -30px 30px 0px 0 rgba(0, 0, 0, 0.08); }
  .box h3 {
    font-size: 14px;
    margin-bottom: 30px;
    text-align: center; }

label.error {
  font-size: 12px;
  color: red; }

#message {
  resize: vertical; }

#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: #B90B0B; }

#form-message-success {
  color: #55A44E;
  font-size: 18px;
  font-weight: bold; }

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-weight: bold;
  font-size: 12px;
  color: #000; }

  </style>
</head>

<body>
    <?php require_once ('header.php');?>
    <br><br><br>
       
  <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          

          <div class="row justify-content-center">
            <div class="col-md-12">
              
              <h3 class="thin-heading mb-4">Message Us</h3>

              <form class="mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="2" placeholder="Write your message"></textarea>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-12">
                    <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>
          </div>
            <div class="row mb-5">
            <div class="col-md-4 mr-auto">
              <h3 class="thin-heading mb-4">New York</h3>
              <p>9757 Aspen Lane
South Richmond Hill, NY 11419</p>
            </div>
            <div class="col-md-6 ml-auto">
              <h3 class="thin-heading mb-4">Contact Info</h3>
              <p>T: +1 (291) 939 9321 <br> E: info@mywebsite.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>


    <?php require_once ('footer.php');?>
</body>
</html>


