# QCM final — Validation Laravel

## 20 questions transverses sur tout le programme

**Nom :** HERBIN François
**Date :** 03/06/2026
 
---

## Question 1

Quelle méthode Eloquent récupère le premier résultat ou lève une exception ?

- A) `all()`
- B) `get()`
- C) `firstOrFail()`
- D) `find()`

-> C

---

## Question 2

Quelle commande Artisan crée une nouvelle migration ?

- A) `php artisan make:migration`
- B) `php artisan db:migrate`
- C) `php artisan migrate:create`
- D) `php artisan schema:make`

-> A

---

## Question 3

Quelle directive Blade affiche une variable en **échappant** le HTML ?

- A) `{!! $var !!}`
- B) `@echo($var)`
- C) `@var($var)`
- D) `{{ $var }}`

-> A

---

## Question 4

Mailpit en local sert à…

- A) Monitorer les queues production
- B) Intercepter les e-mails de dev
- C) Remplacer MySQL
- D) Héberger le site public

-> B

---

## Question 5

Quelle combinaison est correcte pour une route admin protégée ?

- A) `Route::cache('admin')`
- B) `Route::mail('admin')`
- C) `Route::middleware(['auth', 'role:admin'])`
- D) `Route::tinker('admin')`

-> C

---

## Question 6

Quelle assertion PHPUnit/Laravel teste qu'une page répond HTTP 200 ?

- A) `$response->assertStatus(200)`
- B) `$response->assertMail()`
- C) `$response->assertQueue()`
- D) `$response->assertDocker()`

-> A

---

## Question 7

Docker Compose orchestre surtout…

- A) Uniquement les tests PHPUnit
- B) Les Policies Laravel
- C) L'export PDF Slidev
- D) Plusieurs services (web, db, redis…) ensemble

-> D

---

## Question 8

Un job Laravel échoue 3 fois ; il est ensuite déplacé dans…

- A) `users`
- B) `failed_jobs` (selon config)
- C) `sessions`
- D) `migrations`

-> B

---

## Question 9

Après déploiement en production, à quoi sert `php artisan route:cache` ?

- A) Désactiver HTTPS
- B) Supprimer les tests
- C) Améliorer les performances en production
- D) Remplacer Redis

-> V

---

## Question 10

`@can('update', $article)` dans un template Blade s'appuie sur…

- A) Une Policy ou Gate
- B) Un Mailable
- C) Un Job
- D) Un Dockerfile

-> A

---

## Question 11

Quel composant Blade du kit mail intégré affiche un bouton d'action ?

- A) `<x-queue::button>`
- B) `<x-auth::button>`
- C) `<x-redis::button>`
- D) `<x-mail::button>`

-> D

---

## Question 12

Quelle commande Artisan ouvre la console REPL interactive de Laravel ?

- A) `php artisan dusk`
- B) `php artisan tinker`
- C) `php artisan horizon`
- D) `php artisan sail:pdf`

-> B

---

## Question 13

Dans quel fichier de configuration se trouvent les connexions à la base de données ?

- A) `config/app.php`
- B) `routes/web.php`
- C) `config/database.php`
- D) `bootstrap/app.php`

-> C

---

## Question 14

Quelle classe de base faut-il étendre pour créer un Mailable Laravel ?

- A) `Mailable`
- B) `Notification`
- C) `Job`
- D) `Command`

-> A

---

## Question 15

Que fait `php artisan queue:work` ?

- A) Lance un serveur web de développement
- B) Exécute les migrations en attente
- C) Publie les assets Vite
- D) Démarre un worker qui traite les jobs en file

-> D

---

## Question 16

En Laravel, comment s'appellent les vues HTML réutilisables préfixées `<x-` ?

- A) Livewire
- B) Les composants Blade
- C) Eloquent Scopes
- D) Artisan Stubs

-> B

---

## Question 17

Quel driver est recommandé pour les sessions et le cache en production haute disponibilité ?

- A) `file`
- B) `database`
- C) `redis`
- D) `array`

-> C

---

## Question 18

Quelle méthode Eloquent crée un enregistrement s'il n'existe pas, ou le met à jour sinon ?

- A) `updateOrCreate()`
- B) `findOrFail()`
- C) `attach()`
- D) `sync()`

-> A

---

## Question 19

Quel fichier définit l'image Docker de base et les instructions de build de l'application ?

- A) `docker-compose.yml`
- B) `.dockerignore`
- C) `.env.docker`
- D) `Dockerfile`

-> D

---

## Question 20

Quel fichier ne doit **jamais** être commité avec des secrets de production ?

- A) `routes/web.php`
- B) `.env`
- C) `app/Models/User.php`
- D) `public/index.php`

-> B

---