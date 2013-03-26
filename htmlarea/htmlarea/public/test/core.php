<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-us" dir="ltr">
<head>
<title>HTMLArea</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
  _editor_url = "../";
  _editor_lang = "en";
</script>
<script type="text/javascript" src="../htmlarea.js"></script>

<script type="text/javascript" src="../groupdocs_comparison.js"></script>

</head>

<!-- use <body onload="HTMLArea.replaceAll()" if you don't care about
     customizing the editor.  It's the easiest way! :) -->
<body onload="HTMLArea.init();">

<h1>HTMLArea 3.0</h1>

<p>A replacement for <code>TEXTAREA</code> elements.  &copy; <a
href="http://interactivetools.com">InteractiveTools.com</a>, 2003-2004.</p>

<form action="test.cgi" method="post" id="edit" name="edit">

<textarea id="ta" name="ta" style="width:100%" rows="20" cols="80">
  &lt;p&gt;Here is some sample text: &lt;b&gt;bold&lt;/b&gt;, &lt;i&gt;italic&lt;/i&gt;, &lt;u&gt;underline&lt;/u&gt;. &lt;/p&gt;
  &lt;p align=center&gt;Different fonts, sizes and colors (all in bold):&lt;/p&gt;
  &lt;p&gt;&lt;b&gt;
   &lt;font face="arial"           size="7" color="#000066"&gt;arial&lt;/font&gt;,
   &lt;font face="courier new"     size="6" color="#006600"&gt;courier new&lt;/font&gt;,
   &lt;font face="georgia"         size="5" color="#006666"&gt;georgia&lt;/font&gt;,
   &lt;font face="tahoma"          size="4" color="#660000"&gt;tahoma&lt;/font&gt;,
   &lt;font face="times new roman" size="3" color="#660066"&gt;times new roman&lt;/font&gt;,
   &lt;font face="verdana"         size="2" color="#666600"&gt;verdana&lt;/font&gt;,
   &lt;font face="tahoma"          size="1" color="#666666"&gt;tahoma&lt;/font&gt;
  &lt;/b&gt;&lt;/p&gt;
  &lt;p&gt;Click on &lt;a href="http://www.interactivetools.com/"&gt;this link&lt;/a&gt; and then on the link button to the details ... OR ... select some text and click link to create a &lt;b&gt;new&lt;/b&gt; link.&lt;/p&gt;
</textarea>

<p />

<input type="button" name="ok" value="  submit  " onclick="placeGDocsInside();" />
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


