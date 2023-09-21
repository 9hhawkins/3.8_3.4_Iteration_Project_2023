let slideIndex = [1,1,1];
let slideId = ["mySlides1", "mySlides2", "mySlides3"];

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  let i;
  let x = document.getElementsByClassName(slideId[no]);
  console.log(x);
  if (no < 0 || no >= slideIndex.length) {
    console.error("Invalid index for slideId: " + no);
    return;
  }

  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
	 x[i].style.opacity = "0";
  }
  x[slideIndex[no]-1].style.display = "block";
  x[slideIndex[no]-1].style.opacity = "1";
}

showSlides(1, 0);
showSlides(1, 1);
showSlides(1, 2);
