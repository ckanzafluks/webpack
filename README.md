
# Installation de la version 13
nvm install 13.*

# Changement de version
nvm use 13

# Installation de Yarn
yarn install

# lancer le serveur
npm run dev-server

# builder
npm run buid

yarn add vue
yarn add vue-loader
yarn add vue-template-compiler

yarn encore dev-server --hot

# si erreur 
echo fs.inotify.max_user_watches=524288 | sudo tee -a /etc/sysctl.conf && sudo sysctl -p