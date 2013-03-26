<html>
<head>
<title>Example of HTMLArea 3.0</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Configure the path to the editor.  We make it relative now, so that the
    example ZIP file will work anywhere, but please NOTE THAT it's better to
    have it an absolute path, such as '/htmlarea/'. -->
<script type="text/javascript">
  _editor_lang = "en";
  _editor_url = "/";
</script>
<!-- load the main HTMLArea files -->
<?php ?>
<script type="text/javascript" src="htmlarea.js"></script>

<style type="text/css">
html, body {
  font-family: Verdana,sans-serif;
  background-color: #fea;
  color: #000;
}
a:link, a:visited { color: #00f; }
a:hover { color: #048; }
a:active { color: #f00; }

textarea { background-color: #fff; border: 1px solid 00f; }
</style>

<script type="text/javascript">
// load the plugin files
HTMLArea.loadPlugin("TableOperations");

var editor = null;
function initEditor() {
  // create an editor for the "ta" textbox
  editor = new HTMLArea("ta");

  // register the TableOperations plugin with our editor
  editor.registerPlugin(TableOperations);

  editor.generate();
  return false;
}

function insertHTML() {
  var html = prompt("Enter some HTML code here");
  if (html) {
    editor.insertHTML(html);
  }
}
function highlight() {
  editor.surroundHTML('<span style="background-color: yellow">', '</span>');
}
</script>

</head>

<!-- use <body onload="HTMLArea.replaceAll()" if you don't care about
     customizing the editor.  It's the easiest way! :) -->
<body onload="initEditor()">

<h1>HTMLArea 3.0</h1>

<p>A replacement for <code>TEXTAREA</code> elements.  &copy; <a
href="http://interactivetools.com">InteractiveTools.com</a>, 2003-2004.</p>

<p>Page that demonstrates the additional features of the
<tt>TableOperations</tt> plugin (sponsored by <a
href="http://www.bloki.com">Zapatec Inc.</a>).</p>

<form action="test.cgi" method="post" id="edit" name="edit">

<textarea id="ta" name="ta" style="width:100%" rows="24" cols="80">

<h1>Plugin: <tt>TableOperations</tt></h1>

<p>This page exemplifies the table operations toolbar, provided by the
TableOperations plugin.</p>

<p>Following there is a table.</p>

<table border="1" style="border: 2px solid rgb(255, 0, 0); width: 80%; background-image: none; border-collapse: collapse; color: rgb(153, 102, 0); background-color: rgb(255, 255, 51);" align="center" cellspacing="2" cellpadding="1" summary="">
  <caption>This <span style="font-weight: bold;">is</span> a table</caption>
  <tbody>
  <tr style="border-style: none; background-image: none; background-color: rgb(255, 255, 153);" char="." align="left" valign="middle"> <td>1.1</td> <td>1.2</td> <td>1.3</td> <td>1.4</td> </tr>
  <tr> <td>2.1</td> <td style="border: 1px solid rgb(51, 51, 255); background-image: none; background-color: rgb(102, 255, 255); color: rgb(0, 0, 51);" char="." align="left" valign="middle">2.2</td> <td>2.3</td> <td>2.4</td> </tr>
  <tr> <td>3.1</td> <td>3.2</td> <td style="border: 2px dashed rgb(51, 204, 102); background-image: none; background-color: rgb(102, 255, 153); color: rgb(0, 51, 0);" char="." align="left" valign="middle">3.3</td> <td>3.4</td> </tr>
  <tr> <td style="background-color: rgb(255, 204, 51);">4.1</td> <td style="background-color: rgb(255, 204, 51);">4.2</td> <td style="background-color: rgb(255, 204, 51);">4.3</td> <td style="background-color: rgb(255, 204, 51);">4.4</td> </tr>
  </tbody>
</table>

<p>Text after the table</p>

</textarea>

<p />

<input type="submit" name="ok" value="  submit  " />
<input type="button" name="ins" value="  insert html  " onclick="return insertHTML();" />
<input type="button" name="hil" value="  highlight text  " onclick="return highlight();" />

<a href="javascript:mySubmit()">submit</a>

<script type="text/javascript">
function mySubmit() {
// document.edit.save.value = "yes";
document.edit.onsubmit(); // workaround browser bugs.
document.edit.submit();
};
</script>

</form>

</body>
</html>