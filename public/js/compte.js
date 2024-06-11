const WEBURL="http://127.0.0.1:8010";
const tBody = getElement("#tBody")
const pagination= getElement("#pagination")
const elementPerPage=3;
let comptes=[];


document.addEventListener("DOMContentLoaded",async(event)=>{
  let datas =await findAllWithClient();
  comptes=[...datas];

  init()

})


async function findAllWithClient(){
    let response= await fetch (`${WEBURL}/?ressource=api&controller=compte`);
    const datas=await response.json();
    return datas;
}


function init(){
generatePagination(comptes)
 }
function generateTbody(compts) {
  let html = ""
  for (const cpt of compts) {
    html += generateTr(cpt)
  }
  return html
}

//generer un tr
function generateTr(compte) {
  return `<tr onmouseover="affichebtn(this)" onmouseout="masquebtn(this)">
        <td onmouseover="afficheBtnTd(this)" onmouseout="masqueBtnTd(this)" >${compte.prenom+" "+compte.nom}
            <div>
               <a href="${WEBURL}/?ressource=html&controller=compte&action=cClient&key=${compte.idu}" class="btn btn-primary" hidden >Compte</a>
               <a href="${WEBURL}/ressource=html&controller=transaction&action=tClient&key=${compte.idu}"  class="btn btn-primary" hidden >transaction</a>
            </div>
        </td>
        <td>${compte.telephone} </td>
        <td>${compte.dated}</td>
        <td>${compte.numero}</td>
        <td>${compte.solde}</td>
        <td>${compte.libtc}</td>
        <td>Statut</td>
        <td><button type="button" class="btn btn-primary" hidden>Transferer</button></td>
      </tr>`
}



function affichebtn(tr) {
  tr.lastElementChild.querySelector('button').hidden=false;
}

function masquebtn(tr) {
  
    tr.lastElementChild.querySelector('button').hidden = true;
 
}
function afficheBtnTd(td) {
  elements=Array.from(td.querySelectorAll('a'));
  for (const element of elements) {
    element.hidden=false;
  }
  
}

function masqueBtnTd(td) {
  elements=Array.from(td.querySelectorAll('a'));
  for (const element of elements) {
    element.hidden=true;
  }
}

function selected(checkbox) {
  const all=getElement("#selAll")
  const ligneCible = checkbox.parentElement.parentElement;
  if (checkbox.checked) {
      ligneCible.classList.add("table-primary")
  } else {
      ligneCible.classList.remove("table-primary")
      all.checked=false
  }

}


function selectAll(checkbox) {
  const inputsToCheck = getElement(".coche", true)
  if (checkbox.checked) {
      inputsToCheck.forEach(function (input) {
          input.checked = true
          selected(input)
      })
  } else {
      inputsToCheck.forEach(function (input) {
          input.checked = false
          selected(input)
      })
  }
}
function getDatasPaginate(tab,start,elementPage){
  let firstPosition=(start-1)*elementPage;
  let lastPosition=firstPosition+elementPage;
  return {
    datas:tab.slice(firstPosition,lastPosition),
    page:Math.ceil(tab.length/elementPage)
  };
 }
  
 function generatePagination(allDatas){
const {datas,page}=getDatasPaginate(allDatas,1,elementPerPage);
 let html=`<li class="page-item" ><button class="page-link" href="#">Previous</button></li>`;
for (let i = 1; i <=page; i++) {
  html+=`<li class="page-item ${i==1?'active':''}" data-number="${i}"><button class="page-link" >${i}</button></li>` 
}

html+=`<li class="page-item" ><button class="page-link" href="#">Next</button></li>`;

pagination.innerHTML= html
 tBody.innerHTML=generateTbody(datas)
const itemsLi=pagination.querySelectorAll(".page-item")
itemsLi.forEach((item)=>{
  item.addEventListener("click",(e)=>{
    pagination.querySelector(".active").classList.remove("active")
    item.classList.add("active")
    let {datas}=getDatasPaginate(allDatas,parseInt(item.dataset.number),elementPerPage)
  tBody.innerHTML=generateTbody(datas)
})
})}

function getElement(name, bool = false) {
  if (!bool) {
      return document.querySelector(name)
  } else {
      return document.querySelectorAll(name)
  }
}