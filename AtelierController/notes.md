#  Atelier Controller 



- Contrôleurs à action unique : **__invoke()**   : (Vous pouvez générer un contrôleur invocable en utilisant l' --invokableoption de la make:controllercommande Artisan :  **php artisan make:controller ProvisionServer --invokable** )
- **Missing Méthode** 
- **withTrashed Méthode** 



- Middleware dans la class Controller (middlewareméthode statique)

- Vous pouvez également définir un middleware de contrôleur sous forme de fermetures, ce qui fournit un moyen pratique de définir un middleware en ligne sans écrire une classe middleware entière.

- Enregitrer plusieurs controlleurs de ressource à la fois en passant un tableau à la resources méthode : 
 - ** Route::resources([
    'photos' => PhotoController::class,
    'posts' => PostController::class,
]);**   


- Spécification du modèle de ressources : **php artisan make:controller PhotoController --model=Photo --resource**

- Routage : **only()** and **except()**

- **apiResources Méthode**   : php artisan make:controller PhotoController --api

- **scoped Méthode**

- **apiSingleton**
     


