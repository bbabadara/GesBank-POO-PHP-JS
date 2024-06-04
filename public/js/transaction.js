const WEBURL="http://127.0.0.1:8010";
let transactions=[];


document.addEventListener("DOMContentLoaded",async(event)=>{
  let datas =await findAllTransaction();
  transactions=[...datas];
  document.querySelector("#inputTest").addEventListener("input",function(){
    console.log(transactions);
    
})
})


async function findAllTransaction(){
    let response= await fetch (`${WEBURL}/?ressource=api&controller=transaction`);
    const datas=await response.json();
    return datas;
}

