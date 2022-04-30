class Etudiant extends Visiteur
{
    _aEntree;
    _nEntree;
    _option;
    constructor(nom, prenom, email, aEntree, nEntree, option)
    {
        super(nom, prenom, email);
        this._aEntree = aEntree;
        this._nEntree = nEntree;
        this._option = option;
    }
    toString(){return super.toString() + " " + this._aEntree + " " + this._nEntree + " " + this._option ;}
}
