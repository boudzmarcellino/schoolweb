// use strict 

function Etudiant(nom, prenom, email, aEntree, nEntree, option)
{
    this.parent = Visiteur;
    parent(nom, prenom, email);
    //Visiteur.call(this, nom, prenom, email);
    //this.Email = function(){parent.getEmail();};
    delete parent;
    this.getNEntree = function(){return nEntree;};
    this.setAEntree = function(annee){aEntree = annee;};
    this.getAEntree = function(){return aEntree;};
    this.getOption = function(){return option;};
    this.toString = function(){return nom + " " + prenom + " " + email + " " + aEntree + " " + nEntree + " " + option;};
}

let lino = new Etudiant("el", "Lino", "boudzmarcellino@gmail.com", 2020, "Master", "Electronique");
console.log(lino.getEmail());
console.log("Bonjour " + lino.toString());
console.log(lino instanceof Etudiant);