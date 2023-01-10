class CicaView{
    #elem;
    constructor(elem, szuloElem){
        //console.log("CicaView");
        this.#elem = elem;

        szuloElem.append(`
            <div class="cica">
                <h3 class="neve">${elem.neve}</h3>
                <p class="neme">${elem.neme}</p>
                <p class="fajta">${elem.fajta}</p>
                <span class="kora">${elem.kora}</span>
                <span class="sulya">${elem.sulya}</span>
                <button id="del${elem.cica_id}">Töröl</button>
            </div>
        `);
        this.divElem = szuloElem.children("div:last-child");
        console.log(this.divElem);
        
    }
}

export default CicaView;