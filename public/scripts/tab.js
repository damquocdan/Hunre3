function openTab(evt, gender) {
  var i, tabcontent, tablinks;
  tabcontent = document.querySelectorAll(".gender-list, .gender-item");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("gender-link");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(gender).style.display = "flex";
  if (document.querySelectorAll("#item" + gender)) {
    let itemMenu = document.querySelectorAll("#item" + gender);
    for (i = 0; i < itemMenu.length; i++) {
      itemMenu[i].style.display = "flex";
    }
  }
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
