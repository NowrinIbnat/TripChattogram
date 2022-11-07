
function getAllHotel() {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("hotel").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "../Controller/getAllHotel.php?", true);
  xmlhttp.send();
  return;
}



function getHotel(str) {


  if (str.length == 0) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("hotel").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getAllHotel.php?", true);
    xmlhttp.send();
    return;
  } else {

    document.getElementById("hotel").innerHTML = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("hotel").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getHotel.php?q=" + str, true);
    xmlhttp.send();
  }
}





function getAllRestaurant() {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("Restaurant").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "../Controller/getAllRestaurant.php?", true);
  xmlhttp.send();
  return;
}


function getRestaurant(str) {


  if (str.length == 0) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("Restaurant").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getAllRestaurant.php?", true);
    xmlhttp.send();
    return;
  } else {

    document.getElementById("Restaurant").innerHTML = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("Restaurant").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getRestaurant.php?q=" + str, true);
    xmlhttp.send();
  }
}





function getAllSpot() {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("Spot").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "../Controller/getAllSpot.php?", true);
  xmlhttp.send();
  return;
}


function getSpot(str) {


  if (str.length == 0) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("Spot").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getAllSpot.php?", true);
    xmlhttp.send();
    return;
  } else {

    document.getElementById("Spot").innerHTML = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("Spot").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getSpot.php?q=" + str, true);
    xmlhttp.send();
  }
}



function getAllUserDel() {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("User").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "../controller/getAllUserDel.php?", true);
  xmlhttp.send();
  return;
}


function deleteUser(str) {

  var result = confirm("Want to delete?");
  if (result) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("User").innerHTML = this.responseText;
        document.getElementById("search").value = ""; 
        getAllUserDel();
      }
    };
    xmlhttp.open("GET", "../controller/deleteUser.php?q=" + str, true);
    xmlhttp.send();
  }

}



function getUserDel(str) {


  if (str.length == 0) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("User").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getAllUserDel.php?", true);
    xmlhttp.send();
    return;
  } else {

    document.getElementById("User").innerHTML = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("User").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getUserDel.php?q=" + str, true);
    xmlhttp.send();
  }
}






function getAllAdminDel() {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("Admin").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "../controller/getAllAdminDel.php?", true);
  xmlhttp.send();
  return;
}


function deleteAdmin(str) {

  


  var result = confirm("Want to delete?");
  if (result) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("Admin").innerHTML = this.responseText;
        document.getElementById("search").value = ""; 
        getAllAdminDel();
      }
    };
    xmlhttp.open("GET", "../controller/deleteAdmin.php?q=" + str, true);
    xmlhttp.send();
  }

}



function getAdminDel(str) {


  if (str.length == 0) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("Admin").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getAllAdminDel.php?", true);
    xmlhttp.send();
    return;
  } else {

    document.getElementById("Admin").innerHTML = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("Admin").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getAdminDel.php?q=" + str, true);
    xmlhttp.send();
  }
}


//hotel  del

function getAllHotelDel() {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("HotelDel").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "../controller/getAllHotelDel.php?", true);
  xmlhttp.send();
  return;
}


function deleteHotel(str) {

  


  var result = confirm("Want to delete?");
  if (result) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("HotelDel").innerHTML = this.responseText;
        document.getElementById("search").value = ""; 
        getAllHotelDel();
      }
    };
    xmlhttp.open("GET", "../controller/deleteHotel.php?q=" + str, true);
    xmlhttp.send();
  }

}



function getHotelDel(str) {


  if (str.length == 0) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("HotelDel").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getAllHotelDel.php?", true);
    xmlhttp.send();
    return;
  } else {

    document.getElementById("HotelDel").innerHTML = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("HotelDel").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getHotelDel.php?q=" + str, true);
    xmlhttp.send();
  }
}



//RestaurantDel

function getAllRestaurantDel() {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("RestaurantDel").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "../controller/getAllRestaurantDel.php?", true);
  xmlhttp.send();
  return;
}


function deleteRestaurant(str) {

  


  var result = confirm("Want to delete?");
  if (result) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("RestaurantDel").innerHTML = this.responseText;
        document.getElementById("search").value = ""; 
        getAllRestaurantDel();
      }
    };
    xmlhttp.open("GET", "../controller/deleteRestaurant.php?q=" + str, true);
    xmlhttp.send();
  }

}



function getRestaurantDel(str) {


  if (str.length == 0) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("RestaurantDel").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getAllRestaurantDel.php?", true);
    xmlhttp.send();
    return;
  } else {

    document.getElementById("RestaurantDel").innerHTML = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("RestaurantDel").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getRestaurantDel.php?q=" + str, true);
    xmlhttp.send();
  }
}




//SpotDel

function getAllSpotDel() {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("SpotDel").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "../controller/getAllSpotDel.php?", true);
  xmlhttp.send();
  return;
}


function deleteSpot(str) {

  


  var result = confirm("Want to delete?");
  if (result) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("SpotDel").innerHTML = this.responseText;
        document.getElementById("search").value = ""; 
        getAllSpotDel();
      }
    };
    xmlhttp.open("GET", "../controller/deleteSpot.php?q=" + str, true);
    xmlhttp.send();
  }

}



function getSpotDel(str) {


  if (str.length == 0) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("SpotDel").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getAllSpotDel.php?", true);
    xmlhttp.send();
    return;
  } else {

    document.getElementById("SpotDel").innerHTML = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("SpotDel").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getSpotDel.php?q=" + str, true);
    xmlhttp.send();
  }
}


//Hospital


function getAllHospital() {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("Hospital").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "../Controller/getAllHospital.php?", true);
  xmlhttp.send();
  return;
}



function getHospital(str) {


  if (str.length == 0) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("Hospital").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getAllHospital.php?", true);
    xmlhttp.send();
    return;
  } else {

    document.getElementById("Hospital").innerHTML = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("Hospital").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../controller/getHospital.php?q=" + str, true);
    xmlhttp.send();
  }
}


