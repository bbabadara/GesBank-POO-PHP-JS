 const WEBURL="http://127.0.0.1:8010";
export class Model
{
    async  getDatas(uri){
        let response= await fetch (`${WEBURL}/?${uri}`);
        const datas=await response.json();
        return datas;
    }

    static getElement(name, bool = false) {
        if (!bool) {
            return document.querySelector(name)
        } else {
            return document.querySelectorAll(name)
        }
    }


 

}