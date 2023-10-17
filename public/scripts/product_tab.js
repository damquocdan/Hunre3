function openTabProInfo(evt, content) {
  let i, tabcontent, tablinks;
  tabcontent = document.querySelectorAll(".product-info-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.querySelectorAll(".product-info-btn");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(content).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultBtnOpen").click();
