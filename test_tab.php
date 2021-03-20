<!DOCTYPE html>
<html>
<title>test_tabs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Tabs in a Grid</h2>

  <div class="w3-row">
    <a href="javascript:void(0)" onclick="openCity(event, 'London');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">01.London</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">02.Paris</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Tokyo');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">03.Tokyo</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, '4Tokyo');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">04.Tokyo</div>
    </a>
  </div>

  <div id="London" class="w3-container city" style="display:none">
    <h2>01.London</h2>
    <p>London is the capital city of England.</p>
    #\36 form_view1 > div.wdform_section
  </div>

  <div id="Paris" class="w3-container city" style="display:none">
    <h2>02.Paris</h2>
    <p>Paris is the capital of France.</p> 
  </div>

  <div id="Tokyo" class="w3-container city" style="display:none">
    <h2>03.Tokyo</h2>
    <p>Tokyo is the capital of Japan.</p>
  </div>
  <div id="4Tokyo" class="w3-container city" style="display:none">
    <h2>04.Tokyo</h2>
    <p>Tokyo is the capital of Japan.</p>
  </div>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>

</body>
</html>