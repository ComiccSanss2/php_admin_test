# Exercice de Review de Sprint PHP

## La BDD

Créez une table `users` contenant 4 colonnes
- id : PRIMARY KEY AUTO INCREMENT
- username : VARCHAR(255)
- password : VARCHAR(255)
- created_at : DATETIME    valeur par defaut : CURRENT_TIMESTAMP
- updated_at : DATETIME    valeur par defaut : CURRENT_TIMESTAMP

## __User Stories__

Je suis un administrateur de site internet et je souhaite gérer les différents utilisateurs du site internet.

### __Story 0 : Afficher un tableau des utilisateurs__

EN TANT QU'admin
JE VEUX afficher un tableau des utilisateurs existant en DB.
AFIN DE consulter la liste.

### **Criteres d'acceptation S0**

Afficher plusieurs bouton sur chaque entrée du tableau. (Update et Delete).
Ces boutons sont des liens vers le formulaire d'update et l'action de suppression.


### __Story 1 : Créer un utilisateur__

EN TANT QU'admin
JE VEUX créer un utilisateur via le formulaire
AFIN DE donner accès à la plateforme à cet utilisateur.

### **Criteres d'acceptation S1**

Chaque nom d'utilisateur est unique. Impossible d'inscrire un utilisateur avec le même username.

Les mots de passe sont hachés. Au moins en SHA-256.

### __Story 2 : Mettre un jour un utilisateur__

EN TANT QU'admin
JE VEUX mettre à jour un utilisateur via le formulaire.
AFIN DE changer le mot de passe ou le username de cet utilisateur.

### **Criteres d'acceptation S2**

Chaque nom d'utilisateur est unique. Impossible d'inscrire un utilisateur avec le même username.

Les mots de passe sont hachés. Au moins en SHA-256.

### __Story 3 : Supprimer un utilisateur__

EN TANT QU'admin
JE VEUX supprimer un utilisateur via le formulaire.
AFIN DE changer le mot de passe ou le username de cet utilisateur.

### **Criteres d'acceptation S3**

L'utilisateur est supprimé de la DB.

### __Story 4 : Chercher un utilisateur__

EN TANT QU'admin
JE VEUX chercher un utilisateur via le formulaire de recherche.
AFIN DE filtrer le tableau des utilisateurs

### **Criteres d'acceptation S4**

Voir uniquement les utilisateurs correspondant au nom indiquer dans l'input.


