function Professeur(nom, prenom, email, aEntree, grade, specialite)
{
    var parent = Visiteur;
    parent(nom, prenom, email);
    delete parent;
    this.getGrade = function(){return this.grade;};
    this.setGrade = function(grade){this.grade = grade;};
    this.getSpecialite = function(){return this.specialite;};
    this.toString = function(){return nom + " " + prenom + " " + email+ " " + aEntree + " " + grade + " " + specialite;};
}