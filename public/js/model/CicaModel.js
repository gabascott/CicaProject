class CicaModel{
    #cicaTomb = [];

    constructor(){
        //console.log("CicaModel");
    }

    adatBe(vegpont, myCallBack){
        //console.log("itt vagyok");
        fetch(vegpont, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then((response) => response.json())
            .then((data) => {
                //console.log('Success:', data);
                this.#cicaTomb = data;
                //console.log(this.#cicaTomb);
                myCallBack(this.#cicaTomb);
            })
            .catch((error) => {
                console.error('Error:', error)
            });
    }
}

export default CicaModel;