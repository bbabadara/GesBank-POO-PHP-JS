const WEBURL="http://127.0.0.1:8010";
let comptes=[];


document.addEventListener("DOMContentLoaded",async(event)=>{
  let datas =await findAllWithClient();
  comptes=[...datas];
  document.querySelector("#inputTest").addEventListener("input",function(){
    console.log(comptes);
    
})
})


async function findAllWithClient(){
    let response= await fetch (`${WEBURL}/?ressource=api&controller=compte`);
    const datas=await response.json();
    return datas;
}

