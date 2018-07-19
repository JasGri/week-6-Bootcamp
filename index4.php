<html>
<head>
<title>Text editor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href = "https://fonts.googleapis.com/css?family=Orbitron|Roboto" rel = "stylesheet">

</head>

<body>

<style type = "text/css">

html {
  background: #333333;
  font-family: Roboto, sans-serif;

}

.texteditor {
    padding: 10px;
    color: orange;
    background: linear-gradient(#cba789, #8b7458);
    border: 1px  #ffde00 solid;
    border-radius: 5px;
    width: 570px;
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.5);

}

.popupwindow {
    margin: 10px;
    color: #a20039;
    background: linear-gradient(#cba789, #8b7458);
    width: 400px;
    z-index: 10;

}

.textarea {
  background-color: white;
  color: black;
  margin: 10px;
  padding: 10px;
  border: 1px #a20039 solid;
  width: 500px;
  height: 300px;
  border-radius: 5px;
  text-align: left;

}

.btn {
  background: none;
  color: #ffde00;
  border: none;
  padding: 10px;
  border-right:  1px #ffde00 solid;
  cursor: pointer;
  box-shadow: 2px 0px rgba(0, 0, 0, 0.3);

}

.select {
  background:  #a20039;
  color: #ffde00;
  border: none;
  border-radius: 5px;
  padding: 10px;
  border-right:  1px #ffde00 solid;
  cursor: pointer;
  box-shadow: 2px 0px rgba(0, 0, 0, 0.3);

}

.btn2 {
  background: #a20039;
  color: #ffde00;
  border: none;
  border-radius: 5px;
  padding: 10px;
  cursor: pointer;

}

.drag{
  background: #a20039;
  border: 2px  #ffde00 solid;
  border-radius: 5px;
  position: absolute;
  padding: 5px 20px;
  margin: 10px;
  width: 400px;
  z-index: 9;
  box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.5);

}

.cancel {
  background: #a20039;
  color: #ffde00;
  border: none;
  border-radius: 5px;
  padding: 10px;
  cursor: pointer;

}

.cancel2 {
  background: #a20039;
  color: #ffde00;
  border: none;
  border-radius: 5px;
  padding: 10px;
  cursor: pointer;

}

.option {
  color: #ffde00;
  padding: 10px;
  cursor: pointer;

}

.container {
    background: #a20039;
    color: #ffde00;
    width: 492px;
    border:  1px #ffde00 solid;
    border-radius: 10px;
    margin: 10px;
    padding: 10px;

}

.close {
    color: #ffde00;
    float: right;
    font-size: 28px;
    font-weight: bold;

}


.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;

}


