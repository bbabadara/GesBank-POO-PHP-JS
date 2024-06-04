const WEBURL="http://127.0.0.1:8010";
let profils=[];


document.addEventListener("DOMContentLoaded",async(event)=>{
  let datas =await findAllProfil();
  profils=[...datas];
  document.querySelector("#inputTest").addEventListener("input",function(){
    console.log(profils);
    
})
})


async function findAllProfil(){
    let response= await fetch (`${WEBURL}/?ressource=api&controller=profil`);
    const datas=await response.json();
    return datas;
}

