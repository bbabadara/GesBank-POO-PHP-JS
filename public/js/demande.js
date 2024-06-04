const WEBURL="http://127.0.0.1:8010";
const inputTel=document.querySelector("#inputTel")
let demandes=[];


document.addEventListener("DOMContentLoaded",async(event)=>{
  let datas =await findAllDemandeWithClient();
  demandes=[...datas];
  inputTel.addEventListener("input",function(){
    console.log(demandes);
    
})
})


async function findAllDemandeWithClient(){
    let response= await fetch (`${WEBURL}/?ressource=api&controller=demande`);
    const datas=await response.json();
    return datas;
}

