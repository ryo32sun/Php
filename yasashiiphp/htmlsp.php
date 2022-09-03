<form method="POST" action="htmlsp.php">
  <input type="text" name="test">
  <input type="submit">
</form>
<?php
  echo htmlspecialchars($_POST['test'], ENT_QUOTES, 'UTF-8');
?>