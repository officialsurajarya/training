let todo=[];
let req = prompt("Please Enter Your Request");

while(true){
    if(req=="quit"){
        console.log("Quitting App...");
        break;
    } 
    
    if (req=="list"){
        console.log("---------------------");
        for(let i=0; i<todo.length; i++){
            console.log(i, todo[i]);
        }
        console.log("---------------------");
    } else if (req=="add"){
        let task = prompt ("Enter Your Task");
        todo.push(task);
        console.log("task added");
    } else if (req=="delete"){
        let idx = prompt("Enter task index");
        todo.splice(idx,1);
        console.log("task deleted");
    }
    req = prompt ("Enter Your request");    
}
