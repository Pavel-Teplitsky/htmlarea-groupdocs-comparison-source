/////////////////////////////////// GROUPDOCS PLUGIN /////////////////////////////////////

// 1. Make sure that this line exists: 
//			<script type="text/javascript">_editor_url = "../";_editor_lang = "en";<script>

// 2. and <script type="text/javascript" src="../htmlarea.js"><script>

// 3. Make sure that pathes are correct

//////////////////////////////////////////////////////////////////////////////////////////

var editor = null;


function initEditor() {
	var tgs = document.getElementsByTagName('textarea');
	var txtarea = tgs[0];// this is first textarea element and [1] - second
	  editor = new HTMLArea(txtarea.id);
	  var cfg = editor.config;

	  cfg.registerButton({
		id        : "groupdocs_comparison",
		tooltip   : "GroupDocs_comparison",
		image     : "../images/groupdocs.png",// correct if needed
		textMode  : false,
		action    : function(editor) {
					  insertHTML();
					}
	  });

	  cfg.toolbar.push(["groupdocs_comparison"]); 
	  editor.generate();
}

function insertHTML() {
	var pf = document.getElementById( 'pForm' );
	pf.style.display = 'block';
}

function getPdata( arg ) {
	var f = document.getElementById( 'pForm' );
	if ( 'cancel' == arg ) {
		f.style.display = 'none'; // hide form
		return; // exit immediately
	} else {
		f.style.display = 'none'; // hide form
		var guid = f.groupdocs_file_id.value;
        var embedId = f.embed_id.value;
		var w = f.width.value;
		var h = f.height.value;
		var iframe = '<iframe src="https://apps.groupdocs.com/document-comparison/embed/' + embedId + '/' + guid + '?&referer=htmlarea/1.0" frameborder="0" width="'+w+'" height="'+h+'"></iframe>';
		editor.insertHTML(iframe);
	}
}
	var frm = '<form id="pForm" style="position:absolute;top:40%;left:40%;display:none;border:2px solid blue;padding:8px;background-color:gray;">'+
				'Embed ID: <input type="text" name="embed_id" /><br><br>'+
                'File ID: <input type="text" name="groupdocs_file_id" /><br><br>'+
				'Width: <input type="text" name="width" /><br><br>'+
				'Height: <input type="text" name="height" /><br><br>'+
				'<input type="button" value="OK" onclick="getPdata()" />'+
				'<input type="button" value="cancel" onclick="getPdata( this.value )" />'+
                '<a target="blank" href="http://groupdocs.com/docs/display/gendoc/FAQs">See our FAQ</a> to learn how to use Comparison.'+
			'</form>';

setTimeout(function(){
				var oDiv=document.createElement('DIV');
				oDiv.id = 'oDiv';
				document.body.appendChild(oDiv);
				var oDiv = document.getElementById('oDiv');
				oDiv.innerHTML=frm;
			}, 500);

HTMLArea.onload = initEditor;
