## Reproduction repository

### The issue

Having a Livewire component `app/Livewire/TaskList.php` where each Task is also a compoenent. `app/Livewire/ListItem.php`, while having the list to be sortable with Drag and Drop using SortableJS.
Using HTML5 native it's possible to achieve well, but it has no touchevents etc, so, no chance.
Is it possible at all to make it work with this library?

### What's going on?

The starting list has 3 tasks. We can drag however we want, no issues but one which is: when we drag any item to the bottom of the list.

The LW marker gets out of order and panics things! (Not LW fault, but it's a difficult circunstance having to have those markers.) 


###  Up and running

The usual:
```
cp .env.example
composer install --ignore-platform-reqs
php artisan key:generate
touch database/database.sqlite
php artisan migrate:fresh --seed
php artisan serve
```

