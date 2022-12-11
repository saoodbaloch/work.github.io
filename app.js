const textarea = document.getElementById("textarea");


function f1(e){
    let value = e.value;
    textarea.style.fontSize = value + "px";
}

function f2(e){
    if (textarea.style.fontWeight == "bold") 
    {
        textarea.style.fontWeight= "normal";
        e.classlist.remove("active");
    }
    else{
        textarea.style.fontWeight = "bold";
        e.classlist.remove("active");
    }
}

function f3(e){
    if (textarea.style.fontStyle == "italic") {
        textarea.style.fontStyle = "normal";
    }
    else{
        textarea.style.fontStyle = "italic";
        e.classlist.add("active");
    }
}

function f4(e){
    if (textarea.style.textDecoration == "underline") {
        textarea.style.textDecoration = "none";
    }
    else{
        textarea.style.textDecoration = "underline ";
        e.classlist.add("active");
    }
}
function f5(e){
   textarea.style.textAlign = "left";
     
    }
    function f6(e){
        textarea.style.textAlign = "center";
          
         }
         function f7(e){
            textarea.style.textAlign = "right";
              
             }

             function f8(e){
                if (textarea.style.textTransform == "uppercase")
                {
                    textarea.style.textTransform = "none";
                    e.classlist.remove("active");
                }
                else{
                    textarea.style.textTransform = "uppercase";
                    e.classlist.add("active");
                }
            }
            function f9(){
                textarea.style.fontweight = "normal";
                textarea.style.textAlign = "left";
                textarea.style.fontStyle = "normal";
                textarea.style.textTransform = "capitalize";
                textarea.value = "";
            }
            function f10(e){
                let value = e.value;
                textarea.style.color = value;

            }
            window.addEventListener("load"), ()=>{
                textarea.value = "";
            }
    
