import { Validation } from "../core/Validation.js";
import { SecurityModel } from "../models/SecurityModel.js";
const sec=new SecurityModel();
const loginBtn=Validation.getElement("#loginbtn")
const inputmail=Validation.getElement("#inputmail")
const inputpwd=Validation.getElement("#inputpwd")
const affichepwd=Validation.getElement("#affichepwd")
const inputs = document.querySelectorAll(".tovalidate")
Validation.activeButton(loginBtn, "false")

    inputmail.addEventListener("input", function () {
        if (Validation.validerEmail(inputmail.value)) {
            Validation.success(inputmail)
            inputmail.nextElementSibling.textContent = ""
        }else{
            Validation.error(inputmail,"Entrer un email valide")
        }
        
    })

    inputpwd.addEventListener("input", function () {
        if (Validation.fieldsRequired(inputpwd)) {
           Validation.success(inputpwd)
           inputpwd.nextElementSibling.textContent = ""

        }
    })
    for (const input of inputs) {
        input.addEventListener("input", function () {
            let inputValid = document.querySelectorAll(".is-valid")
           const disabledBtn = !(Array.from(inputs).length == Array.from(inputValid).length)
            Validation.activeButton(loginBtn, disabledBtn)
        })
    }

    affichepwd.addEventListener("click", function () {
        inputpwd.type="text"
        if (affichepwd.checked) {
            inputpwd.type="text"
        } else {
            inputpwd.type="password"
        }
    })

    