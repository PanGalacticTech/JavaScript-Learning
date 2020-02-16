

function fetchDate(){

return (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));

}







 let div = document.createElement('div');

let PMten = 2.345;

// let dataNode = document.createTextNode(PMten);

 div.className = "dataUpdate";

 div.innerHTML = PMten;

 document.body.append(envDiv);




function getData(dataType){

let value = PMten + dataType;

return value;
}


PMten = getData(42);
