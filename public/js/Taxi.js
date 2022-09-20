//import functions 
document.write("<script src='js/functions.js'></script>");

function show(s) {
  var add = document.getElementById(s);
  add.style.display="inherit";  
}

//office for the map
function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: {lat: 35.543224524478354, lng: 35.795742341449795}
            });

            
         var minoffice=( function () {

            	function minoffice(lat,lng,type,name) {
                    this.lat=lat;
                    this.lng=lng;
                    this.type=type;
                    this.name=name;
                    this.beachMarker=null;
            	}
                minoffice.prototype.addoff = function () {
                    var image1 ='http://maps.google.com/mapfiles/kml/paddle/T.png';
                    var image2 ='http://maps.google.com/mapfiles/kml/paddle/blu-blank.png';
                  if (this.type==1) {
                     this.beachMarker = new google.maps.Marker({
                position: {lat: this.lat, lng: this.lng},
                map: map,
                icon:image1
                      
                 });
                }
                 if (this.type==2) {
                     this.beachMarker = new google.maps.Marker({
                position: {lat: this.lat, lng: this.lng},
                map: map,
                icon:image2
                      
                 });
                }
            };

            minoffice.prototype.del= function() {
              delete this;
            };

            minoffice.prototype.edname = function(lat,lng,name) {
              var lt=document.getElementById();
              var lg=document.getElementById();
              var na=document.getElementById();
              if (lat!=null) {
                this.lat=lat;
              }
               if (lng!=null) {
                this.lng=lng;
              }
               if (name!=null) {
                this.name=name;
              }

            };

            return minoffice;
        }());

            var image1 = new minoffice(35.525280,35.796918,1,"asthar");
            image1.del();
            image1.addoff();
            image1.beachMarker.addListener('click',function() {
               var r=confirm("Confirm request from "+image1.name+" office");
               if (r==true) {
               var s=document.getElementById('officeName').value= "ashtar";
             }
            });   
            var image2 = new minoffice(35.542223,35.798581,1,"phonix");
            image2.addoff();
            image2.beachMarker.addListener('click',function() {
               var r=confirm("Confirm request from "+image2.name+" office");
               if (r==true) {
               var s=document.getElementById('officeName').value= "phonix";
             }
            });
            var image3 = new minoffice(35.542348,35.776943,1,"alsaada");
            image3.addoff();
            image3.beachMarker.addListener('click',function() {
               var r=confirm("Confirm request from "+image3.name+" office");
               if (r==true) {
               var s=document.getElementById('officeName').value= "alsaada";
             }
            });
            var image4 = new minoffice(35.522035,35.779163,1,"alwasl");
            image4.addoff();
            image4.beachMarker.addListener('click',function() {
               var r=confirm("Confirm request from "+image4.name+" office");
               if (r==true) {
               var s=document.getElementById('officeName').value= "alwasl";
             }
            });
            var image5 = new minoffice(35.513841,35.774637,1,"abo abdo");
            image5.addoff();
            image5.beachMarker.addListener('click',function() {
               var r=confirm("Confirm request from "+image5.name+" office");
               if (r==true) {
               var s=document.getElementById('officeName').value= "abo abdo ";
             }
            });
        
        }   
//end

