var map = L.map('map').setView([-0.0353948,109.2615099], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
	attribution: '&copy; <a href="https://rachmatwahid.com">rachmatwahid</a>',
	maxZoom: 18,
	id: 'mapbox/streets-v11',
	tileSize: 512,
	zoomOffset: -1,
	accessToken: 'pk.eyJ1IjoicmFjaG1hdHdhaGlkIiwiYSI6ImNraGRmcW9wcTA2NmkycGx5eHA2c3RoY2kifQ.ZOvH16OXRa2hjAxHeM2NHA'
}).addTo(map);

var photos = [
{
  "lat": -0.031532,
  "lng": 109.337642,
  "thumbnail": "https://beeimg.com/images/h26180623163.jpg",
  "url": "https://beeimg.com/images/h26180623163.jpg",
  "name": "Dog" 
},
{
  "lat": -0.030637,
  "lng": 109.339583,
  "thumbnail": "https://cdn.theatlantic.com/thumbor/RPfR1holC_HwCNZuybw8vfbwXx8=/558x0:2259x1700/500x500/media/img/mt/2017/06/shutterstock_319985324/original.jpg",
  "url": "https://cdn.theatlantic.com/thumbor/RPfR1holC_HwCNZuybw8vfbwXx8=/558x0:2259x1700/500x500/media/img/mt/2017/06/shutterstock_319985324/original.jpg",
  "name": "Cat"
},
{
  "lat": -0.030485,
  "lng": 109.338111,
  "thumbnail": "https://cdn.website.thryv.com/ec54f2f75b7449e1b028c2bf609d3226/dms3rep/multi/903.jpg",
  "url": "https://cdn.website.thryv.com/ec54f2f75b7449e1b028c2bf609d3226/dms3rep/multi/903.jpg",
  "name": "Cat"
},]

var photoLayer = L.photo.cluster().on('click', function (evt) {
  var photo = evt.layer.photo,
  template = '<img src="{url}" width="300" height="300" /></a><p>{name}</p>';

  if (photo.video && (!!document.createElement('video').canPlayType('video/mp4; codecs=avc1.42E01E,mp4a.40.2'))) {
    template = '<video autoplay controls poster="{url}" width="300" height="300"><source src="{video}" type="video/mp4"/></video>';
  }; 

  evt.layer.bindPopup(L.Util.template(template, photo), {
    className: 'leaflet-popup-photo',
    minWidth: 300
  }).openPopup();
});

photoLayer.add(photos).addTo(map);
map.fitBounds(photoLayer.getBounds());
