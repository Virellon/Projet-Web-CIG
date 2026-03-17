// 1. Déclarations
const panier = [];
const afficheurCompteur = document.getElementById('compteur-panier');
const afficheurTotal = document.getElementById('total-prix');
const listeUl = document.getElementById('liste-panier');
let totalprix = document.getElementById('total-prix');
const btnVip = document.getElementById('btn-ajout');
const btnDiamant = document.getElementById('btn-diamant');

// 2. La fonction de mise à jour de l'écran
function rafraichirAffichage() {
    // Mettre à jour le nombre d'articles
    afficheurCompteur.innerText = panier.length;

    // Calculer le prix total
    let total = 0;
    listeUl.innerHTML = ""; // On vide la liste avant de la recréer

    panier.forEach(produit => {
        total += produit;
        
        // On crée un petit élément de liste pour chaque produit
        let li = document.createElement('li');
        //li.innerText = produit + " (" + produit + "€)";
        //listeUl.appendChild(li);
    });

    //afficheurTotal.innerText = total;
};
// 3. Écouteurs de clics
  const choix = document.createElement("span");
btnVip.addEventListener('click', () => {
    console.log("Clic sur VIP");
    panier.push({ nom: "Grade VIP", prix: 15 });
    rafraichirAffichage();
    totalprix +=  15;
});

  totalprix.appendChild(choix);
// btnDiamant.addEventListener('click', () => {
//     console.log("Clic sur Diamant");
//     panier.push({ nom: "Kit Diamant", prix: 5 });
//     rafraichirAffichage();
// });




const bouton1 = document.getElementById('btn-ajout');

bouton1.addEventListener('click', () => {
    console.log("Le bouton 1 a été cliqué !"); // Si ça s'affiche dans la console, le bouton marche
    ajouter(1, "Grade VIP", 15);
});

function ajouter(id, nom, prix) {
    panier.push({ id, nom, prix });
    console.log("Contenu du panier :", panier); // Vérifie si le tableau se remplit
    
    const afficheur = document.getElementById('compteur-panier');
    if (afficheur) {
        afficheur.innerText = panier.length;
    } else {
        console.error("Je ne trouve pas l'élément 'compteur-panier' dans le HTML !");
    }
}



document.addEventListener("DOMContentLoaded", () => {
});





async function rafraichirStatut() {

    const voyant = document.getElementById('couleur');
    const texteCompteur = document.getElementById('player-count');

try {
    // 2. On appelle l'API (Remplace l'URL par la tienne)
    // Ici, j'utilise une API de test qui renvoie des données bidon
    const reponse = await fetch('https://api.ton-serveur.com/status');
    
    // 3. On transforme la réponse en JSON (le format de données du web)
    const donnees = await reponse.json();

    // 4. On récupère le nombre de joueurs dans les données
    // (Attention : le nom 'onlineCount' dépend de ton API !)
    const nbJoueurs = donnees.onlineCount;

    // 5. Mise à jour de l'affichage
    texteCompteur.innerText = nbJoueurs; // On remplace "Chargement..." par le chiffre

    if (nbJoueurs > 0) {
    //Si des joueurs sont là, on allume le voyant
        voyant.classList.add('online');
    } else {
    //Si 0 joueur, on l'éteint (couleur grise par défaut)
        voyant.classList.remove('online');
    }

} catch (erreur) {
    // 6. Si l'API ne répond pas ou s'il y a une erreur
    console.error("Impossible de joindre l'API :", erreur);
    texteCompteur.innerText = "?";
    voyant.classList.remove('online');
}
}
rafraichirStatut();

// 8. On demande de recommencer toutes les 30 secondes (30000 millisecondes)
// Comme ça, le nombre se met à jour tout seul !
setInterval(rafraichirStatut, 30000);
