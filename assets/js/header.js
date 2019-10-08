var headerRandNum = Math.floor(Math.random() * 12);
var headerImages = ["/assets/images/1.JPG","/assets/images/2.JPG","/assets/images/3.JPG","/assets/images/4.JPG","/assets/images/5.JPG","/assets/images/6.JPG","/assets/images/7.JPG","/assets/images/8.JPG","/assets/images/9.JPG","/assets/images/10.JPG","/assets/images/11.JPG","/assets/images/12.JPG","/assets/images/13.JPG",]
var headerForBackground = document.getElementById("ucf-main-header-bg");
$(document).ready(function(){
    headerForBackground.style.backgroundImage = "url(" + directory_uri.headerimg_directory_uri + headerImages[headerRandNum] + ")";
});