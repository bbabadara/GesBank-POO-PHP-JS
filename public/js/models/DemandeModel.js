import { Model } from "../core/Model.js";
export class DemandeModel extends Model {
  async findAllDemandeWithClient() {
    let response = await super.getDatas("ressource=api&controller=demande");
    return response;
  }

  findDemandeBySearchTel(saisi, demandes) {
    if (saisi != "") {
      return demandes.filter(function (d) {
        return d.telephone.toUpperCase().includes(saisi.toUpperCase()) == true;
      });
    }
    return [];
  }

  findDemandeByType(type, demandes) {
    if (type != "all") {
      return demandes.filter(function (d) {
        return d.libtc.toUpperCase().includes(type.toUpperCase()) == true;
      });
    }
    return demandes;
  }
}
