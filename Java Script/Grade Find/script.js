let num = prompt ("Enter a Number");
if (num <= 100 && num >= 95 ){
    document.getElementById("s1").innerHTML="Grade O";
}
else if (num <= 94 && num >= 90 ){
    document.getElementById("s1").innerHTML="Grade A+";
}
else if(num <=89 && num >= 80 ){
    console.log("Grade A");  //view answer in console window
}
else if(num <=79 && num >= 70 ){
    console.log("Grade B+");
}
else if(num <=69 && num >= 60 ){
    console.log("Grade B");
}
else if(num <=59 && num >= 50 ){
    console.log("Grade C+");
}
else if(num <=49 && num >= 40 ){
    console.log("Grade C");
}
else if(num <=39 && num >= 0 ){
    console.log("Grade D");
}
