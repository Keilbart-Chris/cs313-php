function click(){
   //alert("Clicked!");
   console.log("Clicked");
}

function colorChange(){
   var textbox_id = "txtColor";
   var textbox = document.getElementById(textbox_id);
   
   var div_id = "meh";
   var div = document.getElementById(div_id);
   
   var color = textbox.value;
   div.style.backgroundColor = color;
}