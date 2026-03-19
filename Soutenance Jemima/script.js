// 1. Déclarations
let panier = [];
const afficheurCompteur = document.getElementById('compteur-panier');
const afficheurTotal = document.getElementById('total-prix');
const listeUl = document.getElementById('liste-panier');
const btnVip = document.getElementById('btnAjoutVip');
const btnKit = document.getElementById('btnAjoutKit');

function rafraichirAffichage() {
    afficheurCompteur.innerText = panier.length;
    let total = 0;
    listeUl.innerHTML = "";
    const productCount = {};
    panier.forEach(produit => {
        total += produit.prix;
        if (productCount[produit.nom]) {
            productCount[produit.nom].count += 1; 
        } else {
            productCount[produit.nom] = { prix: produit.prix, count: 1 };
        }
    });

    for (const nom in productCount) {
        let li = document.createElement('li');
        li.innerText = `${productCount[nom].count} x ${nom} (${productCount[nom].prix}€)`;
        listeUl.appendChild(li);
    }

    afficheurTotal.innerText = total;
}

btnVip.addEventListener('click', () => {
    ajouter("Grade VIP", 15);
    rafraichirAffichage();
});


btnKit.addEventListener('click', () => {
    ajouter("Kit diamant", 5);
});

function ajouter(nom, prix) {
    panier.push({nom, prix });
    rafraichirAffichage();
}

const players = [
    { name: "maya", score: 1500 },
    { name: "Alex", score: 1200 },
    { name: "Herobrine", score: 999 },
    { name: "Batman", score: 850 },
    { name: "Luffy", score: 700 },
    { name: "Creeper", score: 700 },
    { name: "Porygon", score: 850 },
    { name: "Bulbizzare", score: 700 },
    { name: "Yuji", score: 700 }
];

function updateLeaderboard() {
    const tableBody = document.getElementById('leaderboard-body');
    players.sort((a, b) => b.score - a.score);
    let html = ``;
    players.forEach((player, index) => {
        html += `
            <tr>
                <td>#${index + 1}</td>
                <td>${player.name}</td>
                <td>${player.score}</td>
            </tr>`;
    });
}

window.onload = () => {
  updateLeaderboard();
  rafraichirAffichage();
};
