import { Model } from "../core/Model.js";
export class CompteModel extends Model
{
    async  findAllWithClient() {
        let response= await super.getDatas("ressource=api&controller=compte") ;
        return response;
      }
      


}