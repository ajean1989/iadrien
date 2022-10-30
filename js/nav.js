// Partie Web

let listDevWeb = document.querySelectorAll(".dev_web");

let devWebControl = 1;

for(let list of listDevWeb){
    list.style.display = 'none';
}

function devWebFold(){
    devWebControl++;

    if(devWebControl % 2 === 1){
        for(let list of listDevWeb){
            list.style.display = 'none';
        }
    }
    else{
        for(let list of listDevWeb){
            list.style.display = 'block';
        }
    }
}


let headListDev = document.querySelector('#list_dev_web')

headListDev.addEventListener('click',devWebFold);


// Partie IA


let listDevIa = document.querySelectorAll(".dev_ia");

let devIaControl = 1;

for(let list of listDevIa){
    list.style.display = 'none';
}

function devIaFold(){
    devIaControl++;

    if(devIaControl % 2 === 1){
        for(let list of listDevIa){
            list.style.display = 'none';
        }
    }
    else{
        for(let list of listDevIa){
            list.style.display = 'block';
        }
    }
}


let headListIa = document.querySelector('#list_dev_ia')


headListIa.addEventListener('click',devIaFold);