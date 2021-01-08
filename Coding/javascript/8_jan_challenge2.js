var js1,js2,js3;
js1=prompt("Enter match 1 score : "); 
js2=prompt("Enter match 2 score : "); 
js3=prompt("Enter match 3 score : ");

var ms1,ms2,ms3;
ms1=prompt("Enter match 1 score : "); 
ms2=prompt("Enter match 2 score : "); 
ms3=prompt("Enter match 3 score : ");

jscore = (js1 + js2 + js3)/3;
console.log(jscore);
mscore = (ms1 + ms2 + ms3)/3;
console.log(mscore);

if (jscore==mscore)
{
    console.log("Draw");
}
else if (jscore >= mscore)
{
    console.log("winner is John Team" + jscore);
}
else
{
    console.log("winner is Mick Team" + mscore);
}