<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bukiety kwiatów</title>
  <link rel="stylesheet" href="whitebouquet.css">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <script src="whitebouquet.js" async></script>
</head>

<body>
  <header>
    <div class="navbar">
      <strong>
        <div id="no-copy" class="logo">
          gam3d.pl
        </div>
      </strong>
    </div>

    <div class="navbar-container">
      <div class="topnav">

        <a href="">dom</a>
        <a href="kontakt.html">kontakt</a>
        <a href="o.html">o</a>
      </div>

      <!--CART-->
      <div id="cart-info" class="nav-info cart-info">
        <span class="cart-info__icon"><i class="fas fa-shopping-cart"></i></span>
        <p><span id="item-count">0 </span> przedmiotów
        </p>
      </div>

      <section class="cart" id="cart">
        <h1 class="section-header">karta</h1>
        <div class="cart-row">
          <span class="cart-item cart-header cart-column">przedmiot</span>
          <span class="cart-price cart-header cart-column">cena</span>
          <span class="cart-quantity cart-header cart-column">ilość</span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
          <strong class="cart-total-title">suma</strong>
          <span class="cart-total-price">0zł</span>
        </div>

        <button class="btn btn-primary btn-purchase" type="button">zakup</button>
      </section>

    </div>
  </header>

  <div class="main-container">
    <P class="title">bukiety kwiatów</P>
  </div>


  <div id="filterButtons">
    <button class="btn active" onclick="filterSelection('all')">wszystko</button>
    <button class="btn" onclick="filterSelection('Roses')">róże</button>
    <button class="btn" onclick="filterSelection('Tulips')">tulipany</button>
    <button class="btn" onclick="filterSelection('Orchids')">storczyki</button>
  </div>


  <section class="container">
    <div class="products">

      <div class="product Roses">
        <img src="./roses.jpeg" class="product__image">
        <h5 class="product-title">wymarzona wiosna</h5>
        układ mieszanych róż
        <div class="shop-item-details">
          <h3 class="product__price">38zł</h3>
          <button class="btn btn--primary ADD_TO_CART">dodaj do karty</button>
        </div>


      </div>


      <div class="product Tulips">
        <img src="./tulips.jpg" class="product__image">
        <h5 class="product-title">piękny zachód słońca</h5>
        układ mieszanych tulipanów
        <div class="shop-item-details">
          <h3 class="product__price">48zł</h3>
          <button class="btn btn--primary ADD_TO_CART">dodaj do karty</button>
        </div>


      </div>

      <div class="product Orchids">
        <img src="./orchids.jpeg" class="product__image">
        <h5 class="product-title">śliczne storczyki</h5>
        układ mieszanych storczyków
        <div class="shop-item-details">
          <h3 class="product__price">53zł</h3>
          <button class="btn btn--primary ADD_TO_CART">dodaj do karty</button>
        </div>


      </div>
    </div>
  </section>


  <script>
    filterSelection('all')
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("product");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arrl, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("filterButtons");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>

</body>

</html>