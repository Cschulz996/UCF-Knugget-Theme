var headerRandNum = Math.floor(Math.random() * 12);
var headerImages = ["/assets/images/header/1.JPG","/assets/images/header/2.JPG","/assets/images/header/3.JPG","/assets/images/header/4.JPG","/assets/images/header/5.JPG","/assets/images/header/6.JPG","/assets/images/header/7.JPG","/assets/images/header/8.JPG","/assets/images/header/9.JPG","/assets/images/header/10.JPG","/assets/images/header/11.JPG","/assets/images/header/12.JPG","/assets/images/header/13.JPG",]
var headerForBackground = document.getElementById("ucf-main-header-bg");
$(document).ready(function(){
    headerForBackground.style.backgroundImage = "url(" + directory_uri.headerimg_directory_uri + headerImages[headerRandNum] + ")";
});