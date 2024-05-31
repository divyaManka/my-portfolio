<?php include 'header.php'?>


<!-- head -->
<div class="container">
    <div class="main-head">
    <h1>Education</h1>
    </div>
</div>
<!-- head end -->

<!-- education start -->
<div class="container">
<div class="my-timeline">

<div class="my-container left-container"  data-aos="zoom-in-right"  data-aos-easing="linear" data-aos-duration="400">
  
  <div class="text-box" >
    <h2>Master in Computer Application</h2>
    <h5>JECRC University, Jaipur</h5>
    <h5>2022-2024</h5>
  </div>
</div>
<div class="my-container right-container"  data-aos="zoom-in-left"  data-aos-easing="linear" data-aos-duration="400">
 
<div class="text-box">
    <h2>Bachelor in Computer Application</h2>
    <h5>Subodh College, Jaipur</h5>
    <h5>2019-2022</h5>
  </div>
</div>
<div class="my-container left-container"  data-aos="zoom-in-right"  data-aos-easing="linear" data-aos-duration="400">
  
<div class="text-box">
    <h2>Senior Secondary School (12th)</h2>
    <h5>Alpha Internation School, Jaipur</h5>
    <h5>2018-2019</h5>
  </div>
</div>
<div class="my-container right-container"  data-aos="zoom-in-left"  data-aos-easing="linear" data-aos-duration="400">
  
<div class="text-box">
    <h2>Secondary (10th)</h2>
    <h5>L.B.S School, Jaipur</h5>
    <h5>2016-2017</h5>
  </div>
</div>


<div class="timeline-line"></div>
<img class="timeline-image" src="http://flagcorp.brandedbybrandemic.com/wp-content/uploads/2023/10/Frame-39652-1.svg" alt="">
</div>
</div>
<!-- education end -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const timelineLine = document.querySelector(".timeline-line");
    const timelineImage = document.querySelector(".timeline-image");
  
    const maxTimelineHeight =
      (document.querySelectorAll(".my-container").length - 1) * 100;
  
    window.addEventListener("scroll", () => {
      const scrollPercentage = (window.scrollY / maxTimelineHeight) * 65; //Adjust the speed as needed
  
      const adjustedPercentage = Math.min(100, scrollPercentage);
      timelineLine.style.height = `${adjustedPercentage}%`;
      timelineImage.style.top = `${adjustedPercentage}%`;
    });
  });
</script>

<?php include 'footer.php'?>