/**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
// [START maps_map_simple]
let map;


setInterval(function initMap() {  

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       const obj = JSON.parse(this.responseText);
      carte = obj.id_carte;
      document.getElementById("map").innerHTML(carte);
      

      }
    }
    xmlhttp.open("GET", "get_gps.php", true);
    xmlhttp.send();
},1000)
