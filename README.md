
## Sobre DVGames

DVGames es una tienda virtual que vende videojuegos tanto físicos como digitales, de las consolas Playstation4, Xbox One y Nintendo Switch.

## Como instalar el proyecto
- Instalar [Laravel](https://laravel.com/docs/8.x/installation) y [git](https://git-scm.com/book/es/v2/Inicio---Sobre-el-Control-de-Versiones-Instalaci%C3%B3n-de-Git) en tu ordenador.
- Inicializar el proyecto como "dv-games", ejecutando lo siguiente en la linea de comandos de su sistema operativo:
```bash
laravel new dv-games
```
- Clonar el repositorio desde github ejecutando:
```bash
git clone https://github.com/rcastia/dv-games
```
- Una vez clonado el repositorio, instalar lo siguiente:
```bash
npm install
```
```bash
npm install -D tailwindcss@latest postcss@latest autoprefixer@latest
```
```bash
npx tailwindcss init
```
- A continuación, seguir las instrucciones de [como configurar tailwind con laravel.](https://tailwindcss.com/docs/guides/laravel)

- Ya habiendo instalado todas las dependencias necesitadas procedemos a crear una base de datos con el nombre de "dv_games" y realizar las migrations y seeders del proyecto:
```bash
php artisan migrate
```
```bash
php artisan seed
```
- Ya terminados los pasos anteriores, ejecutamos el siguiente código y ya podemos utilizar el proyecto:
```bash
php artisan serve
```

- Desarrolado por Roberto Castia.
- Profesor: Leandro Gomez.
- Materia: Aplicaciones Enriquecidas.
- Cuatimestre: 5to.
- Carrera: Diseño y Programación Web.
- Año: 2021.
