/**
 * Get browser location by Geolocation API.
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/API/Geolocation_API
 */
function geoFindMe() {
  return new Promise(function (resolve, reject) {
    navigator.geolocation.getCurrentPosition(resolve, reject);
  });
}
