function cart(){
    var p=document.querySelector("#ded");
var div99=document.createElement("div");
div99.appendChild(p);

var div77=document.createElement("div")
var div66=document.createElement("div")
var div55=document.createElement("div")
var img1=document.createElement("img")
var img2=document.createElement("img")
img1.src="visa.png";
img2.src="paypal.png";
div77.appendChild(div66)
div66.appendChild(img1)
div77.appendChild(div55)
div55.appendChild(img2)
var radio1=document.createElement("input")
radio1.setAttribute("type","radio")
radio1.setAttribute("name","radio")
var radio2=document.createElement("input")
radio2.setAttribute("type","radio")
radio2.setAttribute("name","radio")

div66.appendChild(radio1)
div55.appendChild(radio2)
document.getElementById("content14").appendChild(div99)

div99.style.width="50%"
div99.style.height="500px"
div66.style.width="70%"

div55.style.width="70%"
img2.style.width="30%"
img1.style.width="40%"
div77.style.display="flex"


var t1=document.createElement("input")
t1.setAttribute("type","text")
t1.setAttribute("placeholder","Name")

var t2=document.createElement("input")
t2.setAttribute("type","number")
t2.setAttribute("placeholder","Card Number")

var t3=document.createElement("input")
t3.setAttribute("type","text")
t3.setAttribute("placeholder","valide date")

var t4=document.createElement("input")
t4.setAttribute("type","number")
t4.setAttribute("placeholder","CVV /CVC")

var b=document.createElement("br")
var b1=document.createElement("br")
t4.style.cssText="margin-left:50px;margin-top:-70px; width:250px;border:none;border:1px solid gray;height:40px;border-radius:5%;margin-left:10 0px;margin-top:30px;"
t3.style.cssText=";margin-top:-70px;width:250px;border:none;border:1px solid gray;height:40px;border-radius:5%;margin-left:10 0px;"
t2.style.cssText="margin-left:50px;margin-top:-70px;width:250px;border:none;border:1px solid gray;height:40px;border-radius:5%;margin-left:10 0px;"
t1.style.cssText=";margin-top:-70px;width:250px;border:none;border:1px solid gray;height:40px;border-radius:5%;margin-left:10 0px;"
div99.style.cssText=" padding-left:100px;padding-top:10px;width:50%;background-color:white;border:none;outline:none;margin-left:270px;height:500px;box-shadow: 0 3px 10px rgb(0 0 0 / 0.5);border-radius:7px"
div99.appendChild(div77)
var inp=document.createElement("input");
        inp.setAttribute("type","email")
        inp.setAttribute("placeholder","email")
        var inp2=document.createElement("input");
        inp2.setAttribute("placeholder","Password")

        var divvv=document.createElement("div")
        divvv.appendChild(inp);
        divvv.appendChild(inp2);
        div99.appendChild(divvv);
       inp.style.cssText="margin-top:80px;width:250px;border:none;border:1px solid gray;height:40px;border-radius:5%;margin-left:20px;"
       inp2.style.cssText="margin-top:80px;width:250px;border:none;border:1px solid gray;height:40px;border-radius:5%;margin-left:20px;" 
       inp.style.visibility="hidden"
            inp2.style.visibility="hidden"
$(":radio").click(function(){
    
    if(radio1.checked==true){


        div99.appendChild(t1)
        
        div99.appendChild(t2)
        div99.appendChild(b)
        div99.appendChild(b1)
        div99.appendChild(t3)
        
        
        div99.appendChild(t4)
        
       
        
          t1.style.visibility="visible"
            t2.style.visibility="visible"
            t3.style.visibility="visible"
            t4.style.visibility="visible"
            inp.style.visibility="hidden"
            inp2.style.visibility="hidden"
        }
        
        if(radio2.checked==true){

            
          
            inp.style.visibility="visible"
            inp2.style.visibility="visible"
            
            t1.style.visibility="hidden"
            t2.style.visibility="hidden"
            t3.style.visibility="hidden"
            t4.style.visibility="hidden"
            
        }
  });
    

}