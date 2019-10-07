var headerRandNum = Math.floor(Math.random() * 12);
var headerImages = ["wp-content/themes/aatechtheme/assets/images/1.JPG","wp-content/themes/aatechtheme/assets/images/2.JPG","wp-content/themes/aatechtheme/assets/images/3.JPG","wp-content/themes/aatechtheme/assets/images/4.JPG","wp-content/themes/aatechtheme/assets/images/5.JPG","wp-content/themes/aatechtheme/assets/images/6.JPG","wp-content/themes/aatechtheme/assets/images/7.JPG","wp-content/themes/aatechtheme/assets/images/8.JPG","wp-content/themes/aatechtheme/assets/images/9.JPG","wp-content/themes/aatechtheme/assets/images/10.JPG","wp-content/themes/aatechtheme/assets/images/11.JPG","wp-content/themes/aatechtheme/assets/images/12.JPG","wp-content/themes/aatechtheme/assets/images/13.JPG",]
var headerForBackground = document.getElementById("ucf-main-header-bg");
$(document).ready(function(){
    headerForBackground.style.backgroundImage = "url(" + headerImages[headerRandNum] + ")";
});