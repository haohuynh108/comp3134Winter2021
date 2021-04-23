<html>
  <body>
    <h1>Reflected XSS</h1>
    <form>
      <input type="text" name="username"/>
      <input type="submit" name="Submit"/>
  </form>
  <div>
    <script>
    if (isset($_REQUEST['Submit']))
  {
      $input = isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
      alert( "Submit" . $input);
  }
  </script>
  </div>
  </body>
</html>
