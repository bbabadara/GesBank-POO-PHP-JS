import { Paginate } from "../core/paginate.js";
import { DemandeModel } from "../models/DemandeModel.js";

// const { elements } = require("chart.js");
DemandeModel
const WEBURL = "http://127.0.0.1:8010";
const inputTel = getElement("#inputTel")
const inputTc = getElement("#inputTc")
const tBody = getElement("#tBody")
const pagination= getElement("#pagination")
var tekXel=1
const demandeModel=new DemandeModel();
let demandes = [];


document.addEventListener("DOMContentLoaded", async (event) => {
  let datas = await demandeModel.findAllDemandeWithClient();
  demandes = [...datas];
  init()
})

inputTel.addEventListener("input", function () {
  if (inputTel.value.trim()!="") {
    Paginate.generatePagination(demandeModel.findDemandeBySearchTel(inputTel.value,demandes),pagination,tBody,generateTbody)
  }else(
    init()
  )
})

inputTc.addEventListener("input",function(){
  Paginate.generatePagination(demandeModel.findDemandeByType(inputTc.value,demandes),pagination,tBody,generateTbody)
 })



 function init(){
  // tBody.innerHTML=generateTbody(demandes)
Paginate.generatePagination(demandes,pagination,tBody,generateTbody)
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
 


function getElement(name, bool = false) {
  if (!bool) {
      return document.querySelector(name)
  } else {
      return document.querySelectorAll(name)
  }
}


 


//  function nextPage(){
  
//  }
//  function previousPage(){

//  }