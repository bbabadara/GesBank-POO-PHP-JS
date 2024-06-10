// const { elements } = require("chart.js");

const WEBURL = "http://127.0.0.1:8010";
const inputTel = getElement("#inputTel")
const inputTc = getElement("#inputTc")
const tBody = getElement("#tBody")
const pagination= getElement("#pagination")
const elementPerPage=3;
var tekXel=1
let demandes = [];


document.addEventListener("DOMContentLoaded", async (event) => {
  let datas = await findAllDemandeWithClient();
  demandes = [...datas];
  init()
})

inputTel.addEventListener("input", function () {
  if (inputTel.value.trim()!="") {
    tBody.innerHTML=generateTbody(findDemandeBySearchTel(inputTel.value)) 
  }else(
    init()
  )
})

inputTc.addEventListener("input",function(){
  tBody.innerHTML=generateTbody(findDemandeByType(inputTc.value))
 })


async function findAllDemandeWithClient() {
  let response = await fetch(`${WEBURL}/?ressource=api&controller=demande`);
  const datas = await response.json();
  return datas;
}



function findDemandeBySearchTel(saisi) {
  if (saisi != "") {
    return demandes.filter(function (d) {
      return d.telephone.toUpperCase().includes(saisi.toUpperCase()) == true
    })
  }
  return []
}
function findDemandeByType(type) {
  if (type != "all") {
    return demandes.filter(function (d) {
      return d.libtc.toUpperCase().includes(type.toUpperCase()) == true
    })
  }
  return demandes
}



 function init(){
  // tBody.innerHTML=generateTbody(demandes)
generatePagination(demandes)
 }
function generateTbody(demands) {
  let html = ""
  for (const demande of demands) {
    html += generateTr(demande)
  }
  return html
}

//generer un tr
function generateTr(demande) {
  return `<tr onmouseover="affichebtn(this)" onmouseout="masquebtn(this)">
        <td><input type="checkbox" data-id="${demande.idd}" class="coche" onclick="selected(this)"></td>
        <td>${demande.dated}</td>
        <td onmouseover="afficheBtnTd(this)" onmouseout="masqueBtnTd(this)" >${demande.prenom+" "+demande.nom}
            <div>
               <a href="${WEBURL}/?ressource=html&controller=compte&action=cClient&key=${demande.idu}" class="btn btn-primary" hidden >Compte</a>
               <a href="${WEBURL}/ressource=html&controller=transaction&action=tClient&key=${demande.idu}"  class="btn btn-primary" hidden >transaction</a>
            </div>
        </td>
        <td>${demande.telephone} </td>
        <td>${demande.email}</td>
        <td>${demande.libtc}</td>
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
 
// function pageNum(page){
//  alert(page)
// }

function getElement(name, bool = false) {
  if (!bool) {
      return document.querySelector(name)
  } else {
      return document.querySelectorAll(name)
  }
}

// function generatepagination(long) {
// let html=`<li class="page-item" onclick="previousPage()"><button class="page-link" href="#">Previous</button></li>`;
// for (let i = 1; i <=long; i++) {
//   html+=`<li class="page-item" onclick="pageNum(${i})"><button class="page-link" >${i}</button></li>` 
// }
// html+=`<li class="page-item" onclick="nextPage()"><button class="page-link" href="#">Next</button></li>`;
// return html
// } 

// function nombreDePage(tab) {
//   return Math.ceil(tab.length/5)
// }

// function getSlicedTable(tab,pos=0,nbr=5){
//         return tab.slice(pos, nbr)
// } 

// function pageNum(page){
//  const pos=(page-1)*5;
//   tBody.innerHTML=generateTbody(getSlicedTable(demandes,pos))
//  }

 function getDatasPaginate(tab,start,elementPage){
  let firstPosition=(start-1)*elementPage;
  let lastPosition=firstPosition+elementPage;
  return {
    datas:tab.slice(firstPosition,lastPosition),
    page:Math.ceil(demandes.length/elementPage)
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
})

 }


//  function nextPage(){
  
//  }
//  function previousPage(){

//  }