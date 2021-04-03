<?php
    if(!isset($_COOKIE['visitorId']))
    {
      ?>
<script>
  function initFingerprintJS() {
    FingerprintJS.load().then(fp => {
      // The FingerprintJS agent is ready.
      // Get a visitor identifier when you'd like to.
      fp.get().then(result => {
        // This is the visitor identifier:
        const visitorId = result.visitorId;
if(navigator.cookieEnabled) {
document.cookie = "visitorId="+visitorId+"; expires=Thu, 31 Dec 2035 12:00:00 UTC; path=/";
window.location = window.location;
}
else {
  alert("cookies are disabled, show an error message to the user, or follow other alternative");
}
      });
    });
  }
</script>
<script
  async
  src="//cdn.jsdelivr.net/npm/@fingerprintjs/fingerprintjs@3/dist/fp.min.js"
  onload="initFingerprintJS()"
></script>
<?php
die();
    }
        ?>