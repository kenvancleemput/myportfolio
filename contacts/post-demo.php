<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../stylesheets/contactstyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post resultaat</title>
</head>
<body>
  <h1>Je post data</h1>
  <p>Normaal sla je die op in een databank of verstuur je ze in een e-mail, maar als demo ben ik gewoon een echo.</p>
<pre>
<?php
echo
'name: ' . htmlspecialchars($_POST["name"]) . "\n" .
'mail: ' . htmlspecialchars($_POST["mail"]) . "\n" .
'msg: ' . htmlspecialchars($_POST["msg"]);
?>
</pre>
</body>
</html>
