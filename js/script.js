/* ONGLETS SERVICES PAGE ACCUEIL !! */
////////////////////////////////////////////////////////////
function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    if(window.innerWidth>768){
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
      tablinks[i].style.color = 'black';
    }
  
    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";
  
    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
    elmnt.style.color = 'white';
    }
    else {
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = color;
        tablinks[i].style.color = 'white';
      }
    }
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

//collapsible elements
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

console.log("poirot");
console.log(window.innerWidth);
if(window.innerWidth<768){
  console.log("hello grosse vache");
    document.getElementById("mobile-view-column").style.display = "block";
    document.getElementById("desktop-view-column").style.display = "none";
    document.getElementById("mobile-view-column2").style.display = "block";
    document.getElementById("desktop-view-column2").style.display = "none";
    document.getElementById("Home").style.display = "block";
    document.getElementById("News").style.display = "block";
}