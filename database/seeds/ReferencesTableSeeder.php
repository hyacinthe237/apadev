<?php

use Illuminate\Database\Seeder;
use App\Models\Reference;


class ReferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          Reference::create([
            'association_id' => 1,
              'title'          => 'Elaboration du projet d’étude d’impact environnemental et social de l’exploitation d’une carrière de pierre à Nomayos-Mbankomo par CANA BOIS',
              'location'       => 'Commune de Mbankomo',
              'year'           => 2018,
              'commanditaires' => 'SOGEA,SATOM'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Conduite conjointe avec la Division Recherche Développement de la SODECOTON du prélèvement des échantillons d’engrais et suivi des résultats d’analyse  sur un 1200T de NPKSB livrés à la CNPCC',
              'location'       => 'Garoua',
              'year'           => 2018,
              'commanditaires' => 'CNPCC-SODECOTON'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Prélèvement des échantillons de sols, recommandation d’un plan de fertilisation après analyse et interprétation des résultats par le Laboratoire d’Analyse des Sols et Chimie de l’Environnement (LABASCE) de la FASA',
              'location'       => 'Commune de Mbandjock',
              'year'           => 2018,
              'commanditaires' => 'Gilbert Didier EDOA'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Prélèvement des échantillons de sols, recommandation d’un plan de fertilisation après analyse et interprétation des résultats par le Laboratoire d’Analyse des Sols et Chimie de l’Environnement (LABASCE) de la FASA',
              'location'       => 'Commune de Bertoua 3',
              'year'           => 2017,
              'commanditaires' => 'ADE'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Accompagnement de la mise en œuvre du projet de réhabilitation par le méthode HIMO de l’Inter P11 Place du Renouveau – Bas-fonds dans le quartier Chefferie',
              'location'       => 'Commune d’Okola',
              'year'           => 2017,
              'commanditaires' => 'Projet HIMO - MINEPAT'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Etude d’impact environnemental et social détaillée du projet d’une  station-service',
              'location'       => 'Commune de Mbankomo',
              'year'           => 2016,
              'commanditaires' => 'BOTA OIL CAM'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Etude d’impact environnemental et social sommaire du projet d’installation d’une savonnerie',
              'location'       => 'Assok - Commune de Mfou',
              'year'           => 2016,
              'commanditaires' => 'Ets M et M'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Etude d’impact environnemental et social détaillée du projet d’Agropole de la Sanaga',
              'location'       => 'Communes Nkoteng',
              'year'           => 2015,
              'commanditaires' => 'KUSEL S.A'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Opération Ville verte de BATOURI',
              'location'       => 'Commune de Batouri',
              'year'           => 2014,
              'commanditaires' => 'Commune de Batouri'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Mise en place d’une pépinière de 70.000 plants de Cacao',
              'location'       => 'Yaoundé (AkoKNdoé par Nkolbisson)',
              'year'           => 2014,
              'commanditaires' => 'APADEV'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Elaboration du projet, suivi opérationnel d’une plantation de 20 Hectares  de Cacao',
              'location'       => 'Route de YOKO (Mbam et Kim)',
              'year'           => 2014,
              'commanditaires' => 'ABOUNA ZOUA Guy Daniel'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Accompagnement de la commune de Meyomessi dans l’appropriation du processus de décentralisation et de la gouvernance locale',
              'location'       => 'Meyomessi - Cameroun',
              'year'           => 2013,
              'commanditaires' => 'Commune de Meyomessi'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Création des champs fourragers et champs semenciers à la station d’élevage de Batouri',
              'location'       => 'Batouri – Cameroun',
              'year'           => 2013,
              'commanditaires' => 'Présidence de la République,Ministère des Marchés Publics'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Accompagnement des organisations de producteurs dans la mise en place et l’ensemencement des germoirs de bananier plantain dans la zone d’intervention du PDR-ES',
              'location'       => 'Départements de la Kadey et du Lom et Djerem - Cameroun',
              'year'           => 2012,
              'commanditaires' => 'PDR-ES,Coopération Cameroun Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Information/Sensibilisation des populations et des partenaires de la Zone du Programme de Développement Rural de la Région de l’Est',
              'location'       => 'Département de la Kadey - Cameroun',
              'year'           => 2011,
              'commanditaires' => 'PDR-ES,Coopération Cameroun Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formulation du Sous-Projet d’Amélioration de la compétitivité du GIC KUITCHOU par l’engraissement  intensif et la commercialisation du porc',
              'location'       => 'Mifi Ouest -Cameroun',
              'year'           => 2011,
              'commanditaires' => 'Projet PACA, Coopération Cameroun - Banque Mondiale'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formation des femmes maires du Département du Moungo sur la création et la gestion des activités génératrices de revenus',
              'location'       => 'Nkongsamba - Cameroun',
              'year'           => 2010,
              'commanditaires' => 'PDRBA-MN, Coopération Cameroun - Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Appui à la formation et la structuration des membres des comités pour l’exploitation et l’entretien des points d’eau potable complémentaires',
              'location'       => 'Communes de Loum, Yabassi, Nkongsamba 1er, Melong, BaréBakem, Bafang, Nlonako, Manjo, Bonaléa- Cameroun',
              'year'           => 2010,
              'commanditaires' => 'PDRBA-MN, Coopération Cameroun - Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formulation du Sous-Projet d’Amélioration de la compétitivité l’UGIC AGROPARE par l’engraissement  intensif et la commercialisation du porc',
              'location'       => 'Bandjoun, Ouest -Cameroun',
              'year'           => 2010,
              'commanditaires' => 'Projet PACA, Coopération Cameroun - Banque Mondiale'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formation des maîtres des parents à l’approche pédagogique par compétences et à la nouvelle approche de l’évaluation des apprentissages à l’école primaire',
              'location'       => 'Départements du Nkam, Haut Nkam et Menoua Cameroun',
              'year'           => 2009,
              'commanditaires' => 'PDRBA-MN, Coopération Cameroun - Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Appui à la formation et la structuration des comités pour l’exploitation et l’entretien des points d’eau potable aménagés par le Programme de Développement Rural du Bassin Agricole  du Moungo - Nkam',
              'location'       => 'Communes de Loum, Yabassi, Nord Makombé, Melong, BaréBakem, Santchou, Nlonako, Manjo, Njombé-Penja- Cameroun',
              'year'           => 2009,
              'commanditaires' => 'PDRBA-MN, Coopération Cameroun - Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formation des membres des réseaux des femmes Ingénieurs, Juristes et Médecins sur la gestion des conflits au sein des organisations',
              'location'       => 'Yaoundé',
              'year'           => 2009,
              'commanditaires' => 'Projet CAREF, Ministère de la Promotion de la Femme et de la Famille'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formation des membres des réseaux des femmes Ingénieurs, Juristes et Médecins sur les techniques d’élaboration des termes de référence et de rédaction des rapports',
              'location'       => 'Yaoundé',
              'year'           => 2009,
              'commanditaires' => 'Projet CAREF, Ministère de la Promotion de la Femme et de la Famille'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Animation des sessions de formation sur l’organisation des APEE et des COSA en vue de la gestion, l’entretien et la maintenance des infrastructures scolaires et sanitaires',
              'location'       => 'Bafang, Nkongsamba, Njombé, Loum',
              'year'           => 2009,
              'commanditaires' => 'PDRBA-MN, Coopération Cameroun - Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Atelier de formation des animateurs/formateurs sur les techniques d’animation et de conduite d’un diagnostic',
              'location'       => 'Akonolinga',
              'year'           => 2009,
              'commanditaires' => 'Projet Jérémie et les Autres, Coopération Cameroun-Italie'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Animation des sessions de formation des techniciens animateurs et des organisations paysannes à la production  des rejets de bananiers plantains par la méthode PIF et à la conduite des pépinières de bananiers plantains',
              'location'       => 'Mbanga, Loum, Santchou',
              'year'           => 2008,
              'commanditaires' => 'PDRBA-MN, Coopération Cameroun-Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Contribution à l’élaboration d’un schéma directeur de renforcement des capacités des OPA et des acteurs de développement du Cameroun',
              'location'       => 'Garoua, Bamenda, Nkongsamba, Yaoundé',
              'year'           => 2008,
              'commanditaires' => 'Agence Française de développement / Projet PARI'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Atelier de formation des animateurs/formateurs sur la démarche d’élaboration d’un microprojet et la gestion du micro crédit',
              'location'       => 'Okola',
              'year'           => 2008,
              'commanditaires' => 'Projet Jérémie et les Autres, Coopération Cameroun-Italie'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Renforcement des capacités des femmes à réduire la mortalité et la morbidité liées au paludisme chez les enfants et les femmes enceintes',
              'location'       => 'District de santé d’Akonolinga',
              'year'           => 2008,
              'description'    => '2005 - 2008',
              'commanditaires' => 'Plan Cameroun'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Ateliers de sensibilisation et d’animation sur les activités du Programme de Développement Rural de la Zone Péri- Urbaine de Yaoundé',
              'location'       => 'Communes du ressort du PDRPU',
              'year'           => 2007,
              'commanditaires' => 'PDRPU-YDE'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Animation des sessions de formation/réflexion sur le thème de l’organisation des producteurs pour la commercialisation groupée du café et du cacao',
              'location'       => 'Mombo, Loum, Santchou',
              'year'           => 2008,
              'commanditaires' => 'PDRBA-MN, Coopération Cameroun-Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Atelier de réflexion sur la stratégie de développement des collèges régionaux et du collège national des producteurs de cacao et de café du Conseil Interprofessionnel du Cacao et du Café du Cameroun',
              'location'       => 'Bafia',
              'year'           => 2005,
              'commanditaires' => 'PROMOPA-PARI, Coopération Française'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Atelier d’information et de planification des activités des Unions cacao du pôle de Ntui',
              'location'       => 'Biakoa',
              'year'           => 2003,
              'commanditaires' => 'PPDR, Coopération Cameroun Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Appui conseil des Unions et Fédérations de producteurs de cacao dans la mise en place de comités techniques  en vue d’une meilleure protection des vergers et de la vente groupée du cacao',
              'location'       => 'Ntui, Mbangassina',
              // 'year'           => 2003,
              'description'    => '1998 – 2003',
              'commanditaires' => 'PPDR, Coopération Cameroun Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Suivi de la mobilisation de la participation locale des APE bénéficiaires, de la construction des salles de classe et de l’acquisition des tables bancs',
              'location'       => 'Ntui, Mbangassina',
              // 'year'           => 2003,
              'description'    => '1998 – 2003',
              'commanditaires' => 'PPDR, Coopération Cameroun Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formation des leaders des OP sur l’itinéraire technique de la culture du Bananier Plantain  et la Technique des PIF',
              'location'       => 'Sa’a, Ntui, Mbangassina',
              // 'year'           => 2003,
              'description'    => '2001- 2003',
              'commanditaires' => 'PPDR, Coopération Cameroun Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formation des OP sur la gestion rentable d’une production bananière',
              'location'       => 'Sa’a, Ntui, Mbangassina',
              // 'year'           => 2003,
              'description'    => '2001- 2003',
              'commanditaires' => 'PPDR, Coopération Cameroun Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formation de certains prestataires sur la technique horticole de multiplication du matériel végétal sain in vivo : Technique des Plants Issus de Fragments de Tiges',
              'location'       => 'Centre, Littoral',
              // 'year'           => 2003,
              'description'    => '2001- 2005',
              'commanditaires' => 'PPDR, Coopération Cameroun Union Européenne Et structures concernées'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Suivi encadrement de pépiniéristes de rejets de Bananiers Plantains par la Technique des PIF',
              'location'       => 'Lékié, Mbam et Kim, Dja et Lobo',
              // 'year'           => 2003,
              'description'    => '2001- 2003',
              'commanditaires' => 'PPDR, Coopération Cameroun Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Suivi accompagnement du Réseau Interprofessionnel du Bananier Plantain : RIBAP (Pépiniéristes, Producteurs finaux, Encadreurs de base, autres acteurs de la filière)',
              'location'       => 'Province du Centre',
              // 'year'           => 2003,
              'description'    => '2002- 2008',
              'commanditaires' => 'RIBAP'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Mise en place et formation des membres du Comité de Développement Villageois de ABONDO (SOA) à la technique de multiplication des plants de Bananiers Plantains par la méthode de PIF',
              'location'       => 'Soa',
              'year'           => 2007,
              // 'description'    => '2002- 2008',
              'commanditaires' => 'MINADER'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Elaboration de plusieurs fiches techniques sur les différentes techniques de multiplication végétative des rejets de bananiers plantains',
              'location'       => 'Yaoundé',
              'year'           => 2008,
              // 'description'    => '2002- 2008',
              'commanditaires' => 'AGROCOM'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Multiplication rapide des rejets de bananier : le recepage et la fragmentation des bourgeons',
              'location'       => 'Douala',
              'year'           => 2006,
              // 'description'    => '2002- 2008',
              'commanditaires' => 'AGROCOM'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formation des responsables des APE, CVD, Comités de points d’eau en organisation et gestion',
              'location'       => 'Ntui, Mbangassina',
              // 'year'           => 2008,
              'description'    => '1998 – 2003',
              'commanditaires' => 'PPDR, Coopération Cameroun Union Européenne'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Ateliers de formation des leaders des OP de la Zone autour de la réserve de la Biosphère du Dja sur la conduite d’une pépinière de palmier à huile',
              'location'       => 'Somalomo, Bengbis, Lomié',
              'year'           => 2005,
              // 'description'    => '1998 – 2003',
              'commanditaires' => 'Projet Mesures d’Accompagnement RF-DJA'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Suivi encadrement des GIC au sein de l’Union des GIC de femmes UGROFIL',
              'location'       => 'Polo, Sa’a',
              // 'year'           => 2005,
              'description'    => 'Avril 2004',
              'commanditaires' => 'Programme d’Action Social pour la Santé et l’Environnement. (ONG PASSE)'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Renforcement des capacités de huit (08) associations de quartier dans Yaoundé II à l’approche des projets HIMO (Haute Intensité de Main d’œuvre) en milieu urbain',
              'location'       => 'Yaoundé II',
              // 'year'           => 2005,
              'description'    => 'Avril 2004',
              'commanditaires' => 'AINAFF'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Renforcement des capacités des organisations paysannes dans les domaines relatifs à la gestion des forêts communautaires',
              'location'       => 'MA’AN',
              // 'year'           => 2005,
              'description'    => 'Mars à Août 2006',
              'commanditaires' => 'Cercle de Promotion des Forêts et des Initiatives Locales de Développement'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formations sur le montage des microprojets, utilisation du micro crédit, Genre et gestion des ressources, Genre et utilisation du crédit, Genre et gestion des conflits',
              'location'       => 'Yaoundé, Simbock Nkolodom',
              // 'year'           => 2005,
              'description'    => '2006 / 2007',
              'commanditaires' => 'Centre International de Promotion de la Récupération (CIPRE)'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formation des producteurs  aux suivis des productions et de la commercialisation des produits maraîchers',
              'location'       => 'Nkongsamba',
              // 'year'           => 2005,
              'description'    => '2004 / 2005',
              'commanditaires' => 'Plantation Passim'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Planification du Bloc n° 16 . mise en place des Comités de Développement Villageois (CDV)',
              'location'       => 'Abondo, Akomkada et Abodo',
              // 'year'           => 2005,
              // 'description'    => '2004 / 2005',
              'commanditaires' => 'Projet d’Appui au Développement Communautaire (PADC)'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Processus de développement des capacités dans les Unités de planification du Bloc (planification villageoise déjà faites et renforcement des capacités des communes et communautés à faire)',
              'location'       => 'Abondo, Akomkada et Abodo',
              'year'           => 2006,
              // 'description'    => '2004 / 2005',
              'commanditaires' => 'Projet d’Appui au Développement Communautaire (PADC)'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Appui accompagnement à l’élaboration du Plan Simple de Gestion de la forêt communautaire de AKAK et études de faisabilité commerciale des produits forestiers non ligneux',
              'location'       => 'Province du Sud Arrondissement de CAMPO',
              'year'           => 2007,
              // 'description'    => '2004 / 2005',
              'commanditaires' => 'Soutien au Développement Durable (SDD)'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Mise en place du comité de gestion des redevances forestière dans l’Arrondissement de Campo et formation des membres aux techniques de leadership et à la micro comptabilité',
              'location'       => 'Province du Sud Arrondissement de CAMPO',
              'year'           => 2007,
              // 'description'    => '2004 / 2005',
              'commanditaires' => 'Centre de Recherche et d’Action pour le Développement Durable'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Appui accompagnement à la mise en place du GIC Actions Féminine pour le Développement Agropastoral (AFDAP) et à  la formation du Bureau en micro comptabilité villageoise, technique de leadership',
              'location'       => 'Province de l’Ouest, Arrondissement de Baham',
              'year'           => 2006,
              // 'description'    => '2004 / 2005',
              'commanditaires' => 'Membre du groupe'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Diagnostic de la pauvreté et planification stratégique de développement durable',
              'location'       => 'Monatélé',
              'year'           => 2006,
              // 'description'    => '2004 / 2005',
              'commanditaires' => 'Commune Monatélé – PNUD – ONU Habitat'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formation des conseillers municipaux et des para juristes de la Commune de Santchou sur la décentralisation et les principes de gestion participative d’une municipalité',
              'location'       => 'Santchou (Province de l’Ouest)',
              'year'           => 2006,
              // 'description'    => '2004 / 2005',
              'commanditaires' => 'PADDL-GTZ (Programme d’Appui à la Décentralisation et au Développement Local)'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Coaching (Formation, appui et suivi) du personnel employé des communes de Bayangam, Santchou et Penka-Michel pour l’amélioration des services et les principes de gestion participative d’une commune',
              'location'       => 'Bayangam, Satchou, Penka-michel (Province de l’Ouest)',
              // 'year'           => 2006,
              'description'    => 'Avril à Sept 2007',
              'commanditaires' => 'PADDL-GTZ (Programme d’Appui à la Décentralisation et au Développement Local)'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Approches Participatives et Techniques de Communication, de Sensibilisation et d’Animation Rurale : Séminaire de renforcement des capacités organisé à l’intention des prestataires et du personnel du Ministère des Forêts et de la Faune (MINFOF)  impliqués dans la miseen œuvre du Projet RIGC du 31 juillet au 02 août 2006',
              'location'       => 'Yaoundé',
              'year'           => 2008,
              // 'description'    => 'Avril à Sept 2007',
              'commanditaires' => 'MINFOF'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Réhabilitation du Centre de santé intégré de NKOG-MBONG (mise en œuvre des paillasses, démolition et mise de murs non porteurs en agglos, plafond, plomberie sanitaire, construction d’une fosse sceptique et puisard pour 60 usagers)',
              'location'       => 'Douala',
              'year'           => 2007,
              // 'description'    => 'Avril à Sept 2007',
              'commanditaires' => 'MINSANTE'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Montage de la requête de financement de micro projet d’hydraulique villageoise (aménagement des sources, réhabilitation et construction de puits, remplacement de pompes)',
              'location'       => 'Monatélé',
              'year'           => 2006,
              // 'description'    => 'Avril à Sept 2007',
              'commanditaires' => 'Commune de Monatélé à travers le Programme National de Développement Participatif (PNDP)'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Projet pilote d’entretien et de réhabilitation des routes rurales par les techniques à haute intensité de main d’œuvre',
              'location'       => 'Yaoundé',
              // 'year'           => 2006,
              'description'    => '2007-2008',
              'commanditaires' => 'MINTP'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Cantonnage de certaines routes périphériques dans le Département du Mfoundi-Province du centre',
              'location'       => 'Yaoundé – Soa – Mfou-Nkometou',
              'year'           => 2006,
              // 'description'    => '2007-2008',
              'commanditaires' => 'Projet PADY (Projet d’Assainissement De Yaoundé)'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Sensibilisation et encadrement des populations à la nouvelle stratégie d’entretien et de réhabilitation des routes rurales. Phase 1, 2 et 3',
              'location'       => 'Provinces du Littoral, du Sud-ouest, de l’Ouest, et du Nord-ouest',
              // 'year'           => 2006,
              'description'    => '2001-2002-2003-2004-2005-2006',
              'commanditaires' => 'MINTP'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Mise en place et formation des membres de trois comités de route dans les localités de Mbalmayo, Akonolinga et Ayos sur l’entretien de barrières de pluies, le bouchage des trous et le curage des fossés et des ouvrages d’assainissements',
              'location'       => 'Mbalmayo, Akonolinga et Ayos',
              'year'           => 2007,
              // 'description'    => '2001-2002-2003-2004-2005-2006',
              'commanditaires' => 'MINTP à travers le Bureau d’Etude Technique Cameroon Ingeenering'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Formation pilote des Petites et Moyennes Entreprises sur les Programmes d’Infrastructures à Haute Intensité de Main d’œuvre-HIMO',
              'location'       => 'Yaoundé',
              'year'           => 2008,
              // 'description'    => '2001-2002-2003-2004-2005-2006',
              'commanditaires' => 'Projet PADY (Projet d’Assainissement De Yaoundé)'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Planification et élaboration des stratégies et conception des programmes d\'infrastructures rurales',
              'location'       => 'Ombessa',
              'year'           => 2006,
              // 'description'    => '2001-2002-2003-2004-2005-2006',
              'commanditaires' => 'PNDP (Programme National de Développement Participatif)'
          ]);
          Reference::create([
            'association_id' => 1,
              'title'          => 'Montage de la requête de financement du micro projet d’hydraulique villageoise',
              'location'       => 'Monatélé',
              'year'           => 2005,
              // 'description'    => '2001-2002-2003-2004-2005-2006',
              'commanditaires' => 'Commune Monatélé - PNDP'
          ]);


    }
}
