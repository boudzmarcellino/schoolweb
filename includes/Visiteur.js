function bonjour(){console.log('le module marche');}
function Visiteur(nom, prenom, email)
{
    this.getNom=function(){return nom;};
    this.getPrenom=function(){return prenom;};
    this.getEmail=function(){return email;};
    this.toString = function(){return nom + " " + prenom + " " + email;};
}
//export default {bonjour:salut, Visiteur};
export {Visiteur};