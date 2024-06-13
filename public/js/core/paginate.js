const elementPerPage=3;
export class Paginate
{
    static getDatasPaginate(tab,start,elementPage){
        let firstPosition=(start-1)*elementPage;
        let lastPosition=firstPosition+elementPage;
        return {
          datas:tab.slice(firstPosition,lastPosition),
          page:Math.ceil(tab.length/elementPage)
        };
       }
        
       static generatePagination(allDatas,elementUl,elementTboby,generateTbody){
      const {datas,page}=this.getDatasPaginate(allDatas,1,elementPerPage);
       let html=`<li class="page-item" ><button class="page-link" href="#">Previous</button></li>`;
      for (let i = 1; i <=page; i++) {
        html+=`<li class="page-item ${i==1?'active':''}" data-number="${i}"><button class="page-link" >${i}</button></li>` 
      }
      
      html+=`<li class="page-item" ><button class="page-link" href="#">Next</button></li>`;
      
      elementUl.innerHTML= html
      elementTboby.innerHTML=generateTbody(datas)
      const itemsLi=elementUl.querySelectorAll(".page-item")
      itemsLi.forEach((item)=>{
        item.addEventListener("click",(e)=>{
            elementUl.querySelector(".active").classList.remove("active")
          item.classList.add("active")
          let {datas}=this.getDatasPaginate(allDatas,parseInt(item.dataset.number),elementPerPage)
          elementTboby.innerHTML=generateTbody(datas)
      })
      })
      
       }
}