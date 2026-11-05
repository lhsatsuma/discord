global.entryMode = 'app';
global.startTimeApp = new Date();
const {default: entryPointApp} = await import('#includes/entryPointApp.ts');
const main = new entryPointApp();
try{
    main.init();
}catch(e){
    console.error('Error initializing app: '+e+ ' on: '+e.stack);
    process.exit();
}