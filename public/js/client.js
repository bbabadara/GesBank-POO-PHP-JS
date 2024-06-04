const WEBURL="http://127.0.0.1:8010";
let clients=[];


document.addEventListener("DOMContentLoaded",async(event)=>{
  let datas =await findAllClient();
  clients=[...datas];
  document.querySelector("#inputTest").addEventListener("input",function(){
    console.log(clients);
    
})
})


async function findAllClient(){
    let response= await fetch (`${WEBURL}/?ressource=api&controller=client`);
    const datas=await response.json();
    return datas;
}

