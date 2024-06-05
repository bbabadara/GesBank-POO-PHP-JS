const WEBURL = "http://127.0.0.1:8010";
const inputTel = getElement("#inputTel")
const inputTc = getElement("#inputTc")
const tBody = getElement("#tBody")
var demandes = [];


document.addEventListener("DOMContentLoaded", async (event) => {
  let datas = await findAllDemandeWithClient();
  demandes = [...datas];
  // console.log(demandes);
  init()
  inputTel.addEventListener("input", function () {
    if (inputTel.value.trim()!="") {
      tBody.innerHTML=generateTbody(findDemandeBySearchTel(inputTel.value)) 
    }else(
      init()
    )
   inputTc.addEventListener("input",function(){
    tBody.innerHTML=generateTbody(findDemandeByType(inputTc.value))
   })

  })
})

// console.log(demandes);
// init()



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
   console.log(demandes);
  tBody.innerHTML=generateTbody(demandes)
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
        <td>${demande.prenom+" "+demande.nom}</td>
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

function selected(checkbox) {
  const all=getElement("#selAll")
  const ligneCible = checkbox.parentElement.parentElement;
  // const bouton =  ligneCible.lastElementChild.querySelector('button');
  if (checkbox.checked) {
      ligneCible.classList.add("table-primary")
      // bouton.hidden = false;
  } else {
      ligneCible.classList.remove("table-primary")
      all.checked=false
      // bouton.hidden = true;
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