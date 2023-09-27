<button type="button" onclick="showPopup()">Show Popup</button>
<script>
function showPopup() {
  // Get the second page's URL
  const popupUrl = 'second_page.php';

  // Create a new popup window
  const popupWindow = window.open(popupUrl, 'popupWindow', 'width=600,height=400');

  // Center the popup window
  popupWindow.moveTo(screen.width / 2 - 300, screen.height / 2 - 200);
}
</script>