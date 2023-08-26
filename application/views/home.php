<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/home.css">
<style>

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top" style="position: unset;">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item mg-t-10"><i class="fa fa-comment" aria-hidden="true"></i></a>
      <a href="#team" class="w3-bar-item mg-t-10"><i class="fa fa-bell" aria-hidden="true"></i></a>
      <a href="#work" class="w3-bar-item mg-t-10">Login</a>
      <a href="#pricing" class="w3-bar-item mg-t-10">Sign UP </a>
      <a href="#contact" class="w3-bar-item w3-button btn-orange">Sell</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<div class="w3-bar bg-color white-c">
   <div class="w3-dropdown-hover">
    <button class="w3-button">All Category</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button">Cars</a>
  <a href="#" class="w3-bar-item w3-button">Phone</a>
  <a href="#" class="w3-bar-item w3-button">MotorCycle</a>
  <a href="#" class="w3-bar-item w3-button">Foe Sale: House & Apartment</a>
  <a href="#" class="w3-bar-item w3-button">Furniture</a>
  <a href="#" class="w3-bar-item w3-button">Electric Appliances</a>

</div>





<!-- Team Section -->
<div class="w3-container w3-row-padding" style="" id="team">
  <h3 class="pd-l-14">LATEST UPDATES</h3>
  
  <div class="w3-row-padding w3-grayscale" style="">
    

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://cdn.carbuzz.com/gallery-images/2019-lamborghini-huracan-performante-carbuzz-583645.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>AT RS - 4000000</h3>
          
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://images.financialexpress.com/2019/11/2020-Kawasaki-Z900-1200.jpg?w=1200&h=800&imflag=true" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>AT RS - 4000000</h3>
       
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
         
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://smgmedia.blob.core.windows.net/images/113420/1024/kawasaki-ninja-h2-7c9ea922af03.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>AT RS - 4000000</h3>
         
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://cdn.carbuzz.com/gallery-images/2019-lamborghini-huracan-performante-carbuzz-583645.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>AT RS - 4000000</h3>
     
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
     
        </div>
      </div>
    </div>


  <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://cdn.carbuzz.com/gallery-images/2019-lamborghini-huracan-performante-carbuzz-583645.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>AT RS - 4000000</h3>
          
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://images.financialexpress.com/2019/11/2020-Kawasaki-Z900-1200.jpg?w=1200&h=800&imflag=true" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>AT RS - 4000000</h3>
       
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
         
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://smgmedia.blob.core.windows.net/images/113420/1024/kawasaki-ninja-h2-7c9ea922af03.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>AT RS - 4000000</h3>
         
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://cdn.carbuzz.com/gallery-images/2019-lamborghini-huracan-performante-carbuzz-583645.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>AT RS - 4000000</h3>
     
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
     
        </div>
      </div>
    </div>

  <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://cdn.carbuzz.com/gallery-images/2019-lamborghini-huracan-performante-carbuzz-583645.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>AT RS - 4000000</h3>
          
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://images.financialexpress.com/2019/11/2020-Kawasaki-Z900-1200.jpg?w=1200&h=800&imflag=true" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>AT RS - 4000000</h3>
       
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
         
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://smgmedia.blob.core.windows.net/images/113420/1024/kawasaki-ninja-h2-7c9ea922af03.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>AT RS - 4000000</h3>
         
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="https://cdn.carbuzz.com/gallery-images/2019-lamborghini-huracan-performante-carbuzz-583645.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>AT RS - 4000000</h3>
     
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
     
        </div>
      </div>
    </div>


  </div>
</div>





<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 bg-color">
<div class="row">
  <div class="col-md-6">
    <ul>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>

    </ul>

  </div>

  <div class="col-md-6">
      <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>

  </div>

</div>

  
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