.close2 {
    color: #ffde00;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close2:hover,
.close2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>

<center><div class = "texteditor" method = "post" action = "submit.php" id = "rtf">
<center><div class = "container">
<input class = "btn" type = "button" value = "B" onclick = "bold()">
<input class = "btn" type = "button" value = "I" onclick = "italic()">
<input class = "btn" type = "button" value = "U" onclick = "underline()">
<button class = "btn2" id="file"><i class="fa fa-file-image-o"></i></button>
<select class = "select" onchange = "fontsize()">
<option  value="size" class = "option">Size</option>
<option value="12px"  class = "option">12px</option>
<option value="13px"  class = "option">13px</option>
<option value="14px"  class = "option">14px</option>
<option value="15px"  class = "option">15px</option>
<option value="16px"  class = "option">16px</option>
<option value="17px"  class = "option">17px</option>
</select>
<select class = "select">
<option value="color" >Color</option>
<option value="white" style="color:white;">White</option>
<option value="red" style="color:red;">Red</option>
<option value="green" style="color:green;">Green</option>
<option value="blue" style="color:blue;">Blue</option>
<option value="yellow" style="color:yellow;">Yellow</option>
</select>
<input class = "btn" type = "button" value = "Highlight" onclick = "highlight()">
<input class = "btn" type = "button" value = "Link" id="linkmenu">
<input class = "btn2" type = "button" value = "Unlink" onclick = "unlink()">
</div></center>
<br><br>
<center><div class="textarea" contenteditable="true"></div></center>
<br><br>
</div></center>

<center><div class = "drag" id= "drag">
  <span class = "close">&times;</span>
  <center><div class = "popupwindow" id= "dragheader">
    <h1>Link invoeren:</h1>
    URL:<input type="text" name="url" value=""><br><br>
    Doelwit: <select class = "select"><br><br>
      <option value="None">Geen</option>
      <option value="Window">Openen in ander scherm.</option>
    </select><br><br>
    <input type="button" class = "btn2" value="OK" onclick = "insertLink">
    <input type="button" class = "cancel" value="annuleren"><br><br>
  </div></center>
</div></center>

<center><div class = "drag" id= "drag2">
  <span class = "close2">&times;</span>
  <center><div class = "popupwindow" id= "drag2header">
    <h1>Bestand</h1>
    Bron:<input type="text" name=""><br><br>
    Afmetingen:<input type="text" name="url"style = "width: 50px;">
    x
    <input type="text" style = "width: 50px;"><input type = "checkbox">Relatief
    <h2>Embed:</h2>
    Plak hier uw embedcode:<br><br>
    <textarea name="name" rows="4" cols="20"></textarea><br><br>
    <input type="button" class = "btn2" value="OK" onclick = "insertLink">
    <input type="button" class = "cancel2" value="annuleren"><br><br>
  </div></center>
</div></center>





<script type="text/javascript">

window.highlight = function() {
    var selection = window.getSelection().getRangeAt(0);
    var selectedText = selection.extractContents();
    var span = document.createElement("span");
    span.style.backgroundColor = "yellow";
    span.appendChild(selectedText);
    span.onclick = function (ev) {
    this.parentNode.insertBefore(
        document.createTextNode(this.innerHTML),
        this
    );
    this.parentNode.removeChild(this);
    }
    selection.insertNode(span);
}

window.bold = function() {
    var selection = window.getSelection().getRangeAt(0);
    var selectedText = selection.extractContents();
    var bold = document.createElement("strong");
    bold.appendChild(selectedText);
    bold.onclick = function (ev) {
    this.parentNode.insertBefore(
        document.createTextNode(this.innerHTML),
        this
    );
    this.parentNode.removeChild(this);
    }
    selection.insertNode(bold);
}

window.italic = function() {
    var selection = window.getSelection().getRangeAt(0);
    var selectedText = selection.extractContents();
    var italic = document.createElement("i");
    italic.appendChild(selectedText);
    italic.onclick = function (ev) {
    this.parentNode.insertBefore(
        document.createTextNode(this.innerHTML),
        this
    );
    this.parentNode.removeChild(this);
    }
    selection.insertNode(italic);
}

window.underline = function() {
    var selection = window.getSelection().getRangeAt(0);
    var selectedText = selection.extractContents();
    var underline = document.createElement("u");
    underline.appendChild(selectedText);
    underline.onclick = function (ev) {
    this.parentNode.insertBefore(
        document.createTextNode(this.innerHTML),
        this
    );
    this.parentNode.removeChild(this);
    }
    selection.insertNode(underline);
}

// window.fontsize = function() {
//     var selection = window.getSelection().getRangeAt(0);
//     var selectedText = selection.extractContents();
//     var listValue = selectTag.options[selectTag.selectedIndex].text;
//     var fontsize = document.createElement();
//     fontsize.appendChild(selectedText);
//     fontsize.onchange = function (ev) {
//     this.parentNode.insertBefore(
//         document.createTextNode(this.innerHTML),
//         this
//     );
//     this.parentNode.removeChild(this);
//     }
//     selection.insertNode(fontsize);
// }

var modal = document.getElementById('drag');
var modal2 = document.getElementById('drag2');
var btn = document.getElementById("file");
var btn2 = document.getElementById("linkmenu");
var span = document.getElementsByClassName('close')[0];
var span2 = document.getElementsByClassName('cancel')[0];
var span3 = document.getElementsByClassName('close2')[0];
var span4 = document.getElementsByClassName('cancel2')[0];


            btn.onclick = function() {
                modal2.style.display = "none";
                modal.style.display = "block";
            }

            btn2.onclick = function() {
                modal.style.display = "none";
                modal2.style.display = "block";
            }

            span.onclick = function() {
                modal.style.display = "none";
            }
            span2.onclick = function() {
                modal.style.display = "none";
            }

            span3.onclick = function() {
                modal2.style.display = "none";
            }
            span4.onclick = function() {
                modal2.style.display = "none";
            }

//Make the DIV element draggagle:
dragElement(document.getElementById("drag"));
dragElement(document.getElementById("drag2"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  }
  else
  {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

    function dragMouseDown(e) {
      e = e || window.event;
      e.preventDefault();
      // get the mouse cursor position at startup:
      pos3 = e.clientX;
      pos4 = e.clientY;
      document.onmouseup = closeDragElement;
      // call a function whenever the cursor moves:
      document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
      e = e || window.event;
      e.preventDefault();
      // calculate the new cursor position:
      pos1 = pos3 - e.clientX;
      pos2 = pos4 - e.clientY;
      pos3 = e.clientX;
      pos4 = e.clientY;
      // set the element's new position:
      elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
      elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
      /* stop moving when mouse button is released:*/
      document.onmouseup = null;
      document.onmousemove = null;
    }
  }


</script>

</body>

</html>
