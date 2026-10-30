import entryPointApp from './src/entryPointApp.js';

global.entryMode = 'app';
const main = new entryPointApp();
try{
    main.init();
}catch(e){
    console.error('Error initializing app: '+e+ ' on: '+e.stack);
    process.exit();
}