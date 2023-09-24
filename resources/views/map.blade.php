<html>
<head>
  <title>Place Searches</title>
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container" style="justify-content: center">
  <div class="restaurant-search">
    <div id="locationField">
      <input id="autocomplete" placeholder="Enter a location" type="text" value="Bang sue"/>
      <i class="fa-solid fa-magnifying-glass"></i>
    </div>
  </div>

  <div id="map"></div>

  <div id="listing">
    <table id="resultsTable">
      <tbody id="results"></tbody>
    </table>
  </div>

  <div style="display: none">
    <div id="info-content">
      <table>
        <tr id="iw-url-row" class="iw_table_row">
          <td id="iw-icon" class="iw_table_icon"></td>
          <td id="iw-url"></td>
        </tr>
        <tr id="iw-address-row" class="iw_table_row">
          <td class="iw_attribute_name">Address:</td>
          <td id="iw-address"></td>
        </tr>
        <tr id="iw-phone-row" class="iw_table_row">
          <td class="iw_attribute_name">Telephone:</td>
          <td id="iw-phone"></td>
        </tr>
        <tr id="iw-rating-row" class="iw_table_row">
          <td class="iw_attribute_name">Rating:</td>
          <td id="iw-rating"></td>
        </tr>
        <tr id="iw-website-row" class="iw_table_row">
          <td class="iw_attribute_name">Website:</td>
          <td id="iw-website"></td>
        </tr>
      </table>
    </div>
  </div>
</div>



<!--
  The defer attribute causes the callback to execute after the full HTML
  document has been parsed. For non-blocking uses, avoiding race conditions,
  and consistent behavior across browsers, consider loading using Promises.
  See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
  for more information.
  -->
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCRomdTorifWxFpkw8ugK4a7xaZ0ZHGl0&callback=initMap&libraries=places"
        defer
></script>
</body>
</html>