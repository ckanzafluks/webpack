
# Etape 1, Installer de la version 13 de nvm
nvm install 13.*

# Etape 2: Utiliser la version précédemment installée
nvm use 13

# Etape 3 : Installer Yarn
yarn install

# Etape 4 : Installer toutes les dépendances
npm run build
yarn add vue
yarn add vue-loader
yarn add vue-template-compiler
yarn add @vue/babel-preset-jsx 
yarn add @vue/babel-helper-vue-jsx-merge-props --dev
yarn add vue bootstrap-vue bootstrap
yarn add sass-loader@^8.0.0 node-sass --dev

# Pour compiler les fichiers Vuejs en live pendant les developpements
yarn encore dev-server --hot

# Pour compiler et builder en prod
yarn encore production

# Lancer le server
php -S localhost:8000 -t public

# si erreur 
echo fs.inotify.max_user_watches=524288 | sudo tee -a /etc/sysctl.conf && sudo sysctl -p


# Liens vers la doc
https://bootstrap-vue.org/docs/components/form/#form