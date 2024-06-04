const WEBURL="http://127.0.0.1:8010";
let recus=[];


document.addEventListener("DOMContentLoaded",async(event)=>{
  let datas =await findAllRecu();
  recus=[...datas];
  document.querySelector("#inputTest").addEventListener("input",function(){
    console.log(recus);
    
})
})


async function findAllRecu(){
    let response= await fetch (`${WEBURL}/?ressource=api&controller=recu`);
    const datas=await response.json();
    return datas;
}

