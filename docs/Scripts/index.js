$(document).ready(function () {
  $(".clothing-top").on("click", function () {
    var imageName = $(this).attr("src").toString();
    $("#avatar-top").attr("src", imageName);
  });

  $(".clothing-bottom").on("click", function () {
    var imageName = $(this).attr("src").toString();
    $("#avatar-bottom").attr("src", imageName);
  });

  $(".clothing-shoes").on("click", function () {
    var imageName = $(this).attr("src").toString();
    $("#avatar-shoes").attr("src", imageName);
  });

  $("#randomize").click(function () {
    var randomLow = getRandomInt(1, 10);
    var randomMed = getRandomInt(10, 19);
    var randomHigh = getRandomInt(19, 22);

    var randomTop = "Images/IMG_" + randomLow.toString() + ".PNG";
    var randomBottom = "Images/IMG_" + randomMed.toString() + ".PNG";
    var randomShoes = "Images/IMG_" + randomHigh.toString() + ".PNG";

    $("#avatar-top").attr("src", randomTop);
    $("#avatar-bottom").attr("src", randomBottom);
    $("#avatar-shoes").attr("src", randomShoes);
  });

  function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min) + min); //The maximum is exclusive and the minimum is inclusive
  }

  $("#save-outfit").on("click", function () {
    var chosenTop = $("#avatar-top").attr("src").toString();
    var chosenBottom = $("#avatar-bottom").attr("src").toString();
    var chosenShoes = $("#avatar-shoes").attr("src").toString();

    localStorage.setItem("top", chosenTop);
    localStorage.setItem("bottom", chosenBottom);
    localStorage.setItem("shoes", chosenShoes);
  });

  $("#load-outfit").click(function () {
    // Retrieve
    loadTop = localStorage.getItem("top");
    loadBottom = localStorage.getItem("bottom");
    loadShoes = localStorage.getItem("shoes");

    $("#avatar-top").attr("src", loadTop);
    $("#avatar-bottom").attr("src", loadBottom);
    $("#avatar-shoes").attr("src", loadShoes);
  });
});
