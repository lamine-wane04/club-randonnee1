<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <script>
        // Dynamiser les options des clubs en fonction de la région sélectionnée
        function updateClubs() {
            const clubsByRegion = {
                Dakar: [
                    "Dakar Plateau", "Dkr Plateau Gorée", "Fass", "Colobane", "Médina", "Centenaire", 
                    "Thierigne", "Baobab", "Dieupeul", "Arcao Ouakam", "Ndielben", "Grand Yoff", 
                    "Mermoz", "HLM", "Cranpy", "Nord Foire", "Diappo Littoral", "Camberène", "USPA Parcelles"
                ],
                Diourbel: ["Club Touba", "Club Bambey", "Club Mbacké"],
               Fatick: [
    "CRP Passy", "CRP Foundiougne", "CRP Sokone", "CRP Toubacouta", 
    "CRP Gossas", "CRP Diofior", "CRP Fatick"
],

                Kaolack: ["Club Kaolack Ville", "Club Kahone", "Club Ndoffane"],
                Kédougou: ["Club Kédougou", "Club Salémata", "Club Bandafassi"],
                Kolda: ["Club Kolda", "Club Vélingara", "Club Médina Yoro Foulah"],
                Louga: ["Club Louga Ville", "Club Kébémer", "Club Linguère"],
                Matam: ["Club Matam", "Club Ranérou", "Club Kanel"],
                "Saint-Louis": ["Club Saint-Louis", "Club Dagana", "Club Podor"],
                Sédhiou: ["Club Sédhiou Ville", "Club Bounkiling", "Club Goudomp"],
                Tambacounda: [
    "GOUREL DIADIÉ RANDONNÉE CLUB", "QUINZAMBOUGOU RANDONNÉE CLUB", "ABATTOIRS RANDONNÉE CLUB", 
    "SARÉ GUILLÈLE RANDONNÉE CLUB", "PONT RANDONNÉE CLUB", "GOUYE RANDONNÉE CLUB", 
    "DÉPÔT RANDONNÉE CLUB", "LIBERTÉ RANDONNÉE CLUB", "MEDINACOURA COURA RANDONNÉE CLUB", 
    "SARÉ ISSA RANDONNÉE CLUB", "TAMBA-SOCÉ RANDONNÉE CLUB", "PLATEAU RANDONNÉE CLUB"
],

                Thiès: [
    "Keur Daggo", "Keurr Mame Elhadj", "Sapeurs", "Anciens Combattants", 
    "ISEPT Thiès", "Thiès Ouest", "Tivaoune", "Pout", "Mekhe", "Nianing", 
    "Mbour petite côte", "Somone", "Ngaparou", "Randoulene"
],
                Ziguinchor: ["Club Ziguinchor", "Club Oussouye", "Club Bignona"],
            };

            const region = document.getElementById("region").value;
            const clubSelect = document.getElementById("club");

            // Réinitialiser les options
            clubSelect.innerHTML = '<option value="" disabled selected>Choisir un club</option>';

            if (region in clubsByRegion) {
                clubsByRegion[region].forEach(club => {
                    const option = document.createElement("option");
                    option.value = club;
                    option.textContent = club;
                    clubSelect.appendChild(option);
                });
            }
        }
    </script>
</head>
<body class="min-h-screen bg-gray-100 py-8 px-4">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $club = htmlspecialchars($_POST['club']);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $age = htmlspecialchars($_POST['age']);
        $genre = htmlspecialchars($_POST['genre']);
        $region = htmlspecialchars($_POST['region']);
        
        // Enregistrement dans un fichier
        $data = "Région: $region\nClub: $club\nNom Complet: $prenom $nom\nÂge: $age ans\nGenre: $genre\n\n";

        $file = fopen("inscriptions.txt", "a");
        if ($file) {
            fwrite($file, $data);
            fclose($file);
        }
    ?>
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-8">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Informations Soumises</h2>
            </div>
            <div class="space-y-4">
                <div><strong>Région :</strong> <?php echo $region; ?></div>
                <div><strong>Club :</strong> <?php echo $club; ?></div>
                <div><strong>Nom Complet :</strong> <?php echo "$prenom $nom"; ?></div>
                <div><strong>Âge :</strong> <?php echo $age; ?> ans</div>
                <div><strong>Genre :</strong> <?php echo $genre; ?></div>
            </div>
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="block w-full mt-6 bg-green-500 text-white py-2 px-4 rounded-md text-center">
                Nouvelle inscription
            </a>
        </div>
    <?php
    } else {
    ?>
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Formulaire d'inscription</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="space-y-4">
                <div>
                    <label for="region" class="block text-sm font-medium text-gray-700">Région</label>
                    <select id="region" name="region" onchange="updateClubs()" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option value="" disabled selected>Choisir une région</option>
                        <option value="Dakar">Dakar</option>
                        <option value="Diourbel">Diourbel</option>
                        <option value="Fatick">Fatick</option>
                        <option value="Kaolack">Kaolack</option>
                        <option value="Kédougou">Kédougou</option>
                        <option value="Kolda">Kolda</option>
                        <option value="Louga">Louga</option>
                        <option value="Matam">Matam</option>
                        <option value="Saint-Louis">Saint-Louis</option>
                        <option value="Sédhiou">Sédhiou</option>
                        <option value="Tambacounda">Tambacounda</option>
                        <option value="Thiès">Thiès</option>
                        <option value="Ziguinchor">Ziguinchor</option>
                    </select>
                </div>

                <div>
                    <label for="club" class="block text-sm font-medium text-gray-700">Club</label>
                    <select id="club" name="club" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option value="" disabled selected>Choisir un club</option>
                    </select>
                </div>

                <div>
                    <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" id="nom" name="nom" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
                    <input type="text" id="prenom" name="prenom" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label for="age" class="block text-sm font-medium text-gray-700">Âge</label>
                    <input type="number" id="age" name="age" required min="1" max="100"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Genre</label>
                    <div class="space-x-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="genre" value="Homme" required
                                class="form-radio text-green-500">
                            <span class="ml-2">Homme</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="genre" value="Femme" required
                                class="form-radio text-green-500">
                            <span class="ml-2">Femme</span>
                        </label>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 transition-colors focus:outline-none focus:ring-2 focus:ring-green-500">
                    Envoyer
                </button>
            </form>
        </div>
    <?php
    }
    ?>
</body>
</html>
