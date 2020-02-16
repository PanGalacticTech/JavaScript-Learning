

function fetchDate(){

return (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));

}







 let envDiv = document.createElement('envDiv');

let PMten = 3.455;

// let dataNode = document.createTextNode(PMten);

 envDiv.className = "dataUpdate";

 envDiv.innerHTML = PMten;

 document.body.append(envDiv);




function getData(dataType){

PMten = PMten + dataType;



return PMten;

}
