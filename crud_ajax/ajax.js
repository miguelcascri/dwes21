function show() {
  var country = $("#country").val();
  $.ajax({
    type: "POST",
    url: "result.php",
    data: { "country": country },

    success: function (response) {
      $("#results").html(response);
    }
  })
}

function saveCity(name, newName) {
  $.ajax({
    type: "POST",
    url: "ajax.php",
    data: {
      "query": "1",
      "name": name,
      "newName": newName
    },
    success: function (response) {
      // console.log(name, cc)
      alert("CIUDAD ACTUALIZADA");
    }
  })
}

function deleteCity(name) {
  $.ajax({
    type: "POST",
    url: "ajax.php",
    data: {
      "query": "2",
      "name": name
    },
    success: function (response) {
      // console.log(name, cc)
      alert("CIUDAD BORRADA");
      show();
    }
  })
}

function save(name, cc) {
  $.ajax({
    type: "POST",
    url: "ajax.php",
    data: {
      "query": "3",
      "name": name,
      "cc": cc
    },
    success: function (response) {
      // console.log(name, cc)
      alert("CIUDAD CREADA");
  show();
    }
  })
}

function copy(country) {
  $.ajax({
    type: "POST",
    url: "ajax.php",
    data: {
      "query": "4",
      "country": country
    },
    success: function (response) {
      // console.log(country)
      alert("TABLA CREADA");
    }
  })
}
