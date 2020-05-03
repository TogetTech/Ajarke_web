
        $( function() {
            var availableBus = [
                "BUS01",
                "BUS02",
                "BUS03"
            ];
            $("#bus").autocomplete({
                source: availableBus
            });
            
        });

        $( function() {
            var availableCategories = [
                "CLASSIC",
                "VIP"
            ];

            $("#catégorie").autocomplete({
                source: availableCategories
            });
            
        });

        function bagageFunction() {
            var checkbox = document.getElementById("checkBagage");
            var input = document.getElementById("input");
            if (checkbox.checked == true) {
                input.style.display = "block";
            }else{
                input.style.display = "none";
            }
        }

        $( function() {
            var availableDestinations = [
                "Abandikiti",
                "Abong Mbang",
                "Akom II",
                "Akono",
                "Akonolinga",
                "Akwabana Island",
                "Ambam",
                "Ambas Island",
                "Babanki",
                "Bafang",
                "Bafia",
                "Bafoussam",
                "Bali",
                "Bamenda",
                "Bamendjou",
                "Bamkim",
                "Bamusso",
                "Bana",
                "Bandjoun",
                "Bangangté",
                "Bansoa",
                "Banyo",
                "Baténa",
                "Batibo",
                "Batouri",
                "Bazou",
                "Bekondo",
                "Bélabo",
                "Bélel",
                "Belo",
                "Bertoua",
                "Bétaré Oya",
                "Bobia Island",
                "Bogo",
                "Bonabéri",
                "Bota",
                "Buéa",
                "Campton Island",
                "Diang",
                "Dibombari",
                "Dimako",
                "Dizangué",
                "Djohong",
                "Douala",
                "Doumé",
                "Dschang",
                "Ébolowa",
                "Édéa",
                "Eséka",
                "Essé",
                "Évodoula",
                "Ewuru Island",
                "Fiari Island",
                "Fontem",
                "Foumbot",
                "Fumban",
                "Fundong",
                "Garoua",
                "Garoua Boulaï",
                "Guidder",
                "Hyoma Nawétia",
                "Idenao",
                "Ile Anna",
                "Île Bouhangué",
                "Île Dibongo",
                "Ile Djébalé",
                "Île Kwélé-Kwélé",
                "Île Malimba",
                "Ile Manoka",
                "Ile Miandjou",
                "Ile Ndonga",
                "Île Nicol",
                "Île Pongo",
                "Ile Wouri",
                "Ile Yatou",
                "Inikoi Island",
                "Jakiri",
                "Kabanha",
                "Kaélé",
                "Katéla",
                "Kontcha",
                "Kousséri",
                "Koza",
                "Kribi",
                "Kumba",
                "Kumbo",
                "Lagdo",
                "Limbé",
                "Lolodorf",
                "Loum",
                "Lucke Island",
                "Makary",
                "Mamfe",
                "Manjo",
                "Maroua",
                "Masonjo Island",
                "Mbalmayo",
                "Mbandjok",
                "Mbang",
                "Mbanga",
                "Mbankomo",
                "Mbégé",
                "Mbengwi",
                "Mbouda",
                "Me",
                "Meiganda",
                "Melong",
                "Mindif",
                "Minjame",
                "Minta",
                "Mokolo",
                "Mondoleh Island",
                "Mora",
                "Mouanko",
                "Mouyouka",
                "Mundenba",
                "Mutengene",
                "Mvangué",
                "Nanga Eboko",
                "Ndeba",
                "Ndélélé",
                "Ndikiniméki",
                "Ndom",
                "Nganbé",
                "Ngaundere",
                "Ngomedzap",
                "Ngorro",
                "Ngou",
                "Nguti",
                "Njinikom",
                "Nkoloboko",
                "Nkongsamba",
                "Nkoteng",
                "Ntui",
                "Obala",
                "Okoa",
                "Okola",
                "Ombessa",
                "Otérou",
                "Penja",
                "Piparla",
                "Pitoa",
                "Poli",
                "Pon",
                "Rey Bouba",
                "Saa",
                "Sangmélima",
                "Schiess Island",
                "Soden Island",
                "Tcholliré",
                "Tibati",
                "Tignère",
                "Tiko",
                "Tiko Island",
                "Tonga",
                "Wum",
                "Yabassi",
                "Yagoua",
                "Yaoundé",
                "Yokadouma"

            ];
            $( "#villes" ).autocomplete({
              source: availableDestinations
            });
        } );

