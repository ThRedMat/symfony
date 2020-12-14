# symfony

Bonjour Thomas, on a voulu continuer la partie 2.

On a du supprimer le travail de la semaine dernnière en récupérant une version précédente mais on ne peut quand même pas résoudre les erreurs.

On vois très bien comment faire mais avec tout les problêmes on en a plein la tête donc pas de partie 2.
Désolé.

Quand on essaie d'aller sur la page.

```bash
[←[32mWeb Server ←[39m] Dec 14 22:57:48 |INFO   | ←[33mPHP   ←[39m listening ←[36mpath←[39m="C:\\Program Files (x86)\\php-7.4.11-nts-Win32-vc15-x64\\php-cgi.exe" ←[36mphp←[39m="7.4.11" ←[36mport←[39m=5914
[←[32mWeb Server ←[39m] Dec 14 22:57:55 |←[37;41mERROR  ←[39;49m| ←[33mSERVER←[39m GET  (500) ←]8;;https://127.0.0.1:8004/←\/←]8;;←\←[39m ←[36mip←[39m="::1"
[←[32mWeb Server ←[39m] ream: No such file or directory in C:\Users\tauri\OneDrive\Bureau\Cours\b2_php_symfony\symfony\indeed_ynov_2021\public\index.php on line 8
[←[32mWeb Server ←[39m] [14-Dec-2020 21:57:55 UTC] PHP Fatal error:  require(): Failed opening required 'C:\Users\tauri\OneDrive\Bureau\Cours\b2_php_symfony\symfony\indeed_ynov_2021/vendor/autoload.php' (include_path='.;C:\php\pear') in C:\Users\tauri\OneDrive\Bureau\Cours\b2_php_symfony\symfony\indeed_ynov_2021\public\index.php on line 8
```

Quand on essaied de faire une commande.

```bash
$ php bin/console make:auth
PHP Warning:  require(C:\Users\tauri\OneDrive\Bureau\Cours\b2_php_symfony\symfony\indeed_ynov_2021/vendor/autoload.php): failed to open stream: No such file or directory in C:\Users\tauri\OneDrive\Bureau\Cours\b2_php_symfony\symfony\indeed_ynov_2021\bin\console on line 16
PHP Fatal error:  require(): Failed opening required 'C:\Users\tauri\OneDrive\Bureau\Cours\b2_php_symfony\symfony\indeed_ynov_2021/vendor/autoload.php' (include_path='.;C:\php\pear') in C:\Users\tauri\OneDrive\Bureau\Cours\b2_php_symfony\symfony\indeed_ynov_2021\bin\console on line 16
```