

// 1. Déclarations
const panier = [];
const afficheurCompteur = document.getElementById('compteur-panier');
const afficheurTotal = document.getElementById('total-prix');
const listeUl = document.getElementById('liste-panier');

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
        li.innerText = produit + " (" + produit + "€)";
        listeUl.appendChild(li);
    });

    afficheurTotal.innerText = total;
};
rafraichirAffichage();
// 3. Écouteurs de clics
/*btnVip.addEventListener('click', () => {
    console.log("Clic sur VIP");
    panier.push({ nom: "Grade VIP", prix: 15 });
    rafraichirAffichage();
});*/

btnDiamant.addEventListener('click', () => {
    console.log("Clic sur Diamant");
    panier.push({ nom: "Kit Diamant", prix: 5 });
    rafraichirAffichage();
});




const bouton1 = document.getElementById('panier');

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

