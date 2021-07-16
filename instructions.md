# Mise en situation

- Tout d'abord, félicitations, **c'est ton premier jour de travail** dans une agence web :tada: et si tout se passe bien, ça ne devrait pas être le dernier :muscle:

- **Ton premier projet** sera d'apporter quelques modifications sur un site web parlant de dév qui s'appelle *oDev*
- Pour commencer, **prends quelques minutes** et :
  - jette un coup d'oeil au site web concerné
  - prends connaissance du code source
- :warning: Suis bien les instructions les unes après les autres

## Notre client voudrait ajouter une nouvelle feature :star2:

> Bonjour, je souhaiterais bien avoir des boutons suivant/précédent sur le diaporama des titres d'articles, j'ai vu ça sur l'un de nos concurrents et ça me parait être une fonctionnalité indispensable. Comme d'hab, je compte sur toi pour me faire ça pour hier ! :rage4: Et pour la facture, comme d'hab aussi, je te la règle dans 6 mois. :ok_hand: Cordialement. Bisous, bisous. :sparkling_heart:

Un peu lunatique ce client... :unamused:

## A toi de jouer maintenant

- A partir de maintenant, qui dit **nouvelle fonctionnalité**, dit création d'une **nouvelle branche dédiée** :heavy_check_mark:
  - **vérifie sur quelle branche tu es** :
    - `git branch` affiche la liste des branches et indique la branche courante avec un caractère `*`
    - à ce stade, il n'y a qu'*une seule branche*, la `master` : cette commande devrait donc afficher `* master`
  - **créer la nouvelle branche pour la feature** :
    - `git checkout -b feature-carousel-nav`
    - avec `checkout -b` on crée la branche et on bascule dessus en 1 seule instruction
  - si tu le souhaites, vérifie à nouveau la liste des branches et la branche courante :
    - `git branch`

- Mais avant de commencer à coder, **regarde les exemples de diaporama** dans la [documentation de Bootstrap](https://getbootstrap.com/docs/4.0/components/carousel/#with-controls), tu y trouveras sans doute ton bonheur :tada:
- :warning: **Sans tester le résultat** :warning: :
  - **ajoute le code HTML manquant** pour gérer les boutons suivant/précédent **mais ne teste pas tout de suite et répond d'abord au téléphone**, c'est peut être *important* !

## :phone: Dring... Dring... Allô ! On arrête tout ! Changement de priorité !

- **Le client vient d'appeler et il est vénère** :rage4:
  - **Il y a un bug dans le diaporama**, mais c'est pas de ta faute, tu viens d'arriver :innocent:  
  - Le diaporama afficherait toujours les 3 mêmes articles alors qu'il y en a beaucoup plus dans la liste
  - **Et c'est très urgent, c'est pour avant-hier !** :grimacing:
  - Problème, **tu as déjà écrit un peu de code pour la feature** des boutons suivant/précédent :
    - => malheureusement, ce code n'est ni terminé ni testé :disappointed_relieved:
  - Et **si tu recrées une branche à partir de la branche courante** `feature-carousel-nav`, alors que tu n'as pas encore commit quoi que ce soit, **ce code non terminé fera partie de la nouvelle branche** :disappointed:

## Pas de problème, il n'y a que des solutions

- **Pour te sortir de là** :
  - tu peux faire un **commit du code non terminé** sur la branche `feature-carousel-nav`
    - vérifie les fichiers à valider : `git status`
    - ajoute le fichier `index.php` : `git add index.php`
    - valide le commit : `git commit -m "WIP Diaporama boutons suivant/précédent"`
    - par convention, pour préciser que ce commit correspond à un code non finalisé, on commence le message par **WIP** pour *Work in progress*
- **Ton code est à l'abri** :relieved:

- **Tu peux maintenant créer une branche dédiée pour le correctif, en repartant de la branche `master`**
  - **Reviens d'abord sur master** :
    - `git checkout master`
    - => **le code non terminé a disparu** :tada:
  - Vérifie éventuellement la branche actuelle :
    - `git branch`
    - la branche courante est celle marquée d'un `*` => `* master`
  - **Crée la nouvelle branche** pour coder le correctif :
    - `git checkout -b fix-carousel`
  - si tu le souhaites, vérifie à nouveau la liste des branches et la branche courante avec `git branch` :
    - à ce stade, tu devrais voir 3 branches : `master`, `feature-carousel-nav` et `* fix-carousel`
    - `* fix-carousel` étant la branche courante


## :beetle: Correction du bug

- On vérifie la présence du bug : le diaporama affiche effectivement toujours les 3 mêmes articles :sweat_smile:
- **Mets un foreach ou change la condition du for**, j'en dis pas plus c'est toi l'expert !
- Teste pour vérifier que c'est réparé et que tu n'as rien cassé d'autre :stuck_out_tongue:
- **Commit** :
  - un petit `git status` pour voir l'état du dépôt
  - `git add index.php`
  - `git commit -m "Fix diaporama qui affichait seulement les 3 premiers articles"`
- **Envoie tes modifications sur Github (remote)** :
  - `git push`
  - mais cela retourne une erreur :x:
  - en effet, **la nouvelle branche n'existe pas encore sur Github**
  - `git` te fournit la commande pour envoyer la branche locale vers Github :pray:
    - `git push --set-upstream origin fix-carousel`
    - et si tu veux te la raconter, tu peux utiliser à la place le raccourci suivant : `git push -u origin fix-carousel`

## Comment mettre à jour la production (branche master) ?

**Comment faire, car la branche `fix-carousel` est totalement indépendante de `master`** ? :sob:

- Heureusement => **on peut rapatrier les commits** d'une autre branche sur la branche courante :relieved:
  - **Place toi sur `master`** :
    - `git checkout master`
  - **Fusionne la branche `fix-carousel`** dans la branche `master` :
    - `git merge fix-carousel`
  - **Envoie sur Github** :
    - `git push`
  - **La branche `master` est à jour et prête à être déployée** ! :sunglasses:

## Terminer la feature
**Le coup de stress étant passé** :relieved: => tu peux reprendre ton travail là où tu l'avais laissé :+1:

- **Repasse sur la branche `feature-carousel-nav`**
  - `git checkout feature-carousel-nav`
- **Vérifie le code et teste le**
- **Ajoute le fichier pour ton commit** : `git add index.php`
- **Commit** :
  - `git commit -m "Diaporama : ajout boutons suivant/précédent"`
- Envoie la branche `feature-carousel-nav` sur Github (facultatif):
  - `git push`
- **Reviens sur la branche** `master` :
  - `git checkout master`
- **Fusionne la feature dans** `master` :
  - `git merge feature-carousel-nav`
  - :warning: à ce moment-là, si Git ouvre l'éditeur de texte Nano dans le terminal, ce n'est pas pour te demander un rapport circonstancié sur l'origine du bug du diaporama :scream: mais simplement pour te demander de préciser, si tu le souhaites, l'objet de la fusion de la branche `feature-carousel-nav` dans `master`. :relieved:
  - pour cela, tu peux ajouter un peu de texte puis utiliser les raccourcis claviers de Nano pour sauvegarder ton message de fusion avec `Ctrl+O`, valider avec `Enter`, et enfin quitter avec `Ctrl+X`.
  - la fusion est terminée
- **Envoie sur Github** :tada:
  - `git push`

**Mission accomplie !** :sunglasses:
