class Visiteur
{
    _nom;
    _prenom;
    _email;
    constructor(nom, prenom, email){
        this._nom =nom;
        this._prenom = prenom;
        this._email = email;
    }
    toString = function(){return this._nom + " " + this._prenom + " " + this._email ;}
}
let lino = new Visiteur("el", "lino", "boudzmarcellinoqgmail.com");
console.log(lino.toString());
