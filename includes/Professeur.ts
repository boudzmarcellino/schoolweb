class Professeur extends Visiteur
{
    _grade;
    _specialite;
    constructor(nom, prenom, email, grade, specialite){
        super(nom, prenom, email);
        this._grade = grade;
        this._specialite = specialite;
    }
    toString(){return super.toString() + " " + this._grade + " " + this._specialite;}
}