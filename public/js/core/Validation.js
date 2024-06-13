export class Validation 
{
   static fieldsRequired(field) {
        if (field.value.trim() === '') {
            this.error(field)
            return false
        }
        return true
    
    }
    static success(field) {
        field.classList.remove("is-invalid")
        field.classList.add("is-valid")
    }

    static error(field, msg = "Champ est obligatoire") {
        field.classList.remove("is-valid")
        field.classList.add("is-invalid")
        field.nextElementSibling.textContent = msg
    }

    static activeButton(btn, etat) {
        if (etat) {
            btn.setAttribute("disabled", true)
        } else (
            btn.removeAttribute("disabled")
        )

    }

    static validerEmail(email) {
        const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return regex.test(email);
    }

    static getElement(name, bool = false) {
        if (!bool) {
            return document.querySelector(name)
        } else {
            return document.querySelectorAll(name)
        }
    }
}