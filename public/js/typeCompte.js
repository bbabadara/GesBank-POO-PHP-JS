const WEBURL="http://127.0.0.1:8010";
let typeComptes=[];


document.addEventListener("DOMContentLoaded",async(event)=>{
  let datas =await findAll();
  typeComptes=[...datas];
  document.querySelector("#inputTest").addEventListener("input",function(){
    console.log(typeComptes);
    
})
})


async function findAll(){
    let response= await fetch (`${WEBURL}/?ressource=api&controller=typeCompte`);
    const datas=await response.json();
    return datas;
}

