let button=document.getElementsByClassName("number")
let out=document.getElementById("out")
let del=document.getElementById("btdel")
let butopr =document.getElementsByClassName("oper")
let c=0
let num1 = 0
let num2 = 0

button[0].onclick=function(e)
    {       
        out.innerHTML+=this.innerHTML
    }
button[1].onclick=function(e)
    {       
        out.innerHTML+=this.innerHTML
    }
button[2].onclick=function(e)
    {       
        out.innerHTML+=this.innerHTML
    }
button[3].onclick=function(e)
    {       
        out.innerHTML+=this.innerHTML
    }
button[4].onclick=function(e)
    {       
        out.innerHTML+=this.innerHTML
    }
button[5].onclick=function(e)
    {       
        out.innerHTML+=this.innerHTML
    }
button[6].onclick=function(e)
    {       
        out.innerHTML+=this.innerHTML
    }
button[7].onclick=function(e)
    {       
        out.innerHTML+=this.innerHTML
    }
button[8].onclick=function(e)
    {       
        out.innerHTML+=this.innerHTML
    }
button[9].onclick=function(e)
    {       
        out.innerHTML+=this.innerHTML
    }
butopr[0].onclick=function()
    {
        if(c!=0)
            {num2=parseInt(out.innerHTML);
                if(c==1)
                    {num1=(num1/num2)}
                else if (c==2)
                    {num1=(num1+num2)}
                else if (c==3)
                    {num1=(num1-num2)}
                else if (c==4)
                    {num1=(num1*num2)}
            }
        else{num1=parseInt(out.innerHTML);}
            out.innerHTML="";
        c = 1;
    }
butopr[1].onclick=function()
    {
        if(c!=0)
            { num2=parseInt(out.innerHTML);
                if(c==1)
                    {num1=(num1/num2)}
                else if (c==2)
                    {num1=(num1+num2)}
                else if (c==3)
                    {num1=(num1-num2)}
                else if (c==4)
                    {num1=(num1*num2)}
            }
        else{num1=parseInt(out.innerHTML);}
        out.innerHTML="";
        c = 2;
    }
butopr[2].onclick=function()
    {
        if(c!=0)
            {num2=parseInt(out.innerHTML);
                if(c==1)
                    {num1=(num1/num2)}
                else if (c==2)
                    {num1=(num1+num2)}
                else if (c==3)
                    {num1=(num1-num2)}
                else if (c==4)
                    {num1=(num1*num2)}
            }
        else{num1=parseInt(out.innerHTML);}
        out.innerHTML="";
        c = 3;
    }
butopr[3].onclick=function()
    {
        if(c!=0)
            {num2=parseInt(out.innerHTML);
                if(c==1)
                    {num1=(num1/num2)}
                else if (c==2)
                    {num1=(num1+num2)}
                else if (c==3)
                    {num1=(num1-num2)}
                else if (c==4)
                    {num1=(num1*num2)}
            }   
            else{num1=parseInt(out.innerHTML);}
                out.innerHTML="";
                c = 4;
    }
butopr[4].onclick=function()
    {
        num2=parseInt(out.innerHTML);
        if(c==1)
            {out.innerHTML=(num1/num2);c=0}
        else if (c==2)
            {
                console.log(num1)
                console.log(num2)
                out.innerHTML=(num1+num2);c=0
            }
        else if (c==3)
            {out.innerHTML=(num1-num2);c=0}
        else if (c==4)
            {out.innerHTML=(num1*num2);c=0}
    }
del.onclick=function()
{
    out.innerHTML="";

}
