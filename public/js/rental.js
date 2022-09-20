//cars slideshow
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
//end

//map
function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: {lat: 35.543224524478354, lng: 35.795742341449795}
            });

            
         var minoffice=( function ( ) {
            var i=1;

              function minoffice(lat,lng,type) {
                    this.lat=lat;
                    this.lng=lng;
                    this.type=type;
              }
                minoffice.prototype.addoff = function () {
                    var image1 ='http://maps.google.com/mapfiles/kml/paddle/T.png';
                    var image2 ='http://maps.google.com/mapfiles/kml/paddle/blu-blank.png';
                  if (this.type==1) {
                    i=i+1;
                     var beachMarker = new google.maps.Marker({
                position: {lat: this.lat, lng: this.lng},
                map: map,
                icon:image1
                      
                 });
                }
                 if (this.type==2) {
                     var beachMarker = new google.maps.Marker({
                position: {lat: this.lat, lng: this.lng},
                map: map,
                icon:image2
                      
                 });
                }
            };

            minoffice.prototype.conoff = function () {

                if (this.type==1) {
                var r=confirm("Confirm request from" +s+"office");
                }

            }

            return minoffice;
        }());

             var image6 = new minoffice(35.515415,35.787748,2);
            image6.addoff();
            var image7 = new minoffice(35.526125,35.813022,2);
            image7.addoff();
        
        }   
     