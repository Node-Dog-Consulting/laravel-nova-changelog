# Laravel Nova Changelog
A Laravel Nova 4 tool to display the content of the file [CHANGELOG.md](CHANGELOG.md) inside Laravel Nova panel.

## Install
```bash
composer require jmztaylor/laravel-nova-changelog
```


## Usage
Register the package 
```php
//NovaServiceProvider.php
public function tools(): array
{
    return [
        //...
        new \HenryAvila\Changelog\Changelog(),    
    ];
}
```

if you use Laravel Nova 4 [Custom Menu](https://nova.laravel.com/docs/customization/menus.html), use use the following code too
```php
\HenryAvila\Changelog\Changelog::make()->menu($request),
```

## Preview
The following CHANGELOG.md file
```markdown
As principais mudanças neste projeto serão documentadas neste arquivo.

O formato deste arquivo é baseado em [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), e este projeto adere
ao [Controle de versão semântica](https://semver.org/spec/v2.0.0.html).

---
## v1.0.0 - 11/08/2022
- Laravel 10
- Laravel Nova 4
- Vue 3 com Typescript
- Tailwind CSS
- Laravel Sanctum
- E-mail tracking
- Multi Tenant
- Vários pacotes e personalizaçoes
```

Will be displayed in Laravel Nova as:
![image](https://github.com/Node-Dog-Consulting/laravel-nova-changelog/assets/8429941/9cd72fdf-02dd-4ffa-89cd-9d9543aec362)
