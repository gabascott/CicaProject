import CicaModel from "../model/CicaModel.js";
import CicaView from "../view/CicaView.js";

class CicaController{
    constructor(){
        //console.log("CicaController");

        const cicamodel = new CicaModel();

        cicamodel.adatBe('/api/cicak', this.cicaAdatok);
    }

    cicaAdatok(tomb){
        //console.log(tomb);
        let szuloElem = $("article");
        new CicaView(tomb, szuloElem);
    }
}

export default CicaController;