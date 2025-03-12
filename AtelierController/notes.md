#  Atelier Controller 

- **scoped Méthode**

- **apiSingleton**

- **Missing Méthode** 

- **withTrashed Méthode** 



- Contrôleurs à action unique : **__invoke()**   : (Vous pouvez générer un contrôleur invocable en utilisant l' --invokableoption de la make:controllercommande Artisan :  **php artisan make:controller ProvisionServer --invokable** )




- Enregitrer plusieurs controlleurs de ressource à la fois en passant un tableau à la resources méthode : 
                ** Route::resources([
                        'photos' => PhotoController::class,
                        'posts' => PostController::class,
                    ]);**   


- Spécification du modèle de ressources : **php artisan make:controller PhotoController --model=Photo --resource**

- Routage : **only()** and **except()**

- **apiResources Méthode**   : php artisan make:controller PhotoController --api



