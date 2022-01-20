<!doctype html>
<html lang="en">
  <head>
    <title>Contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    
    <?php include 'php/links.php';
    include 'header.php';
    ?>

  </head>
  <body>
      
   <!-- ------------------------------ -->
    <section class="contact_section layout_paddin text-dark">
      <div class="overlay">
    <h2 class="custom_heading text-center font">
      CONTACT US NOW
    </h2>
    <div class="container mt-5 pt-5 ">
      <form action="">
        <div>
          <input type="text" placeholder="NAME" >
        </div>
        <div>
          <input type="email" placeholder="EMAIL">
        </div>
        <div>
          <input type="text" placeholder="PHONE NUMBER">
        </div>
        <div>
          <input type="text" class="message-box" placeholder="MESSAGE">
        </div>
        <div class="d-flex justify-content-center mt-5 pt-5">
          <button>
            SEND
          </button>
        </div>
      </form>
    </div>
  </div>
  </section>
  <?php include 'footer.php' ?>
  </body>
</html>
<style type="text/css">
  .overlay{
    padding: 5%;
    background: rgba(0, 0, 0, 0.1);
  }
  .contact_section input{
    color: black;
  }
  .contact_section input::placeholder
  {
    color: grey;
  }
</style>