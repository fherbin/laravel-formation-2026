# QCM — Module 3
## Authentification & autorisations

**Nom :** HERBIN François  
**Date :** 02/06/26
 
---

## Question 1

Quelle est la différence entre authentification et autorisation ?

- A) C'est la même chose
- B) Auth = cache ; autorisation = session
- C) Auth = API ; autorisation = Blade
- D) Auth = qui êtes-vous ; autorisation = que pouvez-vous faire

*B*

---

## Question 2

Dans la stack auth Laravel 2025, Fortify sert surtout à…

- A) Fournir la logique auth (routes/controllers) sans imposer les vues
- B) Remplacer Sanctum pour l'API mobile
- C) Compiler les assets Vite
- D) Créer les Policies automatiquement

*A*

---

## Question 3

Quel middleware protège une route réservée aux utilisateurs connectés ?

- A) `guest`
- B) `cache`
- C) `auth`
- D) `verified` seul, sans `auth`

*B*

---

## Question 4

À quoi sert `@can('update', $post)` dans une vue Blade ?

- A) Créer automatiquement une route PUT
- B) Afficher le bloc uniquement si l'utilisateur est autorisé
- C) Hasher le mot de passe de l'utilisateur
- D) Invalider la session courante

*B*

---

## Question 5

À quoi sert une Policy Laravel ?

- A) À envoyer des e-mails
- B) À créer des migrations
- C) À compiler Vite
- D) À centraliser les règles d'accès sur un modèle

*D*

---

## Question 6

Quel comportement a le middleware `guest` ?

- A) Redirige vers login si l'utilisateur n'est pas connecté
- B) Crée un token Sanctum pour l'API
- C) Si déjà connecté, redirige l'utilisateur (ex. depuis `/login`)
- D) Protège une route API avec un Bearer token

*A*

---

## Question 7

Quelle différence entre Gate et Policy ?

- A) Gate = règle globale nommée ; Policy = règles liées à un modèle
- B) Gate = pour Blade ; Policy = pour SQL uniquement
- C) Aucune différence en Laravel 12
- D) Gate remplace le middleware `auth`

*C*

---

## Question 8

Lors d'une déconnexion sécurisée, que faut-il faire en plus de `Auth::logout()` ?

- A) Rien de plus
- B) Supprimer la base de données
- C) Invalider la session et régénérer le token CSRF
- D) Vider le cache Redis uniquement

*A*

---

## Question 9

Un utilisateur **connecté** tente de modifier le post d'un autre sans droit. Quel code HTTP ?

- A) 401 Unauthorized
- B) 404 Not Found
- C) 422 Unprocessable Entity
- D) 403 Forbidden

*D*

---

## Question 10

Sanctum sert surtout à…

- A) Authentifier une API par token (SPA same-origin ou mobile)
- B) Styliser les vues Blade
- C) Remplacer Eloquent
- D) Gérer les queues

*A*

---

## Question 11

Dans une vue Blade, que fait `@auth` … `@endauth` ?

- A) Affiche le bloc uniquement si l'utilisateur est connecté
- B) Redirige automatiquement vers `/login`
- C) Crée une session pour l'utilisateur
- D) Vérifie une Policy sur un modèle

*A*

---

## Question 12

Dans un contrôleur, que fait `$this->authorize('update', $post)` ?

- A) Met à jour le post en base de données
- B) Vérifie l'autorisation et lève une 403 si refusé
- C) Envoie un email de confirmation à l'auteur
- D) Crée un nouveau token CSRF pour le formulaire

*B*
