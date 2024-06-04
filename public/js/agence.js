const WEBURL="http://127.0.0.1:8010";
let agences=[];


document.addEventListener("DOMContentLoaded",async(event)=>{
  let datas =await findAllAgence();
  agences=[...datas];
  document.querySelector("#inputTest").addEventListener("input",function(){
    console.log(agences);
    
})
})


async function findAllAgence(){
    let response= await fetch (`${WEBURL}/?ressource=api&controller=agence`);
    const datas=await response.json();
    return datas;
}

