var citiesGrid = document.getElementById("cities-grid");

var requestURL = 'https://byui-cit230.github.io/weather/data/towndata.json';
var request = new XMLHttpRequest();
request.open('GET', requestURL);
request.responseType = 'json';
request.send();
request.onload = function() {
  var townsJson = request.response;
  populateCitiesGrid(townsJson.towns);
}

function populateCitiesGrid(townsList) {
  for (t=0; t<townsList.length; t++) {
    if (townsList[t].name == "Preston" || townsList[t].name == "Soda Springs" || townsList[t].name == "Fish Haven") {
      var cityName = townsList[t].name;
      var cityMotto = townsList[t].motto;
      var cityFounded = townsList[t].yearFounded;
      var cityPopulation = townsList[t].currentPopulation;
      var cityRainfall = townsList[t].averageRainfall;
      
      var cityCard = document.createElement("div");
      cityCard.className = "city-card";
      cityCard.innerHTML = '<h3>' + cityName + '</h3>'
        + '<div class="city-motto">' + cityMotto + '</div>'
        + '<p>Founded: ' + cityFounded + '</p>'
        + '<p>Population: ' + cityPopulation + '</p>'
        + '<p>Annual Rainfall: ' + cityRainfall + '"</p>'
        + '<img src="images/city-' + cityName.toLowerCase().replace(' ', '-') + '.jpg" alt="' + cityName + '">';
      citiesGrid.appendChild(cityCard);
    }
  }
}